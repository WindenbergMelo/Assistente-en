<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Assistent</title>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">
    <div class="card p-4 shadow" style="width: 24rem">
        <main class="form-signin">
            <form>
            <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Area Restrita</h1>
        
            <div class="form-floating">
                <input type="email" name="email"class="form-control" id="email" placeholder="name@example.com">
                <label for="email">E-mail</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Senha</label>
            </div>
        
            <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Entrar</button>
            <p class="mt-3 mb-3 text-body-secondary text-center">Esqueceu a Senha?</p>
            <p class="mt-3 mb-3 text-body-secondary text-center ">Cadastre-se <a href="#" class="text-decoration-none">Aqui</a></p>
            </form>
        </main>
    </div>
</body>
</html>