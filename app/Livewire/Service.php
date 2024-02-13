<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Service extends Component
{
    #[Title('Services - ')]
    public function render()
    {
        return view('livewire.service');
    }
}
