<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        $check = Auth::guard('admin')->check();
        if($check) {
            return $next($request);
        } else {
            return redirect('/admin/login');
        }
    }
}
