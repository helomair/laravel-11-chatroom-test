<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat Room</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <livewire:styles />
    <livewire:scripts />
</head>

<body>
    <div class="container">
        @include('layouts.nav-bar')
        @yield('content')
    </div>
</body>


</html>
