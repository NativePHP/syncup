<?php

namespace App\NativeComponents;

use App\Models\AuthToken;
use Illuminate\View\View;
use Native\Mobile\Edge\NativeComponent;

class AuthGate extends NativeComponent
{
    public function mount(): void
    {
        if (AuthToken::current()) {
            $this->replace('/chats');
        } else {
            $this->replace('/login');
        }
    }

    public function render(): View
    {
        return view('native.auth-gate');
    }
}
