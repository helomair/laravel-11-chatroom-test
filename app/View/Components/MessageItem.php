<?php

namespace App\View\Components;

use Closure;
use App\Models\Message;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MessageItem extends Component {
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type = "self",
        public string $userName = "",
        public string $content = "",
        public string $createdAt = "",
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('components.message-item');
    }
}
