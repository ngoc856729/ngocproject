<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Models\users_system;
class Admincheck
{
    public function handle(Request $request, Closure $next): Response
    {
        $currentUser = User::where('remember_token',$request->token)->first();
       
        if ($currentUser->id_roles != 1) {
            return response()->json(['check' => false, 'msg' => "Bạn không có quyenf truy cập vào api này"]);
        }
        return $next($request);
    }
}
