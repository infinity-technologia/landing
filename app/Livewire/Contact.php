<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Contact extends Component
{
    #[Title('Contact - ')]
    #[Layout('components.layouts.app')] 
    public function render()
    {
        return view('livewire.contact');
    }
}
