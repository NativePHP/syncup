<?php

/**
 * Native UI — Theme Tokens
 *
 * Published via `php artisan vendor:publish --tag=native-ui-config`.
 * Edit to customize your app's visual identity in one place.
 *
 * "on-X" = color of content placed ON a surface of color X.
 * Color tokens accept hex ('#B91C1C', '#8B5CF680'), Tailwind names
 * ('red-300'), and opacity modifiers ('red-300/20', '#8B5CF6/50').
 */

return [

    'theme' => [

        'light' => [
            // Brand purple — filled buttons, active states, avatars, key accents.
            'primary' => '#6A60C0',
            'on-primary' => '#FFFFFF',

            // Soft tonal purple — secondary/tonal buttons and chips.
            'secondary' => '#ECEAFB',
            'on-secondary' => '#4C4494',

            // Surface = cards/sheets/dialogs. Background = page root (soft lavender).
            'surface' => '#FFFFFF',
            'on-surface' => '#0F172A',
            'background' => '#F9F8FD',
            'on-background' => '#0F172A',

            // Filled text fields / muted tonal surfaces.
            'surface-variant' => '#EFEDF7',
            'on-surface-variant' => '#524E66',

            // Neutral borders (fields, dividers, cards) — faint lavender-grey.
            'outline' => '#D9D6EC',

            // Destructive actions.
            'destructive' => '#B91C1C',
            'on-destructive' => '#FFFFFF',

            // Tertiary accent — teal, to echo the app icon.
            'accent' => '#14B8A6',
            'on-accent' => '#0F172A',
        ],

        'dark' => [
            // Same purple — white text on it passes AA on the dark background too.
            'primary' => '#6A60C0',
            'on-primary' => '#FFFFFF',

            'secondary' => '#2E2A45',
            'on-secondary' => '#C9C3F0',

            'surface' => '#211E2E',
            'on-surface' => '#F1EFFA',
            'background' => '#15121F',
            'on-background' => '#F1EFFA',

            'surface-variant' => '#2A2740',
            'on-surface-variant' => '#A8A2C4',

            'outline' => '#3B3757',

            'destructive' => '#F87171',
            'on-destructive' => '#1E1B2E',

            'accent' => '#2DD4BF',
            'on-accent' => '#0F172A',
        ],

        // Corner radii (points / dp).
        'radius-sm' => 4,
        'radius-md' => 8,
        'radius-lg' => 16,
        'radius-full' => 9999,

        // Font size scale (points / sp).
        'font-sm' => 14,
        'font-md' => 16,
        'font-lg' => 20,
        'font-xl' => 24,

        // 'System' = platform default (SF on iOS, Roboto on Android).
        'font-family' => 'System',
    ],

    'fonts' => [],

];
