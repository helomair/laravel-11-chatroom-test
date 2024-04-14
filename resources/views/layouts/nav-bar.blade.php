<nav>
    <div class="nav-box">
        <div class="nav-icon">
            <a href="{{ route('rooms.index') }}">Home</a>
        </div>

        <div class="nav-list">
            <a href="{{ route('rooms.index') }}">Rooms</a>
            @auth
                <a href="#">Profile</a>
                <a href="{{ route('auth.logout') }}">Logout</a>
            @else
                <a href="{{ route('auth.login') }}">Login</a>
                <a href="{{ route('register.create') }}">Register</a>
            @endauth
        </div>
    </div>
</nav>

<style>
    nav {
        /* border: 1px black solid; */
        border-radius: 10px;
        /* border-bottom: #ccc 2px solid; */
        height: 60px;
        width: 100%;
        background: #58c4a8;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1em;
    }

    nav .nav-box {
        width: 100%;
        max-width: 1000px;
        padding: 0 20px;
        display: flex;
        align-items: center;
        justify-content: space-between
    }

    .nav-list {
        display: flex;
    }

    .nav-list a {
        margin-right: 30px;
        /* border: solid 1px red; */
        height: 50px;
        width: 100px;
        color: white;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .nav-list a:hover {
        box-shadow: 4px 4px 8px 0 rgba(0, 0, 0, 0.2);
        background-color: #fff;
        color: black;
    }

    .nav-icon a {
        color: #fff;
        font-size: 2em
    }
</style>
