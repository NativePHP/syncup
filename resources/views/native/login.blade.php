<scroll-view fill class="safe-area bg-theme-background">
    <column class="h-full justify-center py-10 px-6 gap-10">

        {{-- Logo and app name --}}
        <column class="w-full items-center gap-3">
            <image src="{{ public_path('icon.png') }}" class="w-20 h-20 rounded-2xl object-cover" />
            <text class="text-3xl font-bold text-theme-primary">SyncUp</text>
            <text class="text-base text-theme-on-background">Stay in sync with the people who matter.</text>
        </column>

        {{-- Form --}}
        <column class="gap-5">

            <column class="gap-2">
                <text class="text-sm font-medium text-theme-on-background">Email</text>
                <row class="items-center gap-3">
                    <icon name="mail" :size="20" class="text-theme-on-background" />
                    <outlined-text-input
                        native:model="email"
                        placeholder="name@example.com"
                        keyboard="email"
                        :is-error="$formError !== ''"
                        class="flex-1"
                    />
                </row>
            </column>

            <column class="gap-2">
                <text class="text-sm font-medium text-theme-on-background">Password</text>
                <row class="items-center gap-3">
                    <icon name="lock" :size="20" class="text-theme-on-background" />
                    <outlined-text-input
                        native:model="password"
                        placeholder="••••••••" :secure="!
                        $showPassword"
                        :is-error="$formError !== ''"
                        class="flex-1"
                    />
                    <pressable @press="toggleVisibility">
                        <icon name="{{ $showPassword ? 'visibility_off' : 'visibility' }}" :size="20" class="text-theme-on-background" />
                    </pressable>
                </row>
                @if ($formError !== '')
                    <text class="text-sm text-theme-destructive">{{ $formError }}</text>
                @endif
            </column>

            @if ($loading)
                <row class="mt-2 w-full bg-theme-primary/50 rounded-2xl px-4 h-14 items-center justify-center gap-2">
                    <activity-indicator class="text-theme-on-primary" size="sm" />
                    <text class="text-lg font-semibold text-theme-on-primary">Logging in...</text>
                </row>
            @else
                <pressable @press="login" class="mt-2 w-full bg-theme-primary rounded-2xl h-14 justify-center items-center">
                    <text class="text-lg font-semibold text-theme-on-primary">Log In</text>
                </pressable>
            @endif

        </column>

        {{-- Create account --}}
        <row class="w-full justify-center gap-1">
            <text class="text-sm text-theme-on-background">New here?</text>
            <pressable @navigate="route('register')">
                <text class="text-sm font-semibold text-theme-primary">Create an account</text>
            </pressable>
        </row>

    </column>
</scroll-view>
