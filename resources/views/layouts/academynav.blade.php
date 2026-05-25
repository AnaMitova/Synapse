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
        <div class="w-[25%]">
            <img class="w-48" src="{{ asset('img/logo.png') }}">
        </div>
        <div class="flex items-center w-[75%] text-[16px] text-[#364153] justify-end gap-12">
            <a href="/home">Почетна</a>
            <a>Што е SPM?</a>
            <a>За кого е наменета?</a>
            <a>SMP 2026</a>
            <a>Програми и модули</a>
            <a>Пријава</a>
            <a>Контакт</a>
            
        </div>
    </header>

    <!-- PAGE CONTENT -->
    <main class="">
        @yield('content')
    </main>

</body>
</html>