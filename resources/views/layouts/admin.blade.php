<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>assitent</title>
</head>
<body>

    <header style="background-color: #181661">
        <div class="container">
            <div class="d-flex justify-content-center py-3">
                <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{route('user.index')}}" class="nav-link">Dashbord</a></li>
                <li class="nav-item"><a href="{{route('user.index')}}" class="nav-link">Decks</a></li>
                <li class="nav-item"><a href="{{route('login.destroy')}}" class="nav-link">Sair</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>
    
</body>
</html>