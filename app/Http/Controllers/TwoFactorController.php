<?php

namespace App\Http\Controllers;

use App\Services\Google2FAService;
use Auth;
use Illuminate\Http\Request;

class TwoFactorController extends Controller
{
    //
    protected $google2fa;

    public function __construct(Google2FAService $google2fa)
    {
        $this->google2fa = $google2fa;
    }

    public function enableTwoFactor(Request $request)
    {
        $user = Auth::user();
        $secret = $this->google2fa->generateSecretKey();

        $user->google2fa_secret = $secret;
        $user->save();

        $qrCodeUrl = $this->google2fa->getQRCodeUrl(
            config('app.name'),
            $user->email,
            $secret
        );

        $qrCode = $this->google2fa->generateQRCode($qrCodeUrl);

        return view('cms.users.2fa', [
            'user'=> Auth::user(),
              'qrCodeUrl' => $qrCode, 
              'secret' => $secret]);
    }

    public function verifyTwoFactor(Request $request)
    {
        $user = Auth::user();
        $secret = $user->google2fa_secret;
        $oneTimePassword = $request->input('otp');
        if ($this->google2fa->verifyKey($secret, $oneTimePassword)) {
            // Mark user as verified
            $user->is_enable_2fa = true;
            $user->save();
            return redirect()->route('home')->with('success', 'Đã kích hoạt 2FA!');
        }

        return redirect()->back()->with(['error' => 'Sai mã otp. Vui lòng quét lại qr và nhập lại otp khác']);
    }
}
