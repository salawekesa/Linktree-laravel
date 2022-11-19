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
<body class="bg-blue-100">
    <header>
        <ul class="p-6 flex justify-center gap-20 bg-black text-white ">
            <li><a href="{{ 'welcome' }}">Home</a></li>
            <li><a href="{{ 'about' }}">About</a></li>
            <li><a href="{{ 'contacts' }}">Contacts</a></li>
        </ul>
    </header>
    <ul class="p-3 flex justify-center align-middle bg-purple-300 gap-5 text-xl ">
        <li><a href="">Login</a></li>
        <li><a href="">Sign up</a></li>
        <li><a href="">Log out</a></li>

    </ul>

    @yield('content')
</body>
</html>
