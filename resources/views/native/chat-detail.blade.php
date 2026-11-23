<column class="w-full h-full bg-theme-background">
    <scroll-view class="w-full flex-1" scroll-anchor="bottom">
        <column class="w-full h-full justify-end px-4 py-4 gap-4">
            @php $lastDate = null; @endphp
            @foreach ($messages as $m)

                @if ($m['date'] !== $lastDate)
                    <row class="w-full justify-center my-1">
                        <column class="px-3 py-1 rounded-full bg-theme-surface-variant">
                            <text class="text-[11] font-semibold text-theme-on-surface-variant">{{ strtoupper($m['date']) }}</text>
                        </column>
                    </row>
                    @php $lastDate = $m['date']; @endphp
                @endif
                @php $mine = $m['user_id'] === $currentUserId; @endphp

                @if ($mine)
                    <column class="w-full items-end gap-1">
                        <column class="max-w-[280] bg-theme-primary rounded-3xl rounded-br-none px-4 py-3">
                            <text class="text-base text-theme-on-primary whitespace-pre-line leading-relaxed">{{ $m['text'] }}</text>
                        </column>
                        <text class="text-[11] text-theme-on-surface-variant px-1">{{ $m['time'] }}</text>
                    </column>
                @else
                    <column class="w-full items-start gap-1">
                        <column class="max-w-[280] bg-theme-surface-variant rounded-3xl rounded-bl-none px-4 py-3">
                            <text class="text-base text-theme-on-surface whitespace-pre-line leading-relaxed">{{ $m['text'] }}</text>
                        </column>
                        <text class="text-[11] text-theme-on-surface-variant px-1">{{ $m['time'] }}</text>
                    </column>
                @endif
            @endforeach
        </column>
    </scroll-view>

    <row class="w-full px-3 pt-3 pb-8 gap-2 items-center bg-theme-surface">
        <bare-text-input
            native:model="draft"
            placeholder="Type your message..."
            multiline
            :min-lines="1"
            :max-lines="5"
            class="flex-1 bg-theme-surface-variant rounded-3xl px-4 py-3 text-theme-on-surface" />
        <pressable a11y-label="Send message" class="bg-theme-primary rounded-2xl w-[48] h-[48] items-center justify-center">
            <icon name="paperplane.fill" :size="20" class="text-theme-on-primary" />
        </pressable>
    </row>
</column>
