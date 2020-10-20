<?php

namespace App\Http\Middleware;

use App\Visitor;
use Closure;

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
        $ip = $request->getClientIp();
        $visitor = Visitor::where('ip',$ip)->first();
        if($visitor==null){
            Visitor::create([
                'ip' => $ip,
                'counter' =>1
            ]);
        }else{
            Visitor::where('ip',$ip)->update([
                'counter' =>$visitor->counter + 1
            ]);
        }
        return $next($request);
    }
}
