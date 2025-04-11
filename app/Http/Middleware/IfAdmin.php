<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Roles;
use Auth;

class IfAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        If(Auth::user()){
            $role = Role::where('id', auth()->role_id)->first();
            if($role-> == '1'){
                return $next($request);
            }
        }
        return redirect(url('/'));
    }
}
