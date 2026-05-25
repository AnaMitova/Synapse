@extends('layouts.academynav')

@section('content')
    <div class="bg-[#F5F7F7] mt-2 font-sans">

        <!-- HERO SECTION -->
        <section class="max-w-7xl mx-auto px-6 lg:px-8 lg:pl-7 pt-16 pb-12">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">

                <!-- LEFT -->
                <div class="flex flex-col">

                    <div
                        class="inline-flex items-center gap-2 border border-[#CBFBF1] bg-[#F0FDFA] rounded-full px-5 py-2 text-[#4A5565] text-[15px] w-fit">
                        <span class="text-[#5B52A3] text-lg">●</span>
                        <span>Пријавувањето е во тек! Побарај детални информации</span>
                    </div>

                    <div class="pt-8 leading-[1.05]">
                        <h1 class="text-[48px] md:text-[64px] lg:text-[72px] font-extrabold text-[#101828]">
                            Школа за
                        </h1>
                        <h1 class="text-[48px] md:text-[64px] lg:text-[72px] font-extrabold text-[#101828]">
                            менаџирање
                        </h1>
                        <h1 class="text-[48px] md:text-[64px] lg:text-[72px] font-extrabold">
                            <span class="text-[#101828]">со </span>
                            <span class="bg-gradient-to-r from-[#5B52A3] to-[#7AB5A8] bg-clip-text text-transparent">
                                луѓе
                            </span>
                        </h1>
                    </div>

                    <div class="pt-8">
                        <h3 class="text-[20px] lg:text-[24px] font-bold text-black leading-[1.4]">
                            Практично лидерство<br>
                            што се применува веднаш
                        </h3>

                        <p class="text-[#4A5565] font-light text-[18px] lg:text-[20px] leading-[1.8] pt-6 max-w-xl">
                            Структурирана 5-месечна програма со 7 модули,
                            наменета за менаџери кои водат тимови во
                            производствени и корпоративни средини.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-4 pt-10">
                        <a href="#"
                            class="bg-[#5B52A3] hover:bg-[#4f4794] transition-all text-white px-8 py-4 rounded-2xl text-[18px] lg:text-[20px] shadow-lg">
                            Пријави се →
                        </a>
                        <a href="#"
                            class="border border-[#D0D5DD] bg-white px-8 py-4 rounded-2xl text-[18px] lg:text-[20px] text-[#344054]  shadow-sm">
                            Погледни ги модулите
                        </a>
                    </div>

                </div>

                <!-- RIGHT -->
                <div class="relative flex justify-center lg:justify-start items-start mt-16">

                    <div class="relative w-full max-w-[569px]">

                        <div class="relative">
                            <img src="{{ asset('img/academyLanding.png') }}"
                                class="rounded-2xl object-cover w-full h-[320px] sm:h-[408px]" alt="Academy" />

                            <!-- Top gradient -->
                            <div class="absolute top-0 left-0 w-full h-24 rounded-t-2xl pointer-events-none"
                                style="background: linear-gradient(to bottom, rgba(91, 163, 161, 0.6), transparent);">
                            </div>

                            <!-- Bottom gradient -->
                            <div class="absolute bottom-0 left-0 w-full h-24 rounded-b-2xl pointer-events-none"
                                style="background: linear-gradient(to top, rgba(91, 82, 163, 0.6), transparent);">
                            </div>
                        </div>

                        <div class="absolute bg-white  rounded-[28px] shadow-2xl flex flex-col bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 lg:left-auto lg:right-6 lg:translate-x-0"
                            style="
                width: calc(100% - 32px);
                max-width: 340px;
                height: 390px;
                padding: 24px 24px 20px;
             ">

                            <h3 class="text-[22px] text-[#101828] shrink-0" style="margin-bottom: 14px;">
                                Брза пријава
                            </h3>

                            <form method="POST" action="{{ route('academy.store') }}">
                                @csrf

                                <input type="text" name="full_name"
                                    class="py-2 px-4 border-[1px] border-[#E5E7EB] w-full rounded-2xl bg-[#F9FAFB]"
                                    placeholder="Име и презиме"><br><br>

                                <input type="text" name="company"
                                    class="py-2 px-4 border-[1px] border-[#E5E7EB] w-full rounded-2xl bg-[#F9FAFB]"
                                    placeholder="Компанија"><br><br>

                                <input type="email" name="email"
                                    class="py-2 px-4 border-[1px] border-[#E5E7EB] w-full rounded-2xl bg-[#F9FAFB]"
                                    placeholder="Емаил"><br><br>

                                <input type="text" name="phone"
                                    class="py-2 px-4 border-[1px] border-[#E5E7EB] w-full rounded-2xl bg-[#F9FAFB]"
                                    placeholder="Телефонски број"><br><br>

                                <button class="w-full bg-[#5B52A3] py-2.5 -mt-4 text-white font-light rounded-2xl"
                                    type="submit">Испрати пријава</button>
                            </form>

                        </div>

                    </div>

                </div>
        </section>

        <!-- CARDS SECTION -->
        <!-- top padding accounts for the form card overflow (130px overlap + 32px gap) -->
        <section class="max-w-7xl mx-auto px-6 lg:px-8 pt-52 lg:pt-12">

            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-7">

                <!-- CARD 1 -->
                <div class="bg-white rounded-[28px] px-7 py-8 shadow-md flex flex-col" style="min-height: 280px;">

                    <div
                        class="w-[72px] h-[72px] rounded-[22px] bg-[#F4F1FF] flex items-center justify-center mb-7 shrink-0">
                        <!-- target / bullseye icon -->
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16" cy="16" r="13" stroke="#5B52A3" stroke-width="3.5" />
                            <circle cx="16" cy="16" r="7" stroke="#5B52A3" stroke-width="3.5" />
                            <circle cx="16" cy="16" r="2" fill="#5B52A3" />
                        </svg>
                    </div>

                    <h3 class="text-[22px]  text-[#101828] leading-[1.3]">
                        Практични и<br>применливи<br>вештини
                    </h3>

                    <p class="text-[#4A5565] text-[18px] leading-[1.7] pt-4">
                        Стратегиски вештини кои можете да ги примените на вашето работно место веднаш
                    </p>

                </div>

                <!-- CARD 2 -->
                <div class="bg-white rounded-[28px] px-7 py-8 shadow-md flex flex-col" style="min-height: 280px;">

                    <div
                        class="w-[72px] h-[72px] rounded-[22px] bg-[#EEF8F5] flex items-center justify-center mb-7 shrink-0">
                        <!-- calendar icon -->
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="6" width="26" height="23" rx="4" stroke="#7AB5A8"
                                stroke-width="3" />
                            <path d="M3 13h26" stroke="#7AB5A8" stroke-width="3" stroke-linecap="round" />
                            <path d="M10 3v6M22 3v6" stroke="#7AB5A8" stroke-width="3" stroke-linecap="round" />
                        </svg>
                    </div>

                    <h3 class="text-[22px]  text-[#101828] leading-[1.3]">
                        7 еднодневни<br>модули
                    </h3>

                    <p class="text-[#4A5565] text-[18px] leading-[1.7] pt-12">
                        Сеопфатна програма во тек на 5 месеци со континуирана поддршка
                    </p>

                </div>

                <!-- CARD 3 -->
                <div class="bg-white rounded-[28px] px-7 py-8 shadow-md flex flex-col" style="min-height: 280px;">

                    <div
                        class="w-[72px] h-[72px] rounded-[22px] bg-[#F4F1FF] flex items-center justify-center mb-7 shrink-0">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16" cy="16" r="13" stroke="#5B52A3" stroke-width="3.5" />
                            <circle cx="16" cy="16" r="7" stroke="#5B52A3" stroke-width="3.5" />
                            <circle cx="16" cy="16" r="2" fill="#5B52A3" />
                        </svg>
                    </div>

                    <h3 class="text-[22px]  text-[#101828] leading-[1.3]">
                        Искусни<br>предавачи
                    </h3>

                    <p class="text-[#4A5565] text-[18px] leading-[1.7] pt-12">
                        Учете од докажани HR консултанти, практичари и бизнис лидери
                    </p>

                </div>

                <!-- CARD 4 -->
                <div class="bg-white rounded-[28px] px-7 py-8 shadow-md flex flex-col " style="min-height: 280px;">

                    <div
                        class="w-[72px] h-[72px] rounded-[22px] bg-[#EEF8F5] flex items-center justify-center mb-7 shrink-0">
                        <!-- arrow up-right icon -->
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 24L24 8M24 8H10M24 8v14" stroke="#7AB5A8" stroke-width="3.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <h3 class="text-[22px]  text-[#101828] leading-[1.3]">
                        Идеално за<br>сите нивоа
                    </h3>

                    <p class="text-[#4A5565] text-[18px] leading-[1.7] pt-12">
                        Наменето за менаџери од сите нивоа кои управуваат со луѓе и тимови
                    </p>

                </div>

            </div>

        </section>

        <!-- WHY SECTION -->
        <section class="max-w-5xl mx-auto text-center pt-28 px-6 lg:px-8">

            <h2 class="text-[42px] md:text-[52px] font-semibold text-[#101828] leading-[1.1]">
                Зошто ви е потребна SPM?
            </h2>

            <p class="text-[20px] lg:text-[19px] font-light text-[#4A5565] leading-[1.7] pt-3 max-w-xl mx-auto">
                Ако вашите менаџери водат луѓе а немале стручна обука за тоа
                оваа школа е создадена точно за нив
            </p>

        </section>

        <!-- PROBLEM CARDS -->
        <section class="max-w-6xl mx-auto px-4 lg:px-8 pt-14">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10">

        <div class="bg-white rounded-[32px] shadow-[0_6px_24px_rgba(0,0,0,0.08)] w-full h-full flex flex-col px-6 sm:px-10 py-8 sm:py-10 text-center">
            
            <div class="w-[70px] h-[70px] bg-[#F3F4F6] rounded-full mx-auto flex items-center justify-center mb-8 shrink-0">
                <svg width="28" height="28" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="18" cy="18" r="16" stroke="#4A5565" stroke-width="3" />
                    <path d="M18 10v10" stroke="#4A5565" stroke-width="3" stroke-linecap="round" />
                    <circle cx="18" cy="26" r="1.5" fill="#4A5565" />
                </svg>
            </div>

            <h3 class="text-2xl lg:text-[24px] font-semibold text-[#111827] leading-tight mb-4">
                Унапреден, но необучен
            </h3>

            <p class="max-w-[520px] mx-auto text-gray-700 font-light text-[16px] leading-[1.65]">
                Одличните стручњаци стануваат менаџери, но им недостасува да научат:
                како правилно да делегираат, како да дадат конструктивна повратна
                информација, како да управуваат со низок учинок и како да водат
                тешки разговори со луѓето
            </p>

        </div>

        <div class="bg-white rounded-[32px] shadow-[0_6px_24px_rgba(0,0,0,0.08)] w-full h-full flex flex-col px-6 sm:px-10 py-8 sm:py-10 text-center">
            
            <div class="w-[70px] h-[70px] bg-[#FFF1F1] rounded-full mx-auto flex items-center justify-center mb-8 shrink-0">
                <svg width="28" height="28" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 4L33 30H3L18 4Z" stroke="#EF4444" stroke-width="3" stroke-linejoin="round" />
                    <path d="M18 14v8" stroke="#EF4444" stroke-width="3" stroke-linecap="round" />
                    <circle cx="18" cy="26" r="1.5" fill="#EF4444" />
                </svg>
            </div>

            <h3 class="text-2xl lg:text-[24px] font-semibold text-[#111827] leading-tight mb-4">
                Последица
            </h3>

            <p class="max-w-[520px] mx-auto text-gray-700 font-light text-[16px] leading-[1.65]">
                Преоптоварени менаџери. Демотивирани тимови.
                Висока флуктуација и постојани HR интервенции
                за решавање конфликти.
            </p>

        </div>

    </div>

