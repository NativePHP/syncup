@if (empty($chats))
    <column fill class="items-center justify-center px-8 gap-4 bg-theme-background">
        <column class="w-[84] h-[84] rounded-full bg-theme-primary/15 items-center justify-center">
            <icon name="message" :size="38" class="text-theme-primary" />
        </column>
        <text class="text-lg font-semibold text-theme-on-surface">No chats yet</text>
        <text class="text-sm text-theme-on-surface-variant text-center">Head to the Friends tab to start a conversation or create a group.</text>
    </column>
@else
<list class="bg-theme-background">
    @foreach ($chats as $chat)
        @php $isUnread = $chat['hasUnread']; @endphp

        <pressable native:key="chat-{{ $chat['id'] }}" @navigate('/chats/' . $chat['id'])  press-opacity="0.6" class="w-full"
        a11y-label="{{ $chat['name'] }}{{ $isUnread ? ', unread' : '' }}. {{ $chat['lastMessage'] }}"
        a11y-hint="Opens the conversation">
        <row class="w-full items-center gap-3 px-4 py-3">
            <stack class="w-[46] h-[46]">
                <column class="w-[46] h-[46] rounded-full bg-theme-primary items-center justify-center">
                    <text class="text-theme-on-primary text-lg font-semibold">{{ strtoupper(substr($chat['name'], 0, 1)) }}</text>
                </column>
                @if ($isUnread)
                    <column class="w-full h-full items-end justify-start">
                        <column class="w-[14] h-[14] rounded-full bg-theme-primary border-2 border-theme-background" />
                    </column>
                @endif
            </stack>

            <column class="flex-1 gap-0.5">
                <text class="text-base text-theme-on-surface {{ $isUnread ? 'font-bold' : 'font-medium' }}">{{ $chat['name'] }}</text>
                <text :maxLines="1" class="text-sm {{ $isUnread ? 'font-semibold text-theme-on-surface' : 'text-theme-on-surface-variant' }}">{{ $chat['lastMessage'] }}</text>
            </column>

            <text class="text-xs {{ $isUnread ? 'text-theme-primary font-semibold' : 'text-theme-on-surface-variant' }}">{{ $chat['time'] }}</text>
        </row>
        </pressable>
    @endforeach
</list>
@endif
