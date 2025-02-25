<x-layout.app>
    <x-container>
        <x-card title="Editing link :: id {{ $link->id }}">
            <x-form :route="route('links.edit', $link)" put id="edit-link-form">
                <x-input type="link" name="link" placeholder="Link" value="{{ old('link', $link->link) }}" />
                <x-input type="text" name="name" placeholder="Nome" value="{{ old('name', $link->name) }}" />
            </x-form>
            <x-slot:actions>
                <x-a href="{{ route('dashboard') }}">Cancel</x-a>
                <x-button form="edit-link-form">Update link</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>