<div>
    <div class="container mx-auto p-4 h-screen">
        <livewire:professional.services.create>
            <div class="mt-4">
                <h2>Serviços Cadastrados</h2>
                <x-card>
                    <x-table :headers="$headers" :rows="$this->services">
                        @scope('actions', $user)
                            <x-button icon="o-trash" label="Editar" wire:click="delete()" wire:confirm="Are you sure?" spinner
                                class=" btn-sm text-primary" />
                            <x-button icon="o-trash" wire:click="delete()" wire:confirm="Are you sure?" spinner
                                class="btn-ghost btn-sm text-red-500" />
                        @endscope
                    </x-table>
                </x-card>
            </div>
    </div>
</div>
