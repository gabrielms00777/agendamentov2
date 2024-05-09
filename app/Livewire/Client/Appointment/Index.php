<?php

namespace App\Livewire\Client\Appointment;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.client')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.client.appointment.index');
    }
}
