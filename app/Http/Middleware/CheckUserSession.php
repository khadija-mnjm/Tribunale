<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckUserSession
{
    public function handle(Request $request, Closure $next)
    {
        if (Session::has('user')) {
            return $next($request);
        }

        return redirect()->route('login1');
    }
}
?>