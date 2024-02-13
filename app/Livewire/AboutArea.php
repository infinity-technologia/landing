<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutArea extends Component
{
    #[Title('About - ')]
    #[Layout('components.layouts.app')] 
    public function render()
    {
        return view('livewire.about-area');
    }
}
