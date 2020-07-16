<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Trainer
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->isNutritionist()) {
                return redirect(url('/nutritionist/programs'));
            } else if (Auth::user()->isAdmin()) {
                return redirect(url('/admin/programs'));
            } else if (Auth::user()->isUser()) {
                return redirect(url('/user/programs'));
            } else if (Auth::user()->isTrainer()) {
                return $next($request);
            }
        }
        abort(404);
    }
}