</section>

        <!-- BANNER -->
        <section class="max-w-7xl mx-auto px-6 lg:px-8 pt-12">

            <div
                class="rounded-[28px] px-10 lg:px-14 py-7 bg-gradient-to-r from-[#5B52A3] via-[#7096C1] to-[#7AB5A8] flex items-center justify-between gap-6">

                <h2 class="text-white text-[36px] lg:text-[36px] font-bold">
                    SPM го менува тоа.
                </h2>

                <div class="w-[70px] h-[70px] rounded-full bg-white/20 flex items-center justify-center shrink-0">
                    <svg viewBox="2 2 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 text-white">
                        <path
                            d="M10 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM4 8a6 6 0 1 1 12 0A6 6 0 0 1 4 8zm12.828-4.243a1 1 0 0 1 1.415 0 6 6 0 0 1 0 8.486 1 1 0 1 1-1.415-1.415 4 4 0 0 0 0-5.656 1 1 0 0 1 0-1.415zm.702 13a1 1 0 0 1 1.212-.727c1.328.332 2.169 1.18 2.652 2.148.468.935.606 1.98.606 2.822a1 1 0 1 1-2 0c0-.657-.112-1.363-.394-1.928-.267-.533-.677-.934-1.349-1.102a1 1 0 0 1-.727-1.212zM6.5 18C5.24 18 4 19.213 4 21a1 1 0 1 1-2 0c0-2.632 1.893-5 4.5-5h7c2.607 0 4.5 2.368 4.5 5a1 1 0 1 1-2 0c0-1.787-1.24-3-2.5-3h-7z"
                            fill="currentColor" />
                    </svg>
                </div>

            </div>

        </section>

        <!-- FINAL SECTION -->
        <section class="max-w-7xl mx-auto px-6 lg:px-8 pt-10 pb-24">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <div class="relative bg-white rounded-[28px] shadow-md p-10 pl-[2.5rem] overflow-hidden">

                    <!-- gradient border -->
                    <div
                        class="absolute left-0 top-0 h-full w-[8px]
                            bg-gradient-to-b from-[#7AB5A8] to-[#5B52A3]
                            rounded-l-[28px]">
                    </div>

                    <h3 class="text-[36px] lg:text-[30px] font-bold text-[#101828]">
                        ЗОШТО SPM?
                    </h3>

                    <p class="text-[#4A5565] text-[18px] font-light leading-[1.8] pt-6">
                        SPM е практична, системска програма што им помага
                        на менаџерите да водат луѓе сигурно, структурирано
                        и со јасни резултати. Школата се темели на научно
                        поткрепени практики докажани во реални ситуации.
                    </p>

                </div>

                <div class="relative bg-white rounded-[28px] shadow-md p-10 pl-[2.5rem] overflow-hidden">

                    <!-- gradient border -->
                    <div
                        class="absolute left-0 top-0 h-full w-[8px]
                            bg-gradient-to-b from-[#7AB5A8] to-[#5B52A3]
                            rounded-l-[28px]">
                    </div>

                    <h3 class="text-[36px] lg:text-[30px] font-bold text-[#101828]">
                        ШТО ДОБИВААТ УЧЕСНИЦИТЕ?
                    </h3>

                    <ol
                        class="text-[#4A5565] text-[18px] lg:text-[18px] leading-[1.8] font-light pt-6 list-decimal pl-6 space-y-1">
                        <li>Јасност на улогата за менаџирање со луѓе</li>
                        <li>Конкретни алатки што веднаш се применуваат</li>
                        <li>Подобра комуникација и зајакнат авторитет</li>
                        <li>Системски пристап кон перформанс менаџмент</li>
                        <li>Самостојност во водење на тим без постојано потпирање на одделот за Човечки ресурси</li>
                        <li>Менторство</li>
                    </ol>

                </div>

            </div>

        </section>
        <section class=" py-16 px-4">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-[48px] font-bold text-[#101828] mb-12">За кого е наменета?</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 mb-12">

                    <div
                        class="bg-white rounded-2xl p-6 shadow-sm flex flex-col items-center text-center h-full min-h-[220px] relative overflow-hidden">
                        <div class="absolute top-0 left-0 right-0 h-1 pointer-events-none"
                            style="background: linear-gradient(to right, #5B52A3, #5BA3A1);"></div>

                        <div
                            class="w-16 h-16 bg-[#EEF2F6] rounded-xl flex items-center justify-center text-[#5BA3A1] mb-6 mt-2">
                            <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <p class="font-medium text-[#101828] text-[19px] leading-snug">Директори и раководители</p>
                    </div>

                    <div
                        class="bg-white rounded-2xl p-6 shadow-sm flex flex-col items-center text-center h-full min-h-[220px] relative overflow-hidden">
                        <div class="absolute top-0 left-0 right-0 h-1 pointer-events-none"
                            style="background: linear-gradient(to right, #5B52A3, #5BA3A1);"></div>

                        <div
                            class="w-16 h-16 bg-[#EEF2F6] rounded-xl flex items-center justify-center text-[#5B52A3] mb-6 mt-2">
                            <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <p class="font-medium text-[#101828] text-[19px] leading-snug">Супервизори и тим лидери</p>
                    </div>

                    <div
                        class="bg-white rounded-2xl p-6 shadow-sm flex flex-col items-center text-center h-full min-h-[220px] relative overflow-hidden">
                        <div class="absolute top-0 left-0 right-0 h-1 pointer-events-none"
                            style="background: linear-gradient(to right, #5B52A3, #5BA3A1);"></div>

                        <div
                            class="w-16 h-16 bg-[#EEF2F6] rounded-xl flex items-center justify-center text-[#5BA3A1] mb-6 mt-2">
                            <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <p class="font-medium text-[#101828] text-[19px] leading-snug">Проектни менаџери</p>
                    </div>

                    <div
                        class="bg-white rounded-2xl p-6 shadow-sm flex flex-col items-center text-center h-full min-h-[220px] relative overflow-hidden">
                        <div class="absolute top-0 left-0 right-0 h-1 pointer-events-none"
                            style="background: linear-gradient(to right, #5B52A3, #5BA3A1);"></div>

                        <div
                            class="w-16 h-16 bg-[#EEF2F6] rounded-xl flex items-center justify-center text-[#5B52A3] mb-6 mt-2">
                            <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                        </div>
                        <p class="font-medium text-[#101828] text-[19px] leading-snug">Менаџери што првпат преземаат тим
                        </p>
                    </div>

                    <div
                        class="bg-white rounded-2xl p-6 shadow-sm flex flex-col items-center text-center h-full min-h-[220px] relative overflow-hidden">
                        <div class="absolute top-0 left-0 right-0 h-1 pointer-events-none"
                            style="background: linear-gradient(to right, #5B52A3, #5BA3A1);"></div>

                        <div
                            class="w-16 h-16 bg-[#EEF2F6] rounded-xl flex items-center justify-center text-[#5BA3A1] mb-6 mt-2">
                            <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <p class="font-medium text-[#101828] text-[19px] leading-snug">Експерти со лидерски потенцијал</p>
                    </div>
                </div>

                <p class="max-w-4xl mx-auto px-4 text-[#475569] text-base md:text-[18px] font-light leading-relaxed">
                    Програмата е применлива во сите индустрии и е идеална за компании кои сакаат системски и практичен
                    пристап кон управување со луѓе.
                </p>
            </div>
        </section>

       <section class="py-16 px-4 md:px-8 lg:px-28">
    <div class="max-w-7xl mx-auto">
        
        <span class="text-sm md:text-[18px] font-light tracking-wider text-[#5B52A3] uppercase block mb-3">SPM 2026</span>
        
        <h2 class="text-3xl md:text-[36px] font-extrabold text-[#101828] mb-4 w-full lg:w-[60%] leading-tight">
            SPM Прва програма за лидерство во <span
                class="bg-gradient-to-r from-[#5B52A3] to-[#5BA3A1] bg-clip-text text-transparent">производствени
                компании</span>
        </h2>
        
        <p class="text-[#475569] mb-10 text-light text-base md:text-[18px]">Се фокусира на реалните предизвици на менаџерите во
            производствени компании:</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 mb-10">
            
            <div class="bg-white w-full px-5 py-6 md:px-6 md:py-8 rounded-xl shadow-sm border-l-4 border-[#5BA3A1] font-medium text-[#101828] text-base md:text-[19px] flex items-center min-h-[84px]">
                Управување со различни профили на вработени (директни и индиректни)
            </div>
            
            <div class="bg-white w-full px-5 py-6 md:px-6 md:py-8 rounded-xl shadow-sm border-l-4 border-[#5B52A3] font-medium text-[#101828] text-base md:text-[19px] flex items-center min-h-[84px]">
                Баланс помеѓу оперативна извонредност и лидерство
            </div>
            
            <div class="bg-white w-full px-5 py-6 md:px-6 md:py-8 rounded-xl shadow-sm border-l-4 border-[#5B52A3] font-medium text-[#101828] text-base md:text-[19px] flex items-center min-h-[84px]">
                Усогласување на тимовите со производствени цели, KPI и оперативни планови
            </div>
            
            <div class="bg-white w-full px-5 py-6 md:px-6 md:py-8 rounded-xl shadow-sm border-l-4 border-[#5BA3A1] font-medium text-[#101828] text-base md:text-[19px] flex items-center min-h-[84px]">
                Водење луѓе во услови на континуирано подобрување (continuous improvement)
            </div>
            
            <div class="bg-white w-full px-5 py-6 md:px-6 md:py-8 rounded-xl shadow-sm border-l-4 border-[#5BA3A1] font-medium text-[#101828] text-base md:text-[19px] flex items-center min-h-[84px]">
                Координација помеѓу производство, одржување, квалитет и поддржувачки функции
            </div>
            
            <div class="bg-white w-full px-5 py-6 md:px-6 md:py-8 rounded-xl shadow-sm border-l-4 border-[#5B52A3] font-medium text-[#101828] text-base md:text-[19px] flex items-center min-h-[84px]">
                Управување со мотивација и дисциплина на луѓе и тимови во производствен систем
            </div>
            
        </div>

        <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4">
            <div class="bg-white border border-[#E2E8F0] px-6 py-6 rounded-xl font-medium text-[#101828] flex-1 text-center sm:text-left shadow-sm">
                Практични решенија за секојдневни ситуации од производствена средина.
            </div>
            <button class="bg-[#5B52A3] hover:bg-[#4f4794] text-white font-semibold px-8 py-4 rounded-xl flex items-center justify-center gap-2 transition-colors shadow-lg whitespace-nowrap">
                Пријави се веднаш
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </div>
        
    </div>
</section>

        <section class="bg-[#F8FAFC] py-16 px-4" x-data="{
            openModal: false,
            activeNum: '',
            activeTitle: '',
            activeDesc: '',
            activeColor: '',
            modules: {
                '01': `Транзиција од „јас работам“ кон „јас водам“.<br><br>
                • Системско размислување<br>
                • Донесување одлуки<br>
                • Делегирање без микроменаџирање<br>
                • Градење личен менаџерски стил<br><br>
                Практични симулации и реални случаи од работа.`,
                '02': `Како да изградите авторитет и доверба.<br><br>
                • Ангажираност и мотивација на вработени<br>
                • Управување со дисциплина<br>
                • Чувствителни разговори<br>
                • Конзистентност во односите`,
                '03': `Како се гради посветен тим што останува.<br><br>
                • Менаџерот како клучен фактор за ангажираност<br>
                • Што навистина ја гради ангажираноста<br>
                • Поврзување на стилот на водење со резултати<br>
                • Практични алатки за задржување на клучни луѓе`,
                '04': `Продуктивност и одговорност или Како да ги преведете целите во резултати.<br><br>
                • Менаџерот како клучен фактор за ангажираност<br>
                • Што навистина ја гради ангажираноста<br>
                • Поврзување на стилот на водење со резултати<br>
                • Практични алатки за задржување на клучни луѓе`,
                '05': `Како да градите луѓе, не само резултати.<br><br>
                • Идентификација на потенцијал<br>
                • Развојни планови<br>
                • Подготовка на наследници<br>
                • Водење развојни разговори`,
                '06': `Лидерство во комплексни ситуации.<br><br>
                • Самосвест и стабилност<br>
                • Конструктивна повратна информација<br>
                • Континуиран фидбек<br>
                • Управување со конфликти`,
                '07': `Како да водите тим низ промени.<br><br>
                • Модели за управување со промени<br>
                • Алатки за справување со отпор<br>
                • Позиционирање на иницијативи како приоритет<br>
                • Градење организациска отпорност`
            },
            openModule(num, title, color) {
                this.activeNum = num;
                this.activeTitle = title;
                this.activeDesc = this.modules[num];
                this.activeColor = color;
                this.openModal = true;
            }
        }">

            <div class="w-[90%] max-w-[90%] mx-auto">
                <div class="text-center mb-12">
                    <span class="text-xs font-bold tracking-widest text-[#5B52A3] uppercase block mb-3">Модули и
                        програми</span>
                    <h2 class="text-3xl md:text-5xl font-black text-[#101828] leading-tight mb-4">
                        Структурирано учење.<br>
                        <span class="text-[#5B52A3]">Реална примена.</span> <span class="text-[#101828]">Видливи
                            резултати</span>
                    </h2>

                    <div class="flex flex-wrap items-center justify-center gap-6 mt-6 text-[#64748B] text-sm font-medium">
                        <span class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#5B52A3]" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            5 месеци
                        </span>
                        <span class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#5BA3A1]" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                            7 еднодневни модули
                        </span>
                        <span class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#5B52A3]" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            16-18 учесници
                        </span>
                    </div>
                </div>

                <div class="space-y-4 mb-8">
                    <div class="bg-white rounded-2xl p-6 shadow-sm border-l-[6px] border-[#5BA3A1] flex items-start gap-6">
                        <span class="text-3xl md:text-4xl font-extrabold text-[#5BA3A1] opacity-70 leading-none">01</span>
                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-[#101828] mb-1">Од експерт до менаџер</h4>
                            <p class="text-[#64748B] text-sm mb-3">Транзиција од „јас работам“ кон „јас водам“.</p>
                            <button @click="openModule('01', 'Од експерт до менаџер', '#5BA3A1')"
                                class="inline-flex items-center gap-1.5 text-xs font-bold text-[#101828] hover:underline">
                                Прочитај повеќе <span class="text-sm">→</span>
                            </button>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-sm border-l-[6px] border-[#5B52A3] flex items-start gap-6">
                        <span class="text-3xl md:text-4xl font-extrabold text-[#5B52A3] opacity-70 leading-none">02</span>
                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-[#101828] mb-1">Организациско однесување и комуникација</h4>
                            <p class="text-[#64748B] text-sm mb-3">Како да изградите авторитет и доверба.</p>
                            <button @click="openModule('02', 'Организациско однесување и комуникација', '#5B52A3')"
                                class="inline-flex items-center gap-1.5 text-xs font-bold text-[#101828] hover:underline">
                                Прочитај повеќе <span class="text-sm">→</span>
                            </button>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-sm border-l-[6px] border-[#5BA3A1] flex items-start gap-6">
                        <span class="text-3xl md:text-4xl font-extrabold text-[#5BA3A1] opacity-70 leading-none">03</span>
                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-[#101828] mb-1">Ангажираност и задржување на вработените</h4>
                            <p class="text-[#64748B] text-sm mb-3">Како се гради посветен тим што останува.</p>
                            <button @click="openModule('03', 'Ангажираност и задржување на вработените', '#5BA3A1')"
                                class="inline-flex items-center gap-1.5 text-xs font-bold text-[#101828] hover:underline">
                                Прочитај повеќе <span class="text-sm">→</span>
                            </button>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-sm border-l-[6px] border-[#5B52A3] flex items-start gap-6">
                        <span class="text-3xl md:text-4xl font-extrabold text-[#5B52A3] opacity-70 leading-none">04</span>
                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-[#101828] mb-1">Управување со перформанси и одговорност</h4>
                            <p class="text-[#64748B] text-sm mb-3">Продуктивност и одговорност или Како да ги преведете
                                целите во резултати</p>
                            <button @click="openModule('04', 'Управување со перформанси и одговорност', '#5B52A3')"
                                class="inline-flex items-center gap-1.5 text-xs font-bold text-[#101828] hover:underline">
                                Прочитај повеќе <span class="text-sm">→</span>
                            </button>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-sm border-l-[6px] border-[#5BA3A1] flex items-start gap-6">
                        <span class="text-3xl md:text-4xl font-extrabold text-[#5BA3A1] opacity-70 leading-none">05</span>
                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-[#101828] mb-1">Развој на вработени, таленти и наследници
                            </h4>
                            <p class="text-[#64748B] text-sm mb-3">Како да градите луѓе, не само резултати.</p>
                            <button @click="openModule('05', 'Развој на вработени, таленти и наследници', '#5BA3A1')"
                                class="inline-flex items-center gap-1.5 text-xs font-bold text-[#101828] hover:underline">
                                Прочитај повеќе <span class="text-sm">→</span>
                            </button>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-sm border-l-[6px] border-[#5B52A3] flex items-start gap-6">
                        <span class="text-3xl md:text-4xl font-extrabold text-[#5B52A3] opacity-70 leading-none">06</span>
                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-[#101828] mb-1">Емоционална интелигенција и управување со
                                конфликти</h4>
                            <p class="text-[#64748B] text-sm mb-3">Лидерство во тешки ситуации.</p>
                            <button
                                @click="openModule('06', 'Емоционална интелигенција и управување со конфликти', '#5B52A3')"
                                class="inline-flex items-center gap-1.5 text-xs font-bold text-[#101828] hover:underline">
                                Прочитај повеќе <span class="text-sm">→</span>
                            </button>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-sm border-l-[6px] border-[#5BA3A1] flex items-start gap-6">
                        <span class="text-3xl md:text-4xl font-extrabold text-[#5BA3A1] opacity-70 leading-none">07</span>
                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-[#101828] mb-1">Управување со промени и отпорност</h4>
                            <p class="text-[#64748B] text-sm mb-3">Како да водите тим низ промени.</p>
                            <button @click="openModule('07', 'Управување со промени и отпорност', '#5BA3A1')"
                                class="inline-flex items-center gap-1.5 text-xs font-bold text-[#101828] hover:underline">
                                Прочитај повеќе <span class="text-sm">→</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mb-6">
                    <div class="rounded-3xl w-full px-8 py-12 text-center text-white relative overflow-hidden shadow-lg flex flex-col items-center justify-center"
                        style="background: linear-gradient(135deg, #5B52A3 0%, #5BA3A1 100%);">
                        <div class="mb-3">
                            <svg class="w-8 h-8 text-white mx-auto" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-6.75a1.125 1.125 0 00-1.125 1.125v3.375m9 0h-9M9 10.5h.008v.008H9V10.5zm3 0h.008v.008H12V10.5zm3 0h.008v.008H15V10.5zM9 13.5h.008v.008H9V13.5zm3 0h.008v.008H12V13.5zm3 0h.008v.008H15V13.5zM7.5 6.75h9M7.5 3h9M9 3h6m-7.5 15h9" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-medium mb-1">Сертификат за завршена програма</h3>
                        <p class="text-white/80 text-sm max-w-xl font-light">Уверение за вашите лидерски способности и
                            посветеност на професионален развој.</p>
                    </div>
                </div>

                <div class="flex justify-center mb-16">
                    <div
                        class="bg-white rounded-2xl p-6 shadow-sm w-full text-center relative overflow-hidden border-t-[10px] border-[#5B52A3]">
                        <p class="text-[#101828] font-semibold text-base md:text-lg px-2 leading-relaxed">
                            Првата програма на Школата за менаџирање со луѓе е специјално дизајнирана за потребите на
                            менаџментот, тим лидери и супервизори кои управуваат со луѓе во производство, а применлива е за
                            производствени компании од сите индустрии.
                        </p>
                    </div>
                </div>
            </div>

            <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm"
                x-show="openModal" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95" @keydown.escape.window="openModal = false"
                style="display: none;">

                <div class="bg-white rounded-3xl p-8 max-w-xl w-full shadow-2xl relative overflow-hidden"
                    @click.away="openModal = false">
                    <div class="absolute top-0 left-0 right-0 h-1.5" :style="'background-color: ' + activeColor"></div>

                    <button @click="openModal = false"
                        class="absolute top-5 right-5 text-gray-400 hover:text-gray-600 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <div class="mb-5 mt-2">
                        <span class="text-xs font-extrabold uppercase tracking-widest opacity-80"
                            :style="'color: ' + activeColor" x-html="'Модул ' + activeNum"></span>
                        <h3 class="text-2xl font-black text-[#101828] mt-1 leading-tight" x-html="activeTitle"></h3>
                    </div>

                    <div class="text-[#475569] text-base leading-relaxed mb-6 font-medium">
                        <div x-html="activeDesc"></div>
                    </div>
                </div>
            </div>
        </section>

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


        <section class="px-4 py-16 md:px-8">
            <div class="max-w-7xl mx-auto">

                <div class="font-sans flex flex-col items-center">

                    <p class="text-sm text-[#7AB5A8] font-light uppercase tracking-wider mb-2">ПОВЕЌЕ ЗА КОИ СЕ SYNAPSEHP
                    </p>
                    <p class="font-semibold text-3xl md:text-5xl text-[#101828] mb-6 text-center">Нашиот тим</p>

                    <p class="text-base md:text-xl text-[#4A5565] font-light max-w-4xl text-center mb-12">
                        SynapseHR е колектив на докажани HR консултанти кои го здружуваат своето долгогодишно корпоративно
                        искуство за да понудат системски, стратегиски и практични решенија.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 w-full">

                        <div class="bg-white rounded-2xl shadow-[0_6px_16px_#7AB5A866] flex flex-col overflow-hidden">
                            <img class="w-full h-auto object-cover" src="{{ asset('img/tomida.png') }}" alt="Томида" />
                            <div class="p-6 flex flex-col flex-grow">
                                <p class="text-lg font-semibold mb-2">Томида Караиванова Алаѓозовска</p>
                                <p class="text-base text-[#5B52A3] font-light mb-6 flex-grow">Експерт за стратегиско
                                    управување со човечки ресурси и HR системи</p>
                                <a href="#"
                                    class="text-base font-light text-[#101828] hover:text-[#7AB5A8] transition-colors mt-auto inline-flex items-center gap-1">Прочитај
                                    повеќе →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl shadow-[0_6px_16px_#7AB5A866] flex flex-col overflow-hidden">
                            <img class="w-full h-auto object-cover" src="{{ asset('img/tomida.png') }}" alt="Томида" />
                            <div class="p-6 flex flex-col flex-grow">
                                <p class="text-lg font-semibold mb-2">Томида Караиванова Алаѓозовска</p>
                                <p class="text-base text-[#5B52A3] font-light mb-6 flex-grow">Експерт за стратегиско
                                    управување со човечки ресурси и HR системи</p>
                                <a href="#"
                                    class="text-base font-light text-[#101828] hover:text-[#7AB5A8] transition-colors mt-auto inline-flex items-center gap-1">Прочитај
                                    повеќе →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl shadow-[0_6px_16px_#7AB5A866] flex flex-col overflow-hidden">
                            <img class="w-full h-auto object-cover" src="{{ asset('img/tomida.png') }}" alt="Томида" />
                            <div class="p-6 flex flex-col flex-grow">
                                <p class="text-lg font-semibold mb-2">Томида Караиванова Алаѓозовска</p>
                                <p class="text-base text-[#5B52A3] font-light mb-6 flex-grow">Експерт за стратегиско
                                    управување со човечки ресурси и HR системи</p>
                                <a href="#"
                                    class="text-base font-light text-[#101828] hover:text-[#7AB5A8] transition-colors mt-auto inline-flex items-center gap-1">Прочитај
                                    повеќе →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl shadow-[0_6px_16px_#7AB5A866] flex flex-col overflow-hidden">
                            <img class="w-full h-auto object-cover" src="{{ asset('img/tomida.png') }}" alt="Томида" />
                            <div class="p-6 flex flex-col flex-grow">
                                <p class="text-lg font-semibold mb-2">Томида Караиванова Алаѓозовска</p>
                                <p class="text-base text-[#5B52A3] font-light mb-6 flex-grow">Експерт за стратегиско
                                    управување со човечки ресурси и HR системи</p>
                                <a href="#"
                                    class="text-base font-light text-[#101828] hover:text-[#7AB5A8] transition-colors mt-auto inline-flex items-center gap-1">Прочитај
                                    повеќе →</a>
                            </div>
                        </div>

                    </div>

                    <p class="text-[#4A5565] text-base md:text-xl max-w-5xl mt-16 font-light text-center">
                        Ова не е само академска теорија пренесена од учебник. Ова е знаење изградено низ реални менаџерски
                        предизвици, трансформации, раст на компании и работа со тимови во комплексни организациски системи,
                        како и бројни консултантски часови.
                    </p>

                </div>

            </div>
        </section>

       <section class="py-16 px-4 md:px-8">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

        <div class="space-y-8 max-w-xl mx-auto lg:mx-0 w-full">
            <h2 class="text-3xl md:text-4xl font-bold text-[#101828]">Пријава за Првата програма</h2>
            <p class="text-[#4A5565] font-light text-[18px] leading-relaxed">
                Обезбедете место за вашиот тим во првата група. Бројот на места е ограничен за да се обезбеди висока интерактивност и индивидуална менторска поддршка.
            </p>

            <div class="space-y-6">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-xl bg-white border border-[#E2E8F0] shadow-sm flex items-center justify-center text-[#5B52A3] shrink-0 mt-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-medium text-[#101828] text-base">Времетраење на програмата</h4>
                        <p class="text-[#4A5565] text-sm ">Септември 2026 – Февруари 2027</p>
                        <p class="text-xs text-[#4A5565] font-light mt-0.5">Во живо во Скопје · Ограничено на 16–18 учесници</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-xl bg-white border border-[#E2E8F0] shadow-sm flex items-center justify-center text-[#5B52A3] shrink-0 mt-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-medium text-[#101828] text-base">Инвестиција</h4>
                        <p class="text-[#4A5565] text-sm ">1.280 € <span class=" text-sm text-[#4A5565]">по учесник за целата програма</span></p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 border border-[#E2E8F0] shadow-sm">
                <div class="flex items-center gap-2 text-black font-light text-sm mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Достапни се попусти за рана пријава и групни пријави.
                </div>
                <ul class="space-y-2 text-[#4A5565] text-sm font-light">
                    <li class="flex items-start gap-2"><span class="mt-0.5">•</span> Попуст за рана пријава</li>
                    <li class="flex items-start gap-2"><span class="mt-0.5">•</span> Групни попусти за пријави од иста организација</li>
                    <li class="flex items-start gap-2"><span class="mt-0.5">•</span> Можност за индивидуални планови за плаќање</li>
                </ul>
            </div>
        </div>

        <div class="bg-white w-full max-w-xl mx-auto lg:mx-0 lg:ml-auto rounded-3xl p-6 sm:p-8 shadow-xl border border-[#EEF2F6]">
            <form class="space-y-5">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-semibold text-[#475569] mb-1.5">Име и презиме</label>
                        <input type="text" placeholder="Jane Doe"
                            class="w-full bg-[#F8FAFC] border border-[#E2E8F0] rounded-xl px-4 py-3 text-sm outline-none focus:border-[#5B52A3] transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-[#475569] mb-1.5">Компанија</label>
                        <input type="text" placeholder="Acme Corp"
                            class="w-full bg-[#F8FAFC] border border-[#E2E8F0] rounded-xl px-4 py-3 text-sm outline-none focus:border-[#5B52A3] transition-colors">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-semibold text-[#475569] mb-1.5">Е-маил</label>
                        <input type="email" placeholder="jane@acme.com"
                            class="w-full bg-[#F8FAFC] border border-[#E2E8F0] rounded-xl px-4 py-3 text-sm outline-none focus:border-[#5B52A3] transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-[#475569] mb-1.5">Телефон</label>
                        <input type="text" placeholder="+389 7X XXX XXX"
                            class="w-full bg-[#F8FAFC] border border-[#E2E8F0] rounded-xl px-4 py-3 text-sm outline-none focus:border-[#5B52A3] transition-colors">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-[#475569] mb-1.5">Број на пријавени учесници</label>
                    <input type="number"
                        class="w-full bg-[#F8FAFC] border border-[#E2E8F0] rounded-xl px-4 py-3 text-sm outline-none focus:border-[#5B52A3] transition-colors">
                </div>

                <button type="submit"
                    class="w-full bg-[#5B52A3] hover:bg-[#4f4794] text-white font-light py-4 rounded-xl shadow-md transition-colors text-base mt-2">
                    Поднесете пријава
                </button>

                <p class="text-center text-[11px] text-[#94A3B8] leading-normal max-w-md mx-auto mt-4">
                    Со поднесувањето на оваа форма се согласувате со нашата политика за приватност и условите за користење.
                </p>
            </form>
        </div>

    </div>
</section>

        <section class="relative w-full py-20 px-6 text-white overflow-hidden"
            style="background: linear-gradient(135deg, #5B52A3 0%, #5BA3A1 100%);">
            <div
                class="absolute top-12 right-[40%] w-10 h-10 rounded-full bg-white/10 flex items-center justify-center backdrop-blur-sm">
                <svg class="w-5 h-5 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg></div>
            <div
                class="absolute top-24 right-[12%] w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center rotate-12 backdrop-blur-sm">
                <svg class="w-5 h-5 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg></div>
            <div
                class="absolute bottom-16 right-[45%] w-12 h-12 rounded-full bg-white/10 flex items-center justify-center -rotate-12 backdrop-blur-sm">
                <svg class="w-5 h-5 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                </svg></div>
            <div
                class="absolute bottom-8 right-[20%] w-10 h-10 rounded-full bg-white/10 flex items-center justify-center backdrop-blur-sm">
                <svg class="w-5 h-5 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg></div>

            <div
                class="absolute right-[15%] top-1/2 -translate-y-1/2 w-72 h-72 rounded-full bg-white/5 pointer-events-none hidden md:block">
            </div>

            <div class="max-w-5xl mx-auto relative z-10">
                <h2 class="text-4xl md:text-5xl font-semibold mb-6 leading-tight max-w-xl">Крајот на програмата е само
                    почеток.</h2>
                <p class="text-white/80 max-w-2xl text-base md:text-lg mb-10 font-light leading-relaxed">Со завршување на
                    SPM, станувате дел од активна и поддржувачка заедница на менаџери – мрежа што трае и по завршување на
                    програмата, каде учесниците градат континуирана култура на учење и раст.</p>

                <div class="space-y-6 max-w-xl mb-12">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center shrink-0 mt-0.5 shadow-inner">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg></div>
                        <div>
                            <h4 class="font-medium text-base">Затворени заедници групи</h4>
                            <p class="text-white/75 font-light text-sm">Пристап до затворени групи на Viber и социјални
                                мрежи со колеги менаџери, предавачи и практичари од различни индустрии.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center shrink-0 mt-0.5 shadow-inner">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg></div>
                        <div>
                            <h4 class="font-medium text-base">Совети и споделување искуства</h4>
                            <p class="text-white/75 font-light text-sm">Поставувајте прашања, барајте совети од искусни
                                колеги и предавачите, и споделувајте успешни практики и предизвици од вашето секојдневие.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center shrink-0 mt-0.5 shadow-inner">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg></div>
                        <div>
                            <h4 class="font-medium text-base">Вести, алатки и ресурси</h4>
                            <p class="text-white/75 font-light text-sm">Следете ги најновите вести и трендови во
                                управувањето со луѓе. Добивајте интересни написи, алатки и ресурси за секојдневното
                                менаџирање.</p>
                        </div>
                    </div>
                </div>

                <button
                    class="bg-white hover:bg-neutral-100 text-[#5B52A3] font-bold px-8 py-4 rounded-xl flex items-center justify-center gap-2 transition-colors shadow-lg">
                    Пријавете се за следната група
                    <svg class="w-4 h-4 text-[#5B52A3]" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>
        </section>

        <section class=" py-12 px-4">
            <div class="max-w-6xl mx-auto bg-white rounded-2xl p-8 shadow-sm relative overflow-hidden">

                <div class="absolute top-0 left-0 right-0 h-2.5 pointer-events-none"
                    style="background: linear-gradient(to right, #5B52A3, #5BA3A1);">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center mt-2">

                    <div class="flex flex-col items-center">
                        <div
                            class="w-12 h-12 rounded-full bg-[#F1F5F9] text-[#5B52A3] flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h4 class="font-medium text-[#101828] text-[17px] mb-1">Пратете ни меил</h4>
                        <a href="mailto:peopleschool@synapsehr.mk"
                            class="text-[15px] font-light text-[#5B52A3] hover:underline underline-offset-4 decoration-1">peopleschool@synapsehr.mk</a>
                    </div>

                    <div class="flex flex-col items-center">
                        <div
                            class="w-12 h-12 rounded-full bg-[#F1F5F9] text-[#5B52A3] flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </div>
                        <h4 class="font-medium text-[#101828] text-[17px] mb-1">Заследете не:</h4>
                        <a href="#" target="_blank"
                            class="text-[15px] font-light text-[#64748B] hover:text-[#5B52A3] transition-colors">SynapseHR
                            на LinkedIn</a>
                    </div>

                    <div class="flex flex-col items-center">
                        <div
                            class="w-12 h-12 rounded-full bg-[#F1F5F9] text-[#5B52A3] flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h4 class="font-medium text-[#101828] text-[17px] mb-1">Телефонски број</h4>
                        <p class="text-[15px] font-light text-[#64748B]">+389 72 308 607</p>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
