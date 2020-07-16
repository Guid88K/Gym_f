<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class User
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
            } else if (Auth::user()->isNutritionist()) {
                return redirect(url('/nutritionist/programs'));
            } else if (Auth::user()->isAdmin()) {
                return redirect(url('/admin/programs'));
            }else if (Auth::user()->isUser()) {
                return $next($request);
            }
        }

        abort(404);  // for other user throw 404 error
    }
}
