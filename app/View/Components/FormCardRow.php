<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormCardRow extends Component {
    public string $label = "";
    public string $type = "text";
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        foreach (explode('_', $this->name) as $value) {
            $value = ucfirst($value);
            $this->label .= $value . " ";
        }
        trim($this->label);

        if ($this->name === 'email' || $this->name === 'password')
            $this->type = $this->name;
        else if ($this->name === 'password_confirmation')
            $this->type = 'password';

        return view('components.form-card-row');
    }
}
