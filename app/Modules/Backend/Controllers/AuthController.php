<?php
namespace App\Modules\Backend\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthController extends Controller{

    public function login(Request $request)
    {
        if (Auth::check() || Auth::viaRemember()) {
            return redirect()->route('admin.site.index');
        }

        return view('Backend::auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $hasRemember = ($request->get('remember') == 1) ? true : false;
        if (Auth::attempt($credentials, $hasRemember)) {
            // Authentication passed...
            return redirect()->route('admin.site.index');
        }
        return redirect()->route('admin.auth.login')->withErrors([
            'message' => 'Please check account information'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.auth.login');
    }
}