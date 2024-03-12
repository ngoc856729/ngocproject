<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Models\users_system;
class cookiecheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            $cookieValue = $request->cookie('token');
            $token = User::where('remember_token',$cookieValue)->first();
            $role=$token->id_roles;
            if ($role!=1) {
                return redirect ("/");
            }
          } catch (\Exception) {
            return redirect("/");
          }
        
        return $next($request);
    }
}
