<x-layout.app>
    <x-container>
        <x-card title="Register">
            <x-form :route="route('register')" post id="register-form">
                <x-input type="name" name="name" placeholder="Nome" value="{{ old('name') }}" />
                <x-input type="email" name="email" placeholder="E-mail"  value="{{ old('email') }}" />
                <x-input type="email_confirmation" name="email_confirmation" placeholder="Confirmação de e-mail" />
                <x-input type="password" name="password" placeholder="Senha" />
            </x-form>
            <x-slot:actions>
                <x-button form="register-form">Registrar</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
