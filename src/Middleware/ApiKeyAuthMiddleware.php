<?php

namespace PiratePixelX\LarapiKit\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class ApiKeyAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     *
     * @return mixed
     */

     public function handle(Request $request, Closure $next)
    {
        // Retrieve the API key from the configuration
        $validApiKey = Config::get('larapi.api_key');
        // dd($validApiKey);


        // Get the API key from the request header
        $apiKey = $request->header('Authorization');

        // Trim leading and trailing spaces from the API key
        $apiKey = trim($apiKey);

        // Check if the API key is provided and valid
        if (empty($apiKey) || $apiKey !== $validApiKey) {
            return response()->json(['message' => 'Invalid API key'], 401);
        }

        return $next($request);
    }

}
