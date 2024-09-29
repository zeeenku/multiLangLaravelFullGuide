<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\AuthMultiLangService;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MultiLangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        AuthMultiLangService::setlocale();
        return $next($request);
    }
}
