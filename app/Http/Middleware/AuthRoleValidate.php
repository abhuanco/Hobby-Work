<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use function PHPUnit\Framework\stringStartsWith;

class AuthRoleValidate
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->role === 'client') {
            if(str_starts_with($request->getRequestUri(), '/dashboard')) {
                return redirect('/client');
            }
        } elseif (auth()->user()->role === 'admin') {
            if(str_starts_with($request->getRequestUri(), '/client')) {
                return redirect('/dashboard');
            }
        }
        return $next($request);
    }
}
