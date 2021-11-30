<?php

namespace App\Http\Middleware;

use App\Result;
use Closure;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ResultAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $url = $request->route()->parameter('id');

        $user_id = Result::with('user')->where('id', $url)->value('user_id');

        if (Auth::id() == $user_id or \auth()->user()->is_admin) {
            return $next($request);
        }
        else
            abort(403, 'Zugang Verboten');
    }
}
