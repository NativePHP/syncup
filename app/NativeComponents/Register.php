<?php

namespace App\NativeComponents;

use Illuminate\View\View;
use Native\Mobile\Edge\NativeComponent;
use Native\Mobile\Facades\Dialog;

class Register extends NativeComponent
{
    public string $name = '';

    public string $email = '';

    public string $password = '';

    public string $passwordConfirmation = '';

    public function register(): void
    {
        Dialog::toast('Creating account for '.$this->email);
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
