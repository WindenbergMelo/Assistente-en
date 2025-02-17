<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>assitent</title>
</head>
<body>

    <div class="container">
        @yield('content')
    </div>
    
</body>
</html>