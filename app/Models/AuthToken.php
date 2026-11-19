<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuthToken extends Model
{
    protected $fillable = ['token'];

    protected function casts(): array
    {
        return ['token' => 'encrypted'];
    }

    public static function store(string $token): void
    {
        static::query()->delete();
        static::create(['token' => $token]);
    }

    public static function current(): ?string
    {
        return static::query()->first()?->token;
    }
}
