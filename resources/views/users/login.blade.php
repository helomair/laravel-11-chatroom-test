@extends('layouts.app')

@section('content')
    <x-simple-form-card method='POST' action='auth.login'>
        <x-slot:title>
            <h1>Login</h1>
        </x-slot>

        <x-form-card-row name="email" />
        <x-form-card-row name="password" />

    </x-simple-form-card>
@endsection
