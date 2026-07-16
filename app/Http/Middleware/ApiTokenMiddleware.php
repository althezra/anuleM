<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class ApiTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next)
    {
        // Ambil token dari header `X-API-TOKEN` atau dari Bearer token
        $token = $request->header('X-API-TOKEN') ?: $request->bearerToken();

        if (!$token) {
            return response()->json(['message' => 'API token required'], 401);
        }

        // Cari user berdasarkan api_token
        $user = User::where('api_token', $token)->first();

        if (!$user) {
            return response()->json(['message' => 'Invalid API token'], 401);
        }

        // Supaya bisa dipanggil dengan $request->user() atau auth()->user()
        $request->setUserResolver(function () use ($user) {
            return $user;
        });

        return $next($request);
    }
}
