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
                    <outlined-text-input placeholder="name@example.com" class="flex-1" />
                </row>
            </column>

            <column class="gap-2">
                <text class="text-sm font-medium text-theme-on-background">Password</text>
                <row class="items-center gap-3">
                    <icon name="lock" :size="20" class="text-theme-on-background" />
                    <outlined-text-input placeholder="••••••••" :secure="true" class="flex-1" />
                    <icon name="visibility" :size="20" class="text-theme-on-background" />
                </row>
            </column>

            <pressable class="w-full bg-theme-primary rounded-2xl py-4 items-center mt-2">
                <text class="text-lg font-semibold text-theme-on-primary">Log In</text>
            </pressable>

        </column>

        {{-- Create account --}}
        <row class="w-full justify-center gap-1">
            <text class="text-sm text-theme-on-background">New here?</text>
            <text class="text-sm font-semibold text-theme-primary">Create an account</text>
        </row>

    </column>
</scroll-view>
