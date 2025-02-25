<x-layout.app>
    <x-container>
        <x-card title="Profile :: {{ auth()->id() }}">
            <x-form :route="route('profile')" put id="profile-form" enctype="multipart/form-data">
                <div class="flex gap-2 items-center">
                    <div class="avatar">
                        <div class="w-24 rounded-xl">
                            <img src="/storage/{{ $user->photo }}" alt="Profile picture">
                        </div>
                    </div>
                    <x-file-input name="photo" />
                </div>
                <x-input type="text" name="name" placeholder="Nome" value="{{ old('name', $user->name) }}" />
                <x-textarea type="text" name="description" value="{{ old('description', $user->description) }}" />
                <x-input type="text" name="handler" prefix="biolinks.com.br/" placeholder="@seulink" value="{{ old('handler', $user->handler) }}" />
            </x-form>
            <x-slot:actions>
                <x-a href="{{ route('dashboard') }}">Cancel</x-a>
                <x-button form="profile-form">Update profile</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>