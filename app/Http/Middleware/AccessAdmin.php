<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AccessAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        if (Gate::allows('is-admin')) {
//            return $next($request);
//        }
//
//        else
//            abort(403);

//        return redirect('/');

        if (!auth()->check() || !auth()->user()->is_admin) {
            abort(403, 'Zugang Verboten');
        }

        return $next($request);
    }
}
