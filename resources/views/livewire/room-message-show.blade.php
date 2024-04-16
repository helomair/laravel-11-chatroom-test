<div>
    @foreach ($messages as $index => $message)
        <div class="message-{{ $message['type'] }}" wire:key="{{ $index }}">
            @if ($message['type'] !== 'self')
                <div class="message-user">{{ $message['user']['name'] }}</div>
            @endif

            <div class="message-body">
                <div class="message-content">
                    {{ $message['content'] }}
                </div>
                <div class="message-date">
                    <span>{{ $message['created_at'] }}</span>
                </div>
            </div>
        </div>
    @endforeach

    @script
        <script type="module">
            Echo.channel("room." + {{ $roomId }})
                .listen('NewMessage', (e) => {
                    $wire.addMessage(e.messageData)
                });
        </script>
    @endscript

    <style>
        .messages {
            display: flex;
            flex-direction: column-reverse;
            padding: 20px;
            overflow-y: scroll;
            background-color: #fff;
            border-radius: 20px;
            border: 2px solid #ccc;
            /* box-shadow: 2px 4px 8px 0 rgba(0, 0, 0, 0.5); */
        }

        ::-webkit-scrollbar {
            width: 0;
            background: transparent;
        }

        .message-others {
            margin: 10px 0;
        }

        .message-user {
            padding-left: 5px;
            font-size: 14px;
            font-weight: bold;
            color: #595959;
        }

        .message-body {
            display: flex;
        }

        .message-body .message-content {
            background-color: rgb(186, 220, 122);
            width: 400px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 20px;
            word-break: break-all;
            white-space: normal;
        }

        .message-body .message-date {
            margin: 0 5px;
            color: #595959;
            font-weight: bold;
            font-size: 12px;
            display: table;
        }

        .message-body .message-date span {
            display: table-cell;
            vertical-align: bottom;
        }

        .message-self {
            margin: 10px 0 10px auto;
        }

        .message-self .message-body {
            display: flex;
            flex-direction: row-reverse;
        }

        .message-self .message-content {
            background-color: rgb(146, 210, 244);
        }
    </style>
</div>
