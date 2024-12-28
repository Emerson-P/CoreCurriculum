<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form-container">
    <h1>Cadastro</h1>
    <form action="{{ route('cadastroPost')}}" method="POST">
        <!-- Token obrigatorio do laravel para o metodo post -->
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" value="{{old('name')}}" name="name" placeholder="Digite seu nome" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Digite seu e-mail" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="password" value="{{old('password')}}" placeholder="Digite sua senha" required>
        </div>
        <div class="form-group">
            <button type="submit">Cadastrar</button>
        </div>
    </form>
    </div>
    <a href="{{Route('login')}}">Login</a>
</body>
</html>