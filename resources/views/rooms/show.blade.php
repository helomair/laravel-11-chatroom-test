@extends('layouts.app')

@section('content')
    <x-room-card>
        <div class='room-message-box'>
            <div class='messages'>
                @livewire(MessageItems::class, ['room' => $room])
            </div>

            <livewire:new-message :room_id='$room->id' />
        </div>
    </x-room-card>

    {{-- <script type="module">
        Echo.channel("room." + {{ $room->id }})
            .listen('NewMessage', (e) => {
                console.log(e.message);
            });
    </script> --}}

    <style>
        .room-message-box {
            /* border: 1px red solid; */
            height: 100%;
            width: 80%;
            margin: 0 auto;
            display: grid;
            grid-template-rows: 20fr 1fr;
        }

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
    </style>
@endsection
