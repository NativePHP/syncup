<?php

namespace App\NativeComponents;

use Native\Mobile\Edge\NativeComponent;

class ChatDetail extends NativeComponent
{
    public function navTitle(): string
    {
        return 'Chat';
    }

    public function render(): \Illuminate\View\View
    {
        return view('native.chat-detail');
    }
}
