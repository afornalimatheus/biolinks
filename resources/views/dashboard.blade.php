<div>
    <h1>Dashboard</h1>

    @if ($message = session()->get('message'))
        <div>
            <div>{{ $message }}</div>
        </div>
    @endif

    <a href="{{ route('links.create') }}">Criar link</a>

    <ul>
        @foreach($links as $link)
            <li>
                <a href="{{ route('links.edit', $link) }}">{{ $link->name }}</a>
                <form action="{{ route('links.destroy', $link) }}" method="POST" onsubmit="return confirm('Deseja excluir o link?')">
                    @csrf
                    @method('DELETE')

                    <button>Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
