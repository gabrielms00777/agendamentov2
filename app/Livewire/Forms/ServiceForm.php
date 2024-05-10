<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ServiceForm extends Form
{
    #[Validate(['required', 'string', 'max:255'])]
    public ?string $name = null;
    #[Validate(['required', 'integer', 'max:255'])]
    public ?string $duration = null;
    #[Validate(['required', 'string', 'max:255'])]
    public ?string $value = null;

    public function store()
    {
        $this->validate();
        Auth::user()->service()->create($this->all());
    }
}
