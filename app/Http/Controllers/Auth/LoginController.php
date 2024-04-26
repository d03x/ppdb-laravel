<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function loginView()
    {
        return view('pages.auth.login');
    }

    public function authenticated(LoginFormRequest $loginFormRequest)
    {
        $loginFormRequest->authenticated();
        $loginFormRequest->session()->regenerate();
        return Redirect::intended(route('dashboard'));
    }
}
