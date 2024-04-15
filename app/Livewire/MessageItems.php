<?php

namespace App\Livewire;

use App\Models\Room;
use App\Models\Message;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;

class MessageItems extends Component {
    public Collection  $messages;
    public Room $room;
    public function __construct() {
    }
    public function render() {
        $this->messages = $this->room->messages;
        $this->messagesSetType();

        return view('livewire.message-items');
    }

    public function messagesSetType(): void {
        foreach ($this->messages as &$message) {
            $message['type'] = $message->user->id === Auth::user()->id ? 'self' : 'others';
        }
    }

    #[On('NewMessage')]
    public function newMessage($newMessage) {
        $this->messages->prepend($newMessage);
    }
}
