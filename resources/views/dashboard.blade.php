<div>
    <h1>Dashboard</h1>
    <h2>{{ auth()->user()->name }} :: {{ auth()->id() }}</h2>
    <a href="{{ route('profile') }}">Atualizar perfil</a>

    @if ($message = session()->get('message'))
        <div>
            <div>{{ $message }}</div>
        </div>
    @endif

    <a href="{{ route('links.create') }}">Criar link</a>

    <ul>
        @foreach($links as $link)
            <li style="display: flex;">
                @unless ($loop->first)
                    <form action="{{ route('links.up', $link) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <button>🔼</button>
                    </form>
                @endunless
                @unless ($loop->last)
                    <form action="{{ route('links.down', $link) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <button>🔽</button>
                    </form>
                @endunless

                <a href="{{ route('links.edit', $link) }}">
                    ({{ $link->sort }}) {{ $link->id }} - {{ $link->name }}
                </a>
                <form action="{{ route('links.destroy', $link) }}" method="POST" onsubmit="return confirm('Deseja excluir o link?')">
                    @csrf
                    @method('DELETE')

                    <button>Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
