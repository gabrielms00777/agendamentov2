<?php

namespace App\Livewire\Professional;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.professional')]
class Configs extends Component
{
    public function render()
    {
        return view('livewire.professional.configs');
    }
}
