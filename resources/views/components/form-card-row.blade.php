<div class="card-row">
    <label for="{{ $name }}"> {{ $label }} </label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}">
</div>

<style>
    .card-row {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
        vertical-align: middle
    }

    .card-row label {
        margin-right: 20px;
        display: grid;
        place-items: center;
    }

    .card-row input {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border: none;
        border-radius: 10px;
        height: 2.5em;
        width: 15em;
        padding-left: 10px
    }
</style>
