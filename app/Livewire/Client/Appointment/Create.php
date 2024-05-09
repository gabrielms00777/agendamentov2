<?php

namespace App\Livewire\Client\Appointment;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.client')]
class Create extends Component
{
    public function render()
    {
        return view('livewire.client.appointment.create');
    }
}
