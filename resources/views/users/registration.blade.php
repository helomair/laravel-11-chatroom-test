@extends('layouts.app')

@section('content')
    <x-simple-form-card method='POST' action='register.store'>
        <x-slot:title>
            <h1>Register</h1>
        </x-slot>

        <x-form-card-row name="name" />
        <x-form-card-row name="email" />
        <x-form-card-row name="password" />
        <x-form-card-row name="password_confirmation" />


    </x-simple-form-card>
@endsection
