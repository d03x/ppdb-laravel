<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Cache::get('current_user')) {
            Cache::set('current_user', Auth::user(), now()->addMinutes(1));
        }
        $user = Cache::get('current_user');
        View::share('current_user', $user);
        View::share('status_formulir',$user->formulir?->status_formulir);
        View::share('status_akhir',$user->formulir?->status_akhir);
        return $next($request);
    }
}
