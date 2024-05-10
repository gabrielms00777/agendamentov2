<?php

namespace App\Livewire\Professional\Services;

use App\Livewire\Forms\ServiceForm;
use Livewire\Component;

class Create extends Component
{
    public ServiceForm $form;

    public function save()
    {
        $this->form->store();

        session()->flash('success', 'Serviço cadastrado com sucesso!');

        $this->dispatch('service::created');
    }

    public function render()
    {
        return view('livewire.professional.services.create');
    }
}
