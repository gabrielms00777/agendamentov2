<?php

namespace App\Livewire\Professional\Services;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;

#[Layout('components.layouts.professional')]
class Index extends Component
{

    public array $headers = [
        // ['key' => 'id', 'label' => '#', 'class' => 'w-1'],
        ['key' => 'name', 'label' => 'Name'],
        ['key' => 'duration', 'label' => 'Duração'],
        ['key' => 'price', 'label' => 'Preço'],
    ];

    #[On('service::created')]
    #[Computed()]
    public function services()
    {
        return Service::query()->where('user_id', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.professional.services.index');
    }
}
