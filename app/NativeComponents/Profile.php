<?php

namespace App\NativeComponents;

use Native\Mobile\Edge\NativeComponent;

class Profile extends NativeComponent
{
    public function navTitle(): string
    {
        return 'Profile';
    }

    public function render(): \Illuminate\View\View
    {
        return view('native.profile');
    }
}
