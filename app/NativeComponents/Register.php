<?php

namespace App\NativeComponents;

use Illuminate\View\View;
use Native\Mobile\Edge\NativeComponent;

class Register extends NativeComponent
{
    public string $name = '';

    public string $email = '';

    public string $password = '';

    public string $passwordConfirmation = '';

    public string $nameError = '';

    public string $emailError = '';

    public string $passwordError = '';

    public function register(): void
    {
        $this->replace('/chats');
    }

    public function backToLogin(): void
    {
        $this->back();
    }

    public function render(): View
    {
        return view('native.register');
    }
}
