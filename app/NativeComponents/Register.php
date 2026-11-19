<?php

namespace App\NativeComponents;

use App\Models\AuthToken;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;
use Native\Mobile\Edge\NativeComponent;

class Register extends NativeComponent
{
    public string $name = '';

    public string $email = '';

    public string $password = '';

    public string $passwordConfirmation = '';

    public string $nameError = '';

    public string $emailError = '';

    public string $passwordError = '';

    public function register(): void
    {
        $this->nameError = '';
        $this->emailError = '';
        $this->passwordError = '';

        $response = Http::acceptJson()->post(
            config('services.syncup.base_url').'/register',
            [
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
                'password_confirmation' => $this->passwordConfirmation,
            ],
        );

        if ($response->successful()) {
            AuthToken::store($response->json('token'));
            $this->replace('/chats');

            return;
        }

        if ($response->status() === 422) {
            $this->nameError = $response->json('errors.name.0') ?? '';
            $this->emailError = $response->json('errors.email.0') ?? '';
            $this->passwordError = $response->json('errors.password.0') ?? '';
        }
    }

    public function render(): View
    {
        return view('native.register');
    }
}
