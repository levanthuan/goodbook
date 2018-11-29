<?php

namespace App\Modules\Backend\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    /**
     * @param         $request
     * @param Closure $next
     *
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() || Auth::viaRemember()) {
            return $next($request);
        }

        return redirect()->route('admin.auth.login');
    }
}
