<?php

namespace App\NativeComponents;

use App\Models\AuthToken;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;
use Native\Mobile\AsyncTask;
use Native\Mobile\Edge\NativeComponent;

class Login extends NativeComponent
{
    public string $email = '';

    public string $password = '';

    public bool $showPassword = false;

    public string $formError = '';

    public bool $loading = false;

    public function toggleVisibility(): void
    {
        $this->showPassword = ! $this->showPassword;
    }

    public function login(): void
    {
        if ($this->loading) {
            return;
        }

        $this->loading = true;
        $this->formError = '';

        $email = $this->email;
        $password = $this->password;

        AsyncTask::dispatch(static function () use ($email, $password) {
            $response = Http::acceptJson()->post(
                config('services.syncup.base_url') . '/login',
                ['email' => $email, 'password' => $password],
            );

            return ['status' => $response->status(), 'body' => $response->json()];
        })->finished(function (array $result) {
            $this->loading = false;

            if ($result['status'] === 200) {
                AuthToken::store($result['body']['token']);
                $this->replace('/chats');

                return;
            }

            $this->formError = $result['body']['errors']['email'][0] ?? 'Login failed.';
        })->failed(function () {
            $this->loading = false;
            $this->formError = 'Could not reach the server. Try again in a while';
        });
    }

    public function render(): View
    {
        return view('native.login');
    }
}
