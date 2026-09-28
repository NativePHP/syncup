<?php

namespace App\NativeComponents;

use Native\Mobile\Edge\NativeComponent;

class Chats extends NativeComponent
{
    public function navTitle(): string
    {
        return 'Chats';
    }

    public function openChat(int $id): void
    {
        $this->navigate('/chats/' . $id);
    }

    public function render(): \Illuminate\View\View
    {
        return view('native.chats');
    }
}
