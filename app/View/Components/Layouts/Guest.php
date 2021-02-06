<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class Guest extends Component
{
    public function __construct()
    {
    }

    public function render()
    {
        return view('layouts.guest');
    }
}
