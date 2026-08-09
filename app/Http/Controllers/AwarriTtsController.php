<?php

namespace App\Http\Controllers;

use App\Services\AfricanVoiceService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

class AwarriTtsController extends Controller
{
    public function synthesize(
        Request $request,
        AfricanVoiceService $voiceService
    ): JsonResponse {

        $validated = $request->validate([
            'text' => [
                'required',
                'string',
                'max:2000',
            ],

            'language' => [
                'required',
                'string',
                'in:english,hausa,igbo,yoruba,pidgin',
            ],
        ]);

        try {

            $result = $voiceService->synthesize(
                $validated['text'],
                $validated['language']
            );

            return response()->json([
                'success' => true,
                'audioUrl' => $result['audioUrl'],
                'audioFormat' => $result['audioFormat'],
                'creditsUsed' => $result['creditsUsed'],
                'activityLogId' => $result['activityLogId'],
            ]);

        } catch (Throwable $e) {

            report($e);

            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}