<?php
/**
 * Created by PhpStorm.
 * User: youssef
 * Date: 4/5/2016
 * Time: 13:27
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class ProfesseurMiddleware {
    public function handle($request, Closure $next)
    {
        if (Auth::guard('professeur')->check()) {
            return $next($request);
        }
        else if (Auth::guard('etudiant')->check()) {
            return redirect('etudiant/home');
        }
        else{
            return redirect('/');
        }
    }
}