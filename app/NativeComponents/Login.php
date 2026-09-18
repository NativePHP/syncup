<?php

namespace App\NativeComponents;

use Illuminate\View\View;
use Native\Mobile\Edge\NativeComponent;
use Native\Mobile\Facades\Browser;

class Login extends NativeComponent
{
    public function render(): View
    {
        return view('native.login');
    }
}
