use Barryvdh\DomPDF\Facade\Pdf;

public function downloadInvite()
{
    $data = [
        'groom' => 'Safiyan (Kawumaster)',
        'bride' => 'Asmau (Nanah)',
        'date' => '11 July 2026',
        'venue' => 'Itas Gadau, Bauchi, Nigeria'
    ];

    $pdf = Pdf::loadView('invite', $data);

    return $pdf->download('wedding-invitation.pdf');
}