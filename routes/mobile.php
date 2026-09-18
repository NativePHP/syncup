<?php

use App\NativeComponents\Login;
use Illuminate\Support\Facades\Route;

Route::native('/', Login::class);
