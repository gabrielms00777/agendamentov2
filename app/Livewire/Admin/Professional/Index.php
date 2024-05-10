<?php

namespace App\Livewire\Admin\Professional;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Mary\Traits\Toast;

class Index extends Component
{
    use Toast;

    public string $search = '';

    public bool $drawer = false;

    public array $sortBy = ['column' => 'name', 'direction' => 'asc'];

    // Clear filters
    public function clear(): void
    {
        $this->reset();
        $this->success('Filters cleared.', position: 'toast-bottom');
    }

    // Delete action
    public function delete($id): void
    {
        $this->warning("Will delete #$id", 'It is fake.', position: 'toast-bottom');
    }

    #[Computed()]
    public function headers(): array
    {
        return [
            // ['key' => 'id', 'label' => '#', 'class' => 'w-1'],
            ['key' => 'name', 'label' => 'Name', 'class' => 'w-64'],
            ['key' => 'email', 'label' => 'E-mail', 'sortable' => false],
        ];
    }

    #[Computed()]
    public function users()
    {
        return User::query()
            ->where('type', 'professional')
            // ->sortBy([[...array_values($this->sortBy)]])
            ->when($this->search, function (Builder $query) {
                return $query->where('name', 'like', "%{$this->search}%")->orWhere('email', 'like', "%{$this->search}%");
            })
            ->get();
    }

    public function render()
    {
        // dd($this->users());
        return view('livewire.admin.professional.index');
    }
}
