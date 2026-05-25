<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>

<body class="bg-[#F5F6F7]" style="font-family: 'Inter', sans-serif;">
    <!-- HEADER (shared on every page) -->
    <header class="bg-white flex font-light justify-center items-center px-16 py-3 rounded-b-[50px] shadow-sm shadow-gray-300">
        <a href="/home" class="w-[25%]">
            <img class="w-48" src="{{ asset('img/logo.png') }}">
        </a>
        <div class="flex items-center w-[75%] text-[16px] text-[#364153] justify-end gap-14">
            <a href="/home">Почетна</a>
            <a>За нас</a>
            <a href="/academy">Школа за менаџирање со луѓе</a>
            <a>Новости</a>
            <a>Контакт</a>
            <a class="bg-[#5B52A3] rounded-xl px-5 text-white py-2">Закажи средба</a>
        </div>
    </header>

    <!-- PAGE CONTENT -->
    <main class="">
        @yield('content')
    </main>

</body>
</html>