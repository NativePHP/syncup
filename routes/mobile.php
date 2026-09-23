<?php

use App\NativeComponents\Login;
use App\NativeComponents\Register;
use Illuminate\Support\Facades\Route;

Route::native('/', Login::class);
Route::native('/register', Register::class);
