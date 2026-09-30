<scroll-view fill class="safe-area bg-theme-background">
    <column fill class="justify-center py-10 px-6 gap-10">

        {{-- Heading --}}
        <column class="w-full items-center gap-3">
            <image src="{{ public_path('icon.png') }}" class="w-20 h-20 rounded-2xl object-cover" />
            <text class="text-3xl font-bold text-theme-primary">Create your account</text>
            <text class="text-base text-theme-on-background">Join SyncUp in a few seconds.</text>
        </column>

        {{-- Form --}}
        <column class="gap-5">

            <column class="gap-2">
                <text class="text-sm font-medium text-theme-on-background">Name</text>
                <row class="items-center gap-3">
                    <icon name="person" :size="20" class="text-theme-on-background" />
                    <outlined-text-input
                        placeholder="Jane Doe"
                        native:model="name"
                        :is-error="$nameError !== ''"
                        supporting="{{ $nameError }}"
                        class="flex-1" />
                </row>
            </column>

            <column class="gap-2">
                <text class="text-sm font-medium text-theme-on-background">Email</text>
                <row class="items-center gap-3">
                    <icon name="mail" :size="20" class="text-theme-on-background" />
                    <outlined-text-input
                        placeholder="name@example.com"
                        native:model="email"
                        keyboard="email"
                        :is-error="$emailError !== ''"
                        supporting="{{ $emailError }}"
                        class="flex-1" />
                </row>
            </column>

            <column class="gap-2">
                <text class="text-sm font-medium text-theme-on-background">Password</text>
                <row class="items-center gap-3">
                    <icon name="lock" :size="20" class="text-theme-on-background" />
                    <outlined-text-input
                        placeholder="••••••••"
                        native:model="password"
                        :secure="true"
                        :is-error="$passwordError !== ''"
                        supporting="{{ $passwordError }}"
                        class="flex-1" />
                </row>
            </column>

            <column class="gap-2">
                <text class="text-sm font-medium text-theme-on-background">Confirm password</text>
                <row class="items-center gap-3">
                    <icon name="lock" :size="20" class="text-theme-on-background" />
                    <outlined-text-input placeholder="••••••••" native:model="passwordConfirmation" :secure="true" class="flex-1" />
                </row>
            </column>

            <pressable @press="register" class="w-full bg-theme-primary rounded-2xl py-4 items-center mt-2">
                <text class="text-lg font-semibold text-theme-on-primary">Create account</text>
            </pressable>

        </column>

        {{-- Back to login --}}
        <row class="w-full justify-center gap-1">
            <text class="text-sm text-theme-on-background">Already have an account?</text>
            <pressable @navigate.back>
                <text class="text-sm font-semibold text-theme-primary">Log in</text>
            </pressable>
        </row>

    </column>
</scroll-view>
