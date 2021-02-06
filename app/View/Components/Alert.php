<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public string $type;
    public string $message;
    public string $icon;
    public bool $dismiss;
    public string $fill;

    public function __construct(
        string $type,
        string $message = '',
        string $icon = '',
        bool $dismiss = false,
        bool $fill = false
    )
    {
        $this->type = $type;
        $this->message = $message;
        $this->icon = $icon;
        $this->dismiss = $dismiss;
        $this->fill = $fill;
    }

    public function render()
    {
        return view('components.alert');
    }
}
