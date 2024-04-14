<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MessageStoreRequest;

class MessageController extends Controller {
    public function store(MessageStoreRequest $request) {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        Message::create($data);

        return redirect()->route('rooms.show', $data['room_id']);
    }
}
