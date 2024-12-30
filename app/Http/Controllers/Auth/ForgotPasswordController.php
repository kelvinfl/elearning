<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('auth.reset');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        // Mengirim email reset password
        $response = Password::sendResetLink($request->only('email'));

        return $response == Password::RESET_LINK_SENT
                    ? back()->with('status', 'We have e-mailed your password reset link!')
                    : back()->withErrors(['email' => 'We couldn’t find an account with that email address.']);
    }
}

