<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
class tokencheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = User::where('remember_token',$request->token)->first();
        if (!$token) {
            return response()->json(['check' => false, 'msg' => "Vui lòng điền đầy đủ token vào"]);
        }
        return $next($request);
    }
}
