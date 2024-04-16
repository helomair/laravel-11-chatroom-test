<?php

namespace App\Livewire;

use App\Models\Room;
use App\Models\Message;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;

class MessageItem extends Component {
    public Message  $message;
    public function __construct() {
    }
    public function render() {
        return view('livewire.message-item')->with([
            'type'       => $this->messagesGetType(),
            'username'   => $this->message->user->name,
            'content'    => $this->message->content,
            'created_at' => $this->message->created_at
        ]);
    }

    public function messagesGetType(): string {
        return $this->message->user->id === Auth::user()->id ? 'self' : 'others';
    }

    // #[On('NewMessage')]
    // public function newMessage($newMessage) {
    //     $this->messages->prepend($newMessage);
    // }
}
