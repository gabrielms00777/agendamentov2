<?php

namespace App\Livewire\Professional\Clients;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.professional')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.professional.clients.index');
    }
}
