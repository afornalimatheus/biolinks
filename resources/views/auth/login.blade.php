<div>
    <h1>Login</h1>

    <form action="/login" method="POST">
        @csrf

        <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Senha">

        <button>Logar</button>
    </form>
</div>
