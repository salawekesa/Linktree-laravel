<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Linktree</title>
</head>
<body class="bg-gray-100">
    <header>
        <ul class="p-6 flex justify-center gap-20 bg-black text-white ">
            <li><a href="{{ 'welcome' }}">Home</a></li>
            <li><a href="{{ 'about' }}">About</a></li>
            <li><a href="{{ 'contacts' }}">Contacts</a></li>

        </ul>
    </header>

    @yield('content')
</body>
</html>
