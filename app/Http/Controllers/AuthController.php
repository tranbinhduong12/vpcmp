<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        // test
        return view('auth.login');
    }

    public function showResetPasswordForm()
    {
        return view('auth.reset-password');
    }

    public function showResetPasswordAlert()
    {
        return view('auth.reset-password-alert');
    }

    public function showChangePasswordForm()
    {
        $token = true;
        if ($token) {
            return view('auth.change-password');
        } else {
            return view('auth.reset-password-error');
        }
    }

    public function myAccount()
    {
        return view('auth.my-account');
    }
    public function myAccountEdit()
    {
        return view('auth.my-account-edit');
    }
}
