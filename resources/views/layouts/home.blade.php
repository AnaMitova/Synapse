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
    
    <header class="bg-white rounded-b-[30px] md:rounded-b-[50px] shadow-sm shadow-gray-300 relative z-50">
        <div class="max-w-[1600px] mx-auto flex font-light justify-between items-center px-6 md:px-16 py-3.5">
            
            <div class="flex-shrink-0">
                <img class="w-36 md:w-48" src="{{ asset('img/logo.png') }}" alt="Synapse HR">
            </div>
            
            <div class="hidden lg:flex items-center text-[16px] text-[#364153] gap-8 xl:gap-14">
                <a href="/home" class="hover:text-[#5B52A3] transition-colors duration-200">Почетна</a>
                <a href="#about-section" class="hover:text-[#5B52A3] transition-colors duration-200 cursor-pointer">За нас</a>
                <a href="/academy" class="hover:text-[#5B52A3] transition-colors duration-200">Школа за менаџирање со луѓе</a>
                <a href="#news-section" class="hover:text-[#5B52A3] transition-colors duration-200 cursor-pointer">Новости</a>
                <a href="#contact-section" class="hover:text-[#5B52A3] transition-colors duration-200 cursor-pointer">Контакт</a>
                <a href="#contact-section" class="bg-[#5B52A3] rounded-xl px-5 text-white py-2 hover:bg-[#4d4394] transition-all duration-200 shadow-sm shadow-indigo-100">Закажи средба</a>
            </div>

            <div class="lg:hidden flex items-center">
                <button id="mobile-menu-button" class="text-[#364153] focus:outline-none p-2 text-2xl transition-transform active:scale-95" aria-label="Toggle Menu">
                    <i id="menu-icon" class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100 absolute top-full left-0 w-full rounded-b-[30px] shadow-lg transition-all duration-300 ease-in-out">
            <div class="flex flex-col px-8 py-6 gap-4 text-[16px] text-[#364153] font-normal">
                <a href="/home" class="py-2 border-b border-gray-50 hover:text-[#5B52A3]">Почетна</a>
                <a href="#about-section" class="py-2 border-b border-gray-50 hover:text-[#5B52A3] cursor-pointer">За нас</a>
                <a href="/academy" class="py-2 border-b border-gray-50 hover:text-[#5B52A3]">Школа за менаџирање со луѓе</a>
                <a href="#news-section" class="py-2 border-b border-gray-50 hover:text-[#5B52A3] cursor-pointer">Новости</a>
                <a href="#contact-section" class="py-2 border-b border-gray-50 hover:text-[#5B52A3] cursor-pointer">Контакт</a>
                <a href="#contact-section" class="bg-[#5B52A3] text-center rounded-xl px-5 text-white py-3 mt-2 hover:bg-[#4d4394] transition-all duration-200">Закажи средба</a>
            </div>
        </div>
    </header>

    <main class="">
        @yield('content')
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Иницијализација на AOS анимациите
        AOS.init({
            duration: 800,
            once: true,
        });

        // Скрипта за функционалност на бургер менито и мазно скролање
        document.addEventListener('DOMContentLoaded', () => {
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');

            // Отворање/Затворање на бургер менито
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

            // Мазно скролање за сите линкови што содржат сидро (#)
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    // Скролај само доколку елементот постои на тековната страница
                    if (targetElement) {
                        e.preventDefault();
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });

                        // Доколку сме на мобилен, затвори го менито по кликот
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