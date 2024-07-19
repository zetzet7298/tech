<?php
namespace App\Services;

use PragmaRX\Google2FA\Google2FA;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Writer;

class Google2FAService
{
    protected $google2fa;

    public function __construct()
    {
        $this->google2fa = new Google2FA();
    }

    public function generateSecretKey()
    {
        return $this->google2fa->generateSecretKey();
    }

    public function getQRCodeUrl($companyName, $userName, $secret)
    {
        return $this->google2fa->getQRCodeUrl($companyName, $userName, $secret);
    }

    public function generateQRCode($url)
    {
        $renderer = new ImageRenderer(
            new RendererStyle(256),
            new SvgImageBackEnd()
        );
        $writer = new Writer($renderer);
        $qrCode = $writer->writeString($url);

        return 'data:image/svg+xml;base64,' . base64_encode($qrCode);
    }

    public function verifyKey($secret, $oneTimePassword)
    {
        return $this->google2fa->verifyKey($secret, $oneTimePassword);
    }
}
