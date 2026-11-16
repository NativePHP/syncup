<?php

use App\NativeComponents\ChatDetail;
use App\NativeComponents\Chats;
use App\NativeComponents\Friends;
use App\NativeComponents\Layouts\AppTabsLayout;
use App\NativeComponents\Login;
use App\NativeComponents\Profile;
use App\NativeComponents\Register;
use Illuminate\Support\Facades\Route;

Route::native('/', Login::class)->name('login');
Route::native('/register', Register::class)->name('register');

Route::nativeGroup(AppTabsLayout::class, function () {
    Route::native('/chats', Chats::class)->name('chats');
    Route::native('/friends', Friends::class)->name('friends');
    Route::native('/profile', Profile::class)->name('profile');

    Route::native('/chats/{id}', ChatDetail::class)->name('chats.show');
});
