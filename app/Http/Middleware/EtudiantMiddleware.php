<?php
/**
 * Created by PhpStorm.
 * User: youssef
 * Date: 4/5/2016
 * Time: 13:26
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class EtudiantMiddleware {

    public function handle($request, Closure $next)
    {
        if (Auth::guard('etudiant')->check()) {
            return $next($request);
        }
        else if (Auth::guard('professeur')->check()) {
            return redirect('professeur/home');
        }
        else{
            return redirect('/');
        }
    }

}