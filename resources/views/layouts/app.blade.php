<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusaya - Melestarikan Budaya</title>
    @vite(['resources/css/layout.css', 'resources/css/welcome.css', 'resources/css/app.css'])
</head>

<body>
    @include('layouts.navbar')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
</body>

</html>
