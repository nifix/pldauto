<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class checkblock {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        if (!empty($request->user()->rights)) {
            $result = DB::table('users')->select('id','rights')->where('id', $request->user()->id)->first();
            if ($result->rights == '1000')
            {
                return redirect('blocked')->with('error','Désolé, votre compte a été désactivé.');
            } 
        }
        return $next($request);
    }
}
