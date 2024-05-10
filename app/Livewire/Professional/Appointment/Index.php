<?php

namespace App\Livewire\Professional\Appointment;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.professional')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.professional.appointment.index');
    }
}
