<?php

namespace App\View\Components\Navbar;

use Illuminate\View\Component;

class LanguageDropdown extends Component
{
    public function __construct()
    {
    }

    public function render()
    {
        return view('components.navbar.language-dropdown');
    }
}
