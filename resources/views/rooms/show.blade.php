@extends('layouts.app')

@section('content')
    <x-room-card>
        <div class="room-message-box">
            <div class="messages">
                @foreach ($room->messagesLatest as $message)
                    <div class="message-item">
                        <div class="message-user">{{ $message->user->name }}</div>
                        <div class="message-body">
                            <div class="message-content">
                                {{ $message->content }}
                            </div>
                            <div class="message-date">
                                <span>{{ $message->created_at }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <form class="message-input" method="POST" action="{{ route('message.store') }}">
                @csrf
                <input type="hidden" name="room_id" value="{{ $room->id }}">
                <input type="text" name="content" id="content" placeholder="New message">
                <button type="submit" class="btn btn-submit">Send</button>
                </input>
            </form>
        </div>
    </x-room-card>

    <style>
        .room-message-box {
            /* border: 1px red solid; */
            height: 95%;
            width: 80%;
            margin: 0 auto;
            display: grid;
            grid-template-rows: 20fr 1fr;
        }

        .messages {
            display: flex;
            flex-direction: column-reverse;
            padding: 20px;

        }

        .message-item {
            margin: 5px 0;
        }

        .message-user {
            padding-left: 5px;
            font-size: 18px;
            font-family: serif;
            font-weight: bold;
            color: #595959;
        }

        .message-body {
            display: flex;
        }

        .message-body .message-content {
            background-color: rgb(186, 220, 122);
            width: 300px;
            border-radius: 10px;
            font-size: 18px;
            font-family: sans-serif;
            font-weight: bold;
            padding: 10px 20px;
            word-break: break-all;
            white-space: normal;
        }

        .message-body .message-date {
            margin-left: 5px;
            color: #595959;
            font-family: serif;
            font-weight: bold;
            font-size: 14px;
            display: table;
        }

        .message-body .message-date span {
            display: table-cell;
            vertical-align: bottom;
        }




        .message-input {
            height: 60px;
            width: 100%;
            margin: 0 auto;
            display: flex;
            /* border: 1px solid green; */
            box-shadow: 2px 4px 8px 0 rgba(0, 0, 0, 0.5);
            border-radius: 50px;
        }

        .message-input input {
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 50px;
            padding-left: 50px
        }
    </style>
@endsection
