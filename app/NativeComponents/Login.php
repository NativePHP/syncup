<?php

namespace App\NativeComponents;

use Illuminate\View\View;
use Native\Mobile\Edge\NativeComponent;
use Native\Mobile\Facades\Dialog;

class Login extends NativeComponent
{
    public string $email = '';

    public string $password = '';

    public bool $showPassword = false;

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
        Dialog::toast('Logging in as '.$this->email);
    }

    public function render(): View
    {
        return view('native.login');
    }
}
