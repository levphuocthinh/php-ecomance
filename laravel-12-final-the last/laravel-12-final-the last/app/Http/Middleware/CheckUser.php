<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUser
{
    public function handle(Request $request, Closure $next): Response
    {
        $check  = Auth::guard('user')->check();
        if($check) {
            return $next($request);
        } else {
            // toastr()->error('Ê cu, chổ này không dành cho chú!');
            return redirect('/auth');
        }
    }
}
