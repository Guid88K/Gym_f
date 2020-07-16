<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Nutritionist
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
        if (Auth::check()) {
            if (Auth::user()->isTrainer()) {
                return redirect(url('/trainer/programs'));
            } else if (Auth::user()->isAdmin()) {
                return redirect(url('/admin/programs'));
            } else if (Auth::user()->isUser()) {
                return redirect(url('/user/programs'));
            }else if (Auth::user()->isNutritionist()) {
                return $next($request);
            }
        }
        abort(404);
    }
}
