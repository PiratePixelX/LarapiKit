<?php
namespace PiratePixelX\LarapiKit;

use Illuminate\Support\Facades\Route;
use PiratePixelX\LarapiKit\Controllers\ApiKeyAuthController;



Route::get('api-key-auth/generate-api-key', [ApiKeyAuthController::class, 'generateApiKey']);
Route::get('api-key-auth/api-data-will-share-from-here', [ApiKeyAuthController::class, 'apiDataWillShareFromHere'])->middleware('lara.api');

