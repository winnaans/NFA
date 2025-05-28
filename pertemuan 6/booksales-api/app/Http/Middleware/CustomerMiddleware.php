<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomerMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Misal cek user punya role 'customer'
        if (!$request->user() || $request->user()->role !== 'customer') {
            return response()->json(['message' => 'Unauthorized - Customer only'], 403);
        }

        return $next($request);
    }
}
