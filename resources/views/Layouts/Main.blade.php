
<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    @include('includes.Head')
</head>

<body class="flex flex-col h-screen">
    <header class="row">
        @include('Includes.Header')
    </header>
    <div id="main" class="row flex-grow">
        @yield('content')
    </div>
    <footer class="row mt-auto">
        @include('elements.bottom_menu')
    </footer>
</body>
</html>