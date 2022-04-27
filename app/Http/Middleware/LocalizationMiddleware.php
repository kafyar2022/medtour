<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = Session::get('locale');
        $defaultLocale = 'ru';

        if ($locale != null) {
            App::setLocale($locale);
        } else {
            Session::put('locale', $defaultLocale);
            App::setLocale($defaultLocale);
        }

        return $next($request);
    }
}
