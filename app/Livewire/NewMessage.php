<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;

class NewMessage extends Component {
    #[Validate('required|string')]
    public string $room_id = '';

    #[Validate('required|string')]
    public string $content = '';

    public function mount(string $room_id = "") {
        $this->room_id = $room_id;
    }

    public function render() {
        return view('livewire.new-message');
    }

    public function store() {

        $this->validate();

        $data = $this->only(['room_id', 'content']);
        $data['user_id'] = Auth::user()->id;
        $newMessage = Message::create($data);
        $newMessage->load('user');

        session()->flash('status', 'Message successfully stored!');

        event(new \App\Events\NewMessage($this->room_id, $newMessage->toArray()));

        $this->reset();
    }
}
