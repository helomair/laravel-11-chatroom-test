<div class="card">
    <div class="card-center-box">
        {{ $title }}
        <form method="{{ $method }}" action="{{ route($action) }}">
            @csrf
            {{ $slot }}

            @if ($errors->any())
                <div>
                    @foreach ($errors->all() as $error)
                        <div class=error>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <div class="card-submit">
                <button class="btn btn-submit" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

<style>
    .card {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .card-center-box {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 10px;
        background-color: rgb(209, 229, 235);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 500px;
        width: 500px;
    }

    .card-center-box h1 {
        margin-bottom: 50px
    }

    .card-submit {
        text-align: center;
        margin-top: 40px;
    }

    .error {
        color: red;
    }
</style>
