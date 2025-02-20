<x-layout.app>
    <div>
        {{ auth()->id() }}
        <h1>Criar um link</h1>

        @if ($message = session()->get('message'))
            <div>
                <div>{{ $message }}</div>
            </div>
        @endif

        <form action="{{ route('links.create') }}" method="POST">
            @csrf
            <div>
                <input type="link" name="link" placeholder="Link"  value="{{ old('link') }}" />
                @error('link')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <input type="name" name="name" placeholder="Nome" value="{{ old('name') }}" />
                @error('name')
                    <span>{{ $message }}</span>   
                @enderror
            </div>
            <button>Salvar</button>
        </form>
    </div>
</x-layout.app>