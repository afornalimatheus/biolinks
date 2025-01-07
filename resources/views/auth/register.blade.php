<div>
    {{ auth()->id() }}
    <h1>Register</h1>

    @if ($message = session()->get('message'))
        <div>
            <div>{{ $message }}</div>
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <input type="name" name="name" placeholder="Nome" value="{{ old('name') }}" />
            @error('name')
                <span>{{ $message }}</span>   
            @enderror
        </div>
        <div>
            <input type="email" name="email" placeholder="E-mail"  value="{{ old('email') }}" />
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <input type="email_confirmation" name="email_confirmation" placeholder="Confirmação de e-mail" />
            @error('email_confirmation')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <input type="password" name="password" placeholder="Senha" />
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <button>Registrar</button>
    </form>
</div>
