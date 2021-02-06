<?php

namespace App\View\Components\Navbar;

use Illuminate\View\Component;

class ProfileDropdown extends Component
{
    public function __construct()
    {
    }

    public function render()
    {
        return view('components.navbar.profile-dropdown');
    }
}
