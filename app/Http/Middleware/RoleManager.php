<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
       if(!Auth::check()){
              return redirect()->route('login');
       }
       $authUserRole = Auth::user()->role;


       switch ($role) {
        case 'admin':
            if ($authUserRole == 1) {
                return $next($request);
            }
            break;
        case 'user':
            if ($authUserRole == 2) {
                return $next($request);
            }
            break;
        case 'organization':
            if ($authUserRole == 3) {
                return $next($request);
            }
            break;
    }
    
    return match ($authUserRole) {
        1 => redirect()->route('dashboard.overview'),
        2 => redirect()->route('dashboard.overview'),
        3 => redirect()->route('organization'),
        default => redirect()->route('landingpage'),
    };    
      
    }
}
