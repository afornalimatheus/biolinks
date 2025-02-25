<x-layout.app>
    <x-container>
        <x-card title="Create a new link">
            <x-form :route="route('links.create')" post id="create-link">
                <x-input type="link" name="link" placeholder="Link"  value="{{ old('link') }}" />
                <x-input type="name" name="name" placeholder="Nome" value="{{ old('name') }}" />
            </x-form>
            <x-slot:actions>
                <x-a href="{{ route('dashboard') }}">Cancel</x-a>
                <x-button form="create-link">Create</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>