<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Synapse HR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F5F6F7]" style="font-family: 'Inter', sans-serif;">
    
    <header class="bg-white rounded-b-[25px] md:rounded-b-[50px] shadow-sm shadow-gray-300 relative z-50">
        <div class="max-w-[1600px] mx-auto flex font-light justify-between items-center px-5 md:px-16 py-3.5">
            
            <div class="flex-shrink-0">
                <img class="w-36 md:w-48" src="{{ asset('img/logo.png') }}" alt="Synapse HR">
            </div>
            
            <div class="hidden md:flex items-center text-xs lg:text-sm xl:text-[16px] text-[#364153] gap-3 lg:gap-6 xl:gap-10 whitespace-nowrap">
                <a href="/" class="hover:text-[#5B52A3] transition-colors duration-200">Почетна</a>
                <a href="#what-is-spm" class="hover:text-[#5B52A3] transition-colors duration-200 cursor-pointer">Што е SPM?</a>
                <a href="#target-audience" class="hover:text-[#5B52A3] transition-colors duration-200 cursor-pointer">За кого е наменета?</a>
                <a href="#spm-2026" class="hover:text-[#5B52A3] transition-colors duration-200 cursor-pointer">SMP 2026</a>
                <a href="#modules-section" class="hover:text-[#5B52A3] transition-colors duration-200 cursor-pointer">Програми и модули</a>
                <a href="#registration-section" class="hover:text-[#5B52A3] transition-colors duration-200 cursor-pointer">Пријава</a>
                <a href="#contact-section" class="hover:text-[#5B52A3] transition-colors duration-200 cursor-pointer">Контакт</a>
            </div>

            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-[#364153] focus:outline-none p-2 text-2xl transition-transform active:scale-95" aria-label="Toggle Menu">
                    <i id="menu-icon" class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 absolute top-full left-0 w-full rounded-b-[25px] shadow-lg transition-all duration-300 ease-in-out">
            <div class="flex flex-col px-6 py-6 gap-4 text-[16px] text-[#364153] font-normal">
                <a href="/" class="py-2 border-b border-gray-50 hover:text-[#5B52A3]">Почетна</a>
                <a href="#what-is-spm" class="py-2 border-b border-gray-50 hover:text-[#5B52A3] cursor-pointer">Што е SPM?</a>
                <a href="#target-audience" class="py-2 border-b border-gray-50 hover:text-[#5B52A3] cursor-pointer">За кого е наменета?</a>
                <a href="#spm-2026" class="py-2 border-b border-gray-50 hover:text-[#5B52A3] cursor-pointer">SMP 2026</a>
                <a href="#modules-section" class="py-2 border-b border-gray-50 hover:text-[#5B52A3] cursor-pointer">Програми и модули</a>
                <a href="#registration-section" class="py-2 border-b border-gray-50 hover:text-[#5B52A3] cursor-pointer">Пријава</a>
                <a href="#contact-section" class="py-2 border-b border-gray-50 hover:text-[#5B52A3] cursor-pointer">Контакт</a>
            </div>
        </div>
    </header>

    <main class="">
        @yield('content')
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
        });

        document.addEventListener('DOMContentLoaded', () => {
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');

            // Бургер мени клик
            menuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                
                if (mobileMenu.classList.contains('hidden')) {
                    menuIcon.classList.remove('fa-xmark');
                    menuIcon.classList.add('fa-bars');
                } else {
                    menuIcon.classList.remove('fa-bars');
                    menuIcon.classList.add('fa-xmark');
                }
            });

            // Автоматско мазно скролање за сите ID сидра во менито
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        e.preventDefault();
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });

                        // Затвори го мобилното мени ако е отворено
                        if (!mobileMenu.classList.contains('hidden')) {
                            mobileMenu.classList.add('hidden');
                            menuIcon.classList.remove('fa-xmark');
                            menuIcon.classList.add('fa-bars');
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>