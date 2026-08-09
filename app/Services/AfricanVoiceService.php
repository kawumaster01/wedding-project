<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use RuntimeException;

class AfricanVoiceService
{
    protected string $baseUrl;
    protected ?string $apiKey;

    public function __construct()
    {
        $this->baseUrl = rtrim(
            config('services.awarri.base_url'),
            '/'
        );

        $this->apiKey = config('services.awarri.api_key');
    }

    public function synthesize(
        string $text,
        string $language = 'english'
    ): array {

        if (empty($this->apiKey)) {
            throw new RuntimeException(
                'Awarri API key is not configured.'
            );
        }

        $text = trim($text);

        if ($text === '') {
            throw new RuntimeException(
                'Text cannot be empty.'
            );
        }

        $language = strtolower(trim($language));

        $allowedLanguages = [
            'english',
            'hausa',
            'igbo',
            'yoruba',
            'pidgin',
        ];

        if (!in_array($language, $allowedLanguages, true)) {
            throw new RuntimeException(
                'Unsupported language.'
            );
        }

        try {

            $response = Http::timeout(120)
                ->connectTimeout(20)
                ->withHeaders([
                    'X-API-Key' => $this->apiKey,
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ])
                ->post(
                    $this->baseUrl . '/v1/voice/tts/synthesize',
                    [
                        'text' => $text,
                        'language' => $language,
                    ]
                );

        } catch (\Throwable $e) {

            throw new RuntimeException(
                'Could not connect to Awarri: ' .
                $e->getMessage(),
                0,
                $e
            );
        }

        if ($response->failed()) {

            throw new RuntimeException(
                'Awarri TTS failed. HTTP ' .
                $response->status() .
                ': ' .
                $response->body()
            );
        }

        $data = $response->json();

        if (!is_array($data)) {
            throw new RuntimeException(
                'Invalid response received from Awarri.'
            );
        }

        if (empty($data['audioUrl'])) {
            throw new RuntimeException(
                'Awarri returned no audio URL.'
            );
        }

        return [
            'audioUrl' => $data['audioUrl'],
            'audioFormat' => $data['audioFormat'] ?? 'mp3',
            'creditsUsed' => $data['creditsUsed'] ?? null,
            'activityLogId' => $data['activityLogId'] ?? null,
        ];
    }
}