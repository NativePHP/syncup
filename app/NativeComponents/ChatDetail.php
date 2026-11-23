<?php

namespace App\NativeComponents;

use Native\Mobile\Edge\NativeComponent;

class ChatDetail extends NativeComponent
{
    public string $name = '';

    public array $messages = [];

    public string $draft = '';

    public int $currentUserId = 1;

    public function mount(): void
    {
        $this->name = 'Sarah Miller';

        $this->messages = [
            ['id' => 1, 'user_id' => 2, 'text' => 'Quick one before I forget: are we still on for the design review on Friday?', 'time' => '4:02 PM', 'date' => 'Yesterday'],
            ['id' => 2, 'user_id' => 1, 'text' => 'Yes!', 'time' => '4:15 PM', 'date' => 'Yesterday'],
            ['id' => 3, 'user_id' => 1, 'text' => "I'll have my notes on the new screens ready before then.", 'time' => '4:15 PM', 'date' => 'Yesterday'],
            ['id' => 4, 'user_id' => 2, 'text' => 'Perfect.', 'time' => '4:20 PM', 'date' => 'Yesterday'],
            ['id' => 5, 'user_id' => 2, 'text' => "Hey! I just finished the new design specs for onboarding. I think you're going to love how the welcome flow turned out, especially the first screen.", 'time' => '10:24 AM', 'date' => 'Today'],
            ['id' => 6, 'user_id' => 1, 'text' => 'Send them over!', 'time' => '10:26 AM', 'date' => 'Today'],
            ['id' => 7, 'user_id' => 2, 'text' => "Done. Three things I'd love your eyes on:\nthe welcome screen\nthe sign-up form\nthe permissions step", 'time' => '10:28 AM', 'date' => 'Today'],
            ['id' => 8, 'user_id' => 1, 'text' => 'Ok', 'time' => '10:30 AM', 'date' => 'Today'],
            ['id' => 9, 'user_id' => 1, 'text' => "I'll take a proper look this afternoon.", 'time' => '10:31 AM', 'date' => 'Today'],
            ['id' => 10, 'user_id' => 2, 'text' => 'Did you see the new design specs? I think the onboarding flow looks much cleaner now, but we should go over the colours before Friday.', 'time' => '10:45 AM', 'date' => 'Today'],
        ];
    }

    public function navTitle(): string
    {
        return $this->name;
    }

    public function render(): \Illuminate\View\View
    {
        return view('native.chat-detail');
    }
}
