<div>
    {{ auth()->id() }}
    <h1>Login</h1>

    @if ($message = session()->get('message'))
        <div>
            <div>{{ $message }}</div>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div>
            <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" />
            @error('email')
                <span>{{ $message }}</span>   
            @enderror
        </div>
        <div>
            <input type="password" name="password" placeholder="Senha" />
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <button>Logar</button>
    </form>
</div>
