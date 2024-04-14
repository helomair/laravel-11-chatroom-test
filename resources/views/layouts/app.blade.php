<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat Room</title>

    {{-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet" /> --}}
</head>

<body>
    <div class="container">
        @include('layouts.nav-bar')
        @yield('content')
    </div>
</body>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Georgia, serif;
    }

    body {
        width: 100%;
        height: 100vh;
        background: #fff;
    }

    a {
        text-decoration: none;
        color: black
    }

    textarea:focus,
    input:focus {
        outline: none;
    }

    .container {
        height: 100%;
        width: 80%;
        margin: 0 auto;
        padding: 1em 0;
    }

    .btn {
        min-width: 150px;
        border: none;
        padding: 10px 20px;
        border-radius: 50px;
        font-size: 1em;
        font-weight: bold;
        cursor: pointer;
    }

    .btn-submit {
        background-color: rgb(186, 246, 186);
    }

    .btn-submit:hover {
        background-color: rgb(96, 227, 96);
    }
</style>

</html>
