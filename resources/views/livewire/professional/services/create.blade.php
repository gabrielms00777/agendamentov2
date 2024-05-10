<x-collapse>
    <x-slot:heading>
        Cadastrar de Serviço
    </x-slot:heading>
    <x-slot:content>
        <x-form wire:submit="save">
            <x-input label="Nome do serviço" wire:model="form.name" inline />
            <x-input label="Duração do serviço em minutos" wire:model="form.duration" inline />
            <x-input label="Preço" wire:model.debounce="form.value" prefix="R$" money inline locale="pt-BR" />

            <x-button label="Cadastrar!" class="btn-primary" type="submit" spinner="save" />
            <x-slot:actions>
                <x-button label="Cancel" />
            </x-slot:actions>
        </x-form>
    </x-slot:content>
</x-collapse>
