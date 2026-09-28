<?php

namespace App\NativeComponents;

use Native\Mobile\Edge\NativeComponent;

class Friends extends NativeComponent
{
    public function navTitle(): string
    {
        return 'Friends';
    }

    public function render(): \Illuminate\View\View
    {
        return view('native.friends');
    }
}
