<?php

namespace App\NativeComponents;

use Native\Mobile\Edge\NativeComponent;

class Chats extends NativeComponent
{
    public array $chats = [];

    public function mount(): void
    {
        $this->chats = [
            ['id' => 1, 'name' => 'Sarah Miller', 'lastMessage' => 'Did you see the new design specs? I think the onboarding flow looks much cleaner now, but we should go over the colours before Friday.', 'time' => '2m', 'hasUnread' => true],
            ['id' => 2, 'name' => 'David Chen', 'lastMessage' => "I'll send the report by EOD.", 'time' => '1h', 'hasUnread' => true],
            ['id' => 3, 'name' => 'Design Team', 'lastMessage' => 'Alex: Looks good to me!', 'time' => 'Tue', 'hasUnread' => false],
            ['id' => 4, 'name' => 'Emma Wilson', 'lastMessage' => 'Thanks for the heads up!', 'time' => 'Mon', 'hasUnread' => false],
        ];
    }

    public function navTitle(): string
    {
        return 'Chats';
    }

    public function render(): \Illuminate\View\View
    {
        return view('native.chats');
    }
}
