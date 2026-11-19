<?php

namespace App\NativeComponents;

use App\Models\AuthToken;
use Illuminate\Support\Facades\Http;
use Native\Mobile\Edge\NativeComponent;

class Profile extends NativeComponent
{
    public function navTitle(): string
    {
        return 'Profile';
    }

    public function logout(): void
    {
        Http::acceptJson()
            ->withToken(AuthToken::current())
            ->post(config('services.syncup.base_url').'/logout');

        AuthToken::query()->delete();
        $this->replace('/login');
    }

    public function render(): \Illuminate\View\View
    {
        return view('native.profile');
    }
}
