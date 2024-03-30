<?php
use App\Services\Route;
use App\Middleware\{Auth, Guest};

Route::get("login", "LoginController", "index", [Guest::class]);
Route::get("register", "RegisterController", "index", [Guest::class]);

Route::post("submit-register", "RegisterController", "register", [Guest::class]);
Route::post("submit-login", "LoginController", "login", [Guest::class]);

Route::get("logout", "DashboardController", "logout", [Auth::class]);
Route::get("dashboard", "DashboardController", "index", [Auth::class]);

Route::get("forget", "ForgetController", "index", [Guest::class]);
Route::post("email-verify", "ForgetController", "verify");
Route::get("new-password", "NewpassController", "index",[Auth::class]);
Route::post("new-password", "NewpassController", "setPassword");

Route::get("", "HomeController", "index");
