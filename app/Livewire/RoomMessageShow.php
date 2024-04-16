<?php

namespace App\Livewire;

use App\Models\Room;
use App\Models\Message;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class RoomMessageShow extends Component {
    public array $messages;
    public string $roomId;

    public function __construct() {
    }

    public function mount(Room $room) {
        $this->roomId = $room->id;
        $this->messages = $room->messages->toArray();

        foreach ($this->messages as &$message) {
            $message['type'] = $this->getMessageType($message);
        }
    }


    public function render() {
        return view('livewire.room-message-show');
    }
    public function addMessage(array $newMessageData) {
        $newMessageData['type'] = $this->getMessageType($newMessageData);;
        array_push($this->messages, $newMessageData);
    }

    private function getMessageType(array $message): string {
        return $message['user']['id'] === Auth::user()->id ? 'self' : 'others';
    }
}
