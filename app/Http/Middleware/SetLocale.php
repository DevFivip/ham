<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        // $lang = $request->server()["HTTP_ACCEPT_LANGUAGE"];
        // $lang = explode(',', $lang);

        // switch ($lang[0]) {
        //     case 'es':
        //         app()->setLocale($lang[0]);
        //         break;

        //     case 'en':
        //         app()->setLocale($lang[0]);
        //         break;

        //     case 'fr':
        //         app()->setLocale($lang[0]);
        //         break;

        //     default:
        //         app()->setLocale($request->segment(1));
        //         break;
        // }

        
        app()->setLocale($request->segment(1));

        return $next($request);
    }
}
