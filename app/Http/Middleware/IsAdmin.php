<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Role;

class IsAdmin
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
        $rol = Role::where('id', '=', $request->user()->roles_id)->get();
        if ($rol[0]->name != "Admin") 
        {
            return redirect('/');
        }
        return $next($request);
    }
}
