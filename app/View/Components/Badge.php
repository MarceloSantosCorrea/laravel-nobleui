<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    public string $type;
    public bool $pill;
    public string $link;

    public function __construct(string $type, bool $pill = false, string $link = '')
    {
        $this->type = $type;
        $this->pill = $pill;
        $this->link = $link;
    }

    public function render()
    {
        return view('components.badge');
    }
}
