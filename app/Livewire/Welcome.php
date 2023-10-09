<?php

namespace App\Livewire;

use App\Helpers\Helper;
use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        Helper::seo('Help', 'Welcome to Dezamarket Help – Your one-stop resource for all things Dezamarket. Explore tips on listings, buying, and selling');

        return view('livewire.welcome');
    }
}
