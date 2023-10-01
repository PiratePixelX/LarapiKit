<?php

namespace PiratePixelX\LarapiKit\Controllers;

use App\Models\User;
use Illuminate\Support\Str;

class ApiKeyAuthController
{
    public function generateApiKey()
    {
        $api_key = Str::random(64);
        dd($api_key);

        return response()->json(['api_key' => $api_key]);
    }

    public function apiDataWillShareFromHere()
    {
        $users = User::all();

        $data = [
            'users' => $users
        ];

        return response()->json($data);
    }

}
