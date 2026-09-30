<?php

namespace App\NativeComponents;

use Illuminate\View\View;
use Native\Mobile\Edge\NativeComponent;

class Login extends NativeComponent
{
    public string $email = '';

    public string $password = '';

    public bool $showPassword = false;

    public string $formError = '';

    public bool $loading = false;

    public function toggleVisibility(): void
    {
        $this->showPassword = ! $this->showPassword;
    }

    public function createAccount(): void
    {
        $this->navigate('/register');
    }

    public function login(): void
    {
        $this->replace('/chats');
    }

    public function render(): View
    {
        return view('native.login');
    }
}
