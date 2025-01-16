<div>
    {{ auth()->id() }}
    <h1>Editar o link <strong>{{ $link->name }}</strong></h1>

    @if ($message = session()->get('message'))
        <div>
            <div>{{ $message }}</div>
        </div>
    @endif

    <form action="{{ route('links.edit', $link) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <input type="link" name="link" placeholder="Link"  value="{{ old('link', $link->link) }}" />
            @error('link')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <input type="name" name="name" placeholder="Nome" value="{{ old('name', $link->name) }}" />
            @error('name')
                <span>{{ $message }}</span>   
            @enderror
        </div>
        <a href="{{ route('dashboard') }}">Cancelar</a>
        <button>Salvar</button>
    </form>
</div>
