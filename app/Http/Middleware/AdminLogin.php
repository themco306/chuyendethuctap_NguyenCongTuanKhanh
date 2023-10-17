<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard('admin')->check()) {

            return redirect()->route('admin.getlogin');
        } else {
            $user = Auth::guard('admin')->user();
            if ($user->roles == 0) {
                Auth::guard('admin')->logout();
                return redirect()->route("site.index");
            }
        }
        return $next($request);
    }
}
