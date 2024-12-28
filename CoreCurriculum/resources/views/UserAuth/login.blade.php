<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="form-container">
    <h1>Login</h1>
    <form action="{{ route('loginPost')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" value="{{old('email')}}" name="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" id="password" value="{{old('password')}}" name="password" placeholder="Digite sua senha" >
        </div>
        <div class="form-group">
            <button type="submit">Login</button>
        </div>
    </form>
</div>

<a href="{{Route('indexPage')}}">voltar</a>
</body>
</html>