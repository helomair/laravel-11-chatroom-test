@extends('layouts.app')

@section('content')
    <div>
        <a href="{{ route('rooms.create') }}">
            <button class="btn btn-submit">New Room</button>
        </a>
    </div>
    <div class="room-list">
        <ul>
            @foreach ($rooms as $room)
                <li>{{ $room->title }} => {{ $room->owner->name }}</li>
            @endforeach
        </ul>
    </div>

    <style>
        .room-list {
            border: solid 1px green;
        }
    </style>
@endsection
