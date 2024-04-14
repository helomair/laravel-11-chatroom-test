@extends('layouts.app')

@section('content')
    <x-room-card>
        <div class="room-buttons">
            <a href="{{ route('rooms.create') }}">
                <button type="button" class="btn btn-submit">New Room</button>
            </a>
        </div>

        <div class="room-list">
            <div class="room-list-head">
                <div>Title</div>
                <div>Owner</div>
            </div>
            <div class="room-list-data">
                @foreach ($rooms as $room)
                    <a href="{{ route('rooms.show', $room) }}">
                        <div class="room-list-data-content">
                            <div>{{ $room->title }}</div>
                            <div>{{ $room->owner->name }}</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </x-room-card>

    <style>
        .room-buttons button {
            margin-right: 30px;
        }

        .room-list {
            margin-top: 20px;
            /* border: red 1px solid; */
            height: 100%;
            width: 100%;
            font-family: sans-serif;
            font-weight: bold;
        }

        .room-list-head {
            padding: 10px 50px;
            display: flex
        }

        .room-list-head div {
            width: 10em;
            color: #686868;
        }

        .room-list-data {
            border: #ccc 1px solid;
            border-radius: 10px;
        }

        .room-list-data-content {
            width: 100%;
            height: 60px;
            border-bottom: #ccc 1px solid;
            border-radius: 10px;
            padding: 20px 50px;
            transition: box-shadow 0.2s ease-in-out;
            color: black;
            display: flex;
        }

        .room-list-data-content:hover {
            box-shadow: 2px 2px 4px 2px rgba(0, 0, 0, 0.2);
        }

        .room-list-data-content div {
            width: 10em;
        }
    </style>
@endsection
