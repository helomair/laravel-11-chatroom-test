<div>
    <form class="message-input" wire:submit="store">
        @csrf
        <input
            type="hidden"
            wire:model="room_id"
            value="{{ $room_id }}"
        >
        <input
            type="text"
            wire:model="content"
            id="content"
            placeholder="New message"
        >
        <button type="submit" class="btn btn-submit">
            Send
        </button>
    </form>
    <style>
        .message-input {
            height: 60px;
            width: 100%;
            margin: 20px auto;
            display: flex;
            box-shadow: 2px 4px 8px 0 rgba(0, 0, 0, 0.5);
            border-radius: 50px;
        }

        .message-input input {
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 50px;
            padding-left: 50px
        }
    </style>
</div>
