@extends('layouts.app')

@section('content')
    <x-simple-form-card method='POST' action='rooms.store'>
        <x-slot:title>
            <h1>Create Room</h1>
        </x-slot>

        <x-form-card-row name="title" />
        {{-- <x-form-card-row name="password" /> --}}

    </x-simple-form-card>
@endsection
