<div>
    <img src="/storage/{{ $user->photo }}" alt="Photo profile">
    <h2>Usuário {{ $user->name }} :: {{ $user->id }}</h2>
    <h3>{{ $user->description }}</h3>
    <ul>
        @foreach($user->links as $link)
            <li>
                <a href="{{ $link->link }}" target="_blank">
                    ({{ $link->sort }}) {{ $link->id }} - {{ $link->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
