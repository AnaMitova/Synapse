@extends('layouts.app')

@section('content')

<!-- 1 -->
<div class="flex pt-14 font-sans px-6 font-light flex-col justify-center items-center">
    <img src="{{ asset('img/elipse1.png') }}" class="absolute top-33 left-34 w-[271px] h-[271px]"/>
    <img src="{{ asset('img/elipse2.png') }}" class="absolute bottom-33 right-38 w-[271px] h-[271px]"/>
    <p class="text-[14px] text-[#00786F] bg-[#F0FDFA] px-5 py-2 border-[#CBFBF1] border-2 rounded-full">✦ Нудиме целосни, стратешки и практични HR решенија на едно место</p>
    <div class="pt-5 flex flex-col -space-y-5 ">
        <p class="text-[67px] text-center px-20 font-extrabold text-[#101828]">Им помагаме на</p>
        <p class="text-[67px] text-center px-20 font-extrabold text-[#101828]">организациите да растат</p>
        <p class="text-[67px] text-center px-20 font-extrabold bg-gradient-to-r from-[#5B52A3] to-[#7AB5A8] bg-clip-text text-transparent">преку луѓето </p>
    </div> 
    <p class="pt-5 text-center text-[20px] text-[#4A5565]">Ги поддржуваме компаниите да изградат силни тимови, ефективно лидерство и <br/>HR процеси што носат долгорочни резултати.</p>
    <div class="flex gap-5 pt-12">
        <a class="bg-[#5B52A3] rounded-xl px-9 text-white py-2">Контактирајте нѐ →</a>
        <a class="border-2 bg-white border-[#D1D5DC] rounded-xl px-4 py-2">Пребарајте услуги</a>
    </div>


</div>

<!-- 2 -->
<div class="flex justify-end px-6 font-sans items-center px-20 pt-20">
    <div class="w-1/3 space-y-16 flex flex-col items-center mt-4">
        <div class="flex flex-col w-[333px] pt-1 justify-end items-start">
            <p class="text-[14px] font-light text-[#5B52A3]">НАШИ УСЛУГИ</p>
            <p class="text-[#101828] font-bold text-[38px]">Стратегиски HR</p>
            <p class="text-[#4A5565] font-light text-[20px] pt-[23px]">Ги поврзуваме бизнис целите со HR практиките за создавање усогласени, стабилни и успешни тимови.</p>
        </div>
        <div class="w-[360px] h-[280px] mt-7 flex flex-col gap-4 justify-center  shadow-[0_6px_16px_#5B52A34D] bg-white p-[36px] rounded-3xl">
            <p class="text-[20px] font-semibold">Развој на вработени <br/>и кариера</p>
            <p class="text-[15px] font-light">Развиваме лидери и тимови преку практични програми, обуки и алатки што создаваат реален импакт.</p>
            <p class="text-[14px] font-semibold">Прочитај повеќе →</p>
        </div>
    </div>
    <div class="w-1/3 space-y-13 flex flex-col items-center">
        <div class="w-[360px] h-[280px] flex flex-col gap-4 justify-center shadow-[0_6px_16px_#5B52A34D] bg-white p-[36px] rounded-3xl">
            <p class="text-[20px] font-semibold">Стратегиски HR и организациски развој</p>
            <p class="text-[15px] font-light">Ги усогласуваме HR процесите со растот на компанијата преку современи стратегии, структури и системи.</p>
            <p class="text-[14px] font-semibold">Прочитај повеќе →</p>
        </div>
        <div class="w-[360px] h-[280px] flex flex-col gap-4 justify-center shadow-[0_6px_16px_#5B52A34D] bg-white p-[36px] rounded-3xl">
            <p class="text-[20px] font-semibold">Менторство и обуки</p>
            <p class="text-[15px] font-light">Обуки за менаџери, HR академии, менторство, развој на лидерски и HR компетенции, градење професионални заедници </p>
            <p class="text-[14px] font-semibold">Прочитај повеќе →</p>
        </div>
    </div>
    <div class="w-1/3 space-y-13 flex flex-col items-center">
        <div class="w-[360px] h-[280px] flex flex-col gap-4 justify-center shadow-[0_6px_16px_#5B52A34D] bg-white p-[36px] rounded-3xl">
            <p class="text-[20px] font-semibold">Менаџирање со перформанси</p>
            <p class="text-[15px] font-light">Поставување и каскадирање на цели, оценка на учинок, KPI и фидбек</p>
            <p class="text-[14px] font-semibold">Прочитај повеќе →</p>
        </div>
        <div class="w-[360px] h-[280px] flex flex-col gap-4 justify-center shadow-[0_6px_16px_#5B52A34D] bg-white p-[36px] rounded-3xl">
            <p class="text-[20px] font-semibold">HR решенија по мерка</p>
            <p class="text-[15px] font-light">Преку анализа, заедничко дефинирање на приоритети и дизајн создаваме фокусирани и применливи решенија</p>
            <p class="text-[14px] font-semibold">Прочитај повеќе →</p>
        </div>
    </div>
</div>

<!-- 3 -->
<div class="flex flex-col px-6 font-sans justify-center items-center pt-24">
    <p class="font-light text-[16px] text-[#5B52A3]">ДОЗНАЈ ПОВЕЌЕ ЗА НАС</p>
    <p class="text-[48px] font-bold ">Зошто SynapseHR?</p>
    <div class="flex space-x-8 pt-7">
        <div class="w-[350.328125px] h-[300px] flex flex-col  justify-between shadow-[0_8px_16px_#7AB5A866] bg-white py-[43px] px-[36px] rounded-2xl">
            <div class="w-14 h-14 flex items-center justify-center border-2 border-[#E5E7EB] bg-[#eeedf6] rounded-full">
                <i class="fa-solid fa-magnifying-glass text-[#5B52A3]"></i>
            </div>            
            <p class="text-[20px] pt-3 font-semibold">Практичен пристап</p>
            <p class="text-[15px] pt-6 font-light">Нудиме решенија што можат веднаш да се применат во секојдневното работење.</p>
        </div>
        <div class="w-[350.328125px] h-[300px] flex flex-col  justify-between shadow-[0_8px_16px_#7AB5A866] bg-white py-[43px] px-[36px] rounded-2xl">
            <div class="w-14 h-14 flex items-center border-2 border-[#E5E7EB] justify-center bg-[#f2f7f6] rounded-full">
                <i class="fa-regular fa-lightbulb text-[#7AB5A8] text-[20px] "></i>
            </div>            
            <p class="text-[20px] pt-3 font-semibold">Искуство и експертиза</p>
            <p class="text-[15px] pt-6 font-light">Нашиот тим комбинира HR знаење, бизнис разбирање и практично искуство од различни индустрии.</p>
        </div>
        <div class="w-[350.328125px] h-[300px] flex flex-col  justify-between shadow-[0_8px_16px_#7AB5A866] bg-white py-[43px] px-[36px] rounded-2xl">
            <div class="w-14 h-14 flex items-center border-2 border-[#E5E7EB] justify-center bg-[#eeedf6] rounded-full">
                <i class="fa-solid fa-wrench text-[20px] text-[#5B52A3]"></i>
            </div>            
            <p class="text-[20px] pt-3 font-semibold">Прилагодени решенија</p>
            <p class="text-[15px] pt-6 font-light">Секоја организација е различна, затоа креираме пристап според вашите цели и потреби.</p>
        </div>
    </div>
</div>
<div class="px-12 px-6 pt-14">
    <div class="px-12 py-11 bg-gradient-to-r font-sans font-light from-[#5B52A3] to-[#7AB5A8] text-white p-6 rounded-3xl flex flex-col gap-2">
        <div class="absolute right-35  w-[64px] h-[64px]  flex items-center justify-center bg-[#FFFFFF33] rounded-full">
            <i class="fa-solid fa-user-group text-[22px]"></i>        
        </div>  
        <p class="text-[30px]">Компании од различни индустрии нѝ веруваат</p>
        <p class="text-[16px] w-[90%]">кога треба да изградат јасна структура, функционални процеси и организациска култура што поддржува стабилен и одржлив раст, без разлика дали се работи за конкретен предизвик или поширока трансформација, ние ја избираме и вклучуваме најсоодветната експертиза од нашиот тим и мрежа на партнери.</p>
    </div>
</div>

<!-- 4 -->
<div class="flex px-6 font-sans items-center pt-18 pb-24">
    <div class="w-1/2 px-14">
        <img src="{{ asset('img/peopleworking.png') }}" />
    </div>
    <div class="flex flex-col">
        <p class="text-[14px] text-[#5B52A3]">КАКО РАБОТИМЕ?</p>
        <p class="font-bold text-[36px] pt-2">Принципи на работа </p>
        <div class="flex space-x-6 pt-9">
            <div id="levo" class="flex flex-col space-y-7">
                <div class="w-[285px] h-[175px] flex flex-col  justify-between shadow-[0_8px_16px_#7AB5A866] bg-white px-6 py-5 rounded-2xl">
                    <div class="w-[40px] h-[40px] flex items-center justify-center bg-gray-200 rounded-full">
                        <i class="fa-solid fa-magnifying-glass p-3 text-gray-700"></i>
                    </div>            
                    <p class="text-[14px] font-semibold">Практичен пристап</p>
                    <p class="text-[12px] font-light">Нудиме решенија што можат веднаш да се применат во секојдневното работење.</p>
                </div>
                <div class="w-[285px] h-[175px] flex flex-col  justify-between shadow-[0_8px_16px_#7AB5A866] bg-white px-6 py-5 rounded-2xl">
                    <div class="w-[40px] h-[40px] flex items-center justify-center bg-gray-200 rounded-full">
                        <i class="fa-solid fa-magnifying-glass p-3 text-gray-700"></i>
                    </div>            
                    <p class="text-[14px] font-semibold">Практичен пристап</p>
                    <p class="text-[12px] font-light">Нудиме решенија што можат веднаш да се применат во секојдневното работење.</p>
                </div>
                <div class="w-[285px] h-[175px] flex flex-col  justify-between shadow-[0_8px_16px_#7AB5A866] bg-white px-6 py-5 rounded-2xl">
                    <div class="w-[40px] h-[40px] flex items-center justify-center bg-gray-200 rounded-full">
                        <i class="fa-solid fa-magnifying-glass p-3 text-gray-700"></i>
                    </div>            
                    <p class="text-[14px] font-semibold">Практичен пристап</p>
                    <p class="text-[12px] font-light">Нудиме решенија што можат веднаш да се применат во секојдневното работење.</p>
                </div>
            </div>
            <div id="desno" class="flex flex-col space-y-7">
                <div class="w-[285px] h-[175px] flex flex-col  justify-between shadow-[0_8px_16px_#7AB5A866] bg-white px-6 py-5 rounded-2xl">
                    <div class="w-[40px] h-[40px] flex items-center justify-center bg-gray-200 rounded-full">
                        <i class="fa-solid fa-magnifying-glass p-3 text-gray-700"></i>
                    </div>            
                    <p class="text-[14px] font-semibold">Практичен пристап</p>
                    <p class="text-[12px] font-light">Нудиме решенија што можат веднаш да се применат во секојдневното работење.</p>
                </div>
                <div class="w-[285px] h-[175px] flex flex-col  justify-between shadow-[0_8px_16px_#7AB5A866] bg-white px-6 py-5 rounded-2xl">
                    <div class="w-[40px] h-[40px] flex items-center justify-center bg-gray-200 rounded-full">
                        <i class="fa-solid fa-magnifying-glass p-3 text-gray-700"></i>
                    </div>            
                    <p class="text-[14px] font-semibold">Практичен пристап</p>
                    <p class="text-[12px] font-light">Нудиме решенија што можат веднаш да се применат во секојдневното работење.</p>
                </div>
                <div class="w-[285px] h-[175px] flex flex-col  justify-between shadow-[0_8px_16px_#7AB5A866] bg-white px-6 py-5 rounded-2xl">
                    <div class="w-[40px] h-[40px] flex items-center justify-center bg-gray-200 rounded-full">
                        <i class="fa-solid fa-magnifying-glass p-3 text-gray-700"></i>
                    </div>            
                    <p class="text-[14px] font-semibold">Практичен пристап</p>
                    <p class="text-[12px] font-light">Нудиме решенија што можат веднаш да се применат во секојдневното работење.</p>
                </div>
            </div>        
        </div>
    </div>
</div>

<!-- 5 -->
<div  class="py-12 font-sans flex  bg-cover bg-center" style="background-image: url('{{ asset('img/bg.png') }}')">
    <div id="levo" class="w-1/2  pl-36 py-11 flex flex-col justify-center">
        <p class="bg-[#FFFFFF1A] text-white font-light text-[14px] border-[#FFFFFF33] border-2 rounded-full w-[220px] px-3 py-2 text-center">🎓 Континуирано учење</p>
        <div class="text-[48px] pt-4 text-white font-bold flex flex-col -space-y-4">
            <p>Школа за</p>
            <p>менаџирање</p>
            <p>со луѓе</p>
        </div>
        <p class="text-[18px] text-[#FFFFFFE5] font-light pt-7">Практична програма за развој на менаџери, лидери и HR професионалци преку современи алатки, реални сценарија и применливо знаење.</p>
        <div class="flex text-[#FFFFFFF2] font-light items-center space-x-2 pt-8">
            <img src="{{ asset('img/check.png') }}" class="w-[22px] h-[22px]"/>
            <p>Практична и интерактивна програма</p>
        </div>
        <div class="flex text-[#FFFFFFF2] font-light items-center space-x-2 pt-3">
            <img src="{{ asset('img/check.png') }}" class="w-[22px] h-[22px]"/>
            <p>Практична и интерактивна програма</p>
        </div>
        <div class="flex text-[#FFFFFFF2] font-light items-center space-x-2 pt-3">
            <img src="{{ asset('img/check.png') }}" class="w-[22px] h-[22px]"/>
            <p>Практична и интерактивна програма</p>
        </div>
        <div class="flex text-[#FFFFFFF2] items-center space-x-2 pt-3">
            <img src="{{ asset('img/check.png') }}" class="w-[22px] h-[22px]"/>
            <p>Практична и интерактивна програма</p>
        </div>
        <a class="bg-[#7AB5A8] text-white mt-10 w-[245px] text-center rounded-xl px-6 py-4 ">Разгледај ја академијата</a>
    </div>
    <div id="desno" class="w-1/2 pl-7 flex flex-col gap-10 justify-center">
        <p class="bg-[#FFFFFF1A] border-2 border-[#FFFFFF33] p-8 w-[552px] font-semibold leading-8 text-[#FFFFFFB2] rounded-2xl">Програмите се дизајнирани за практична примена и долгорочен развој на организациите и тимовите.</p>
        <img class="w-[552px] h-[406px] rounded-2xl" src="{{ asset('img/tablesit.jpg') }}" />
    </div>
</div>

<!-- 6 -->
<div class="font-sans flex flex-col items-center pt-16">
    <p class="text-[14px] text-[#7AB5A8] font-light">ПОВЕЌЕ ЗА КОИ СЕ SYNAPSEHP</p>
    <p class="font-semibold text-[40px] text-[#101828]">Нашиот тим</p>
    <p class="text-[20px] text-[#4A5565] font-light px-48 text-center">SynapseHR е колектив на докажани HR консултанти кои го здружуваат своето долгогодишно корпоративно искуство за да понудат системски, стратегиски и практични решенија.</p>
    <div class="pt-10 flex space-x-8 justify-center">
        <div class="w-[285px] h-[580px] bg-white rounded-2xl shadow-[0_6px_16px_#7AB5A866]">
            <img class="w-full" src="{{ asset('img/tomida.png') }}" />
            <div class="p-7 flex flex-col gap-2">
                <p class="text-[18px] font-semibold">Томида Караиванова Алаѓозовска</p>
                <p class="text-[16px] text-[#5B52A3] font-light">Експерт за стратегиско управување со човечки ресурси и HR системи</p>
                <a class="text-[16px] font-light pb-7">Прочитај повеќе →</a>
            </div>

        </div>
        <div class="w-[285px] h-[580px] bg-white rounded-2xl shadow-[0_6px_16px_#7AB5A866]">
            <img class="w-full" src="{{ asset('img/tomida.png') }}" />
            <div class="p-7 flex flex-col gap-2">
                <p class="text-[18px] font-semibold">Томида Караиванова Алаѓозовска</p>
                <p class="text-[16px] text-[#5B52A3] font-light">Експерт за стратегиско управување со човечки ресурси и HR системи</p>
                <a class="text-[16px] font-light pb-7">Прочитај повеќе →</a>
            </div>

        </div>
        <div class="w-[285px] h-[580px] bg-white rounded-2xl shadow-[0_6px_16px_#7AB5A866]">
            <img class="w-full" src="{{ asset('img/tomida.png') }}" />
            <div class="p-7 flex flex-col gap-2">
                <p class="text-[18px] font-semibold">Томида Караиванова Алаѓозовска</p>
                <p class="text-[16px] text-[#5B52A3] font-light">Експерт за стратегиско управување со човечки ресурси и HR системи</p>
                <a class="text-[16px] font-light pb-7">Прочитај повеќе →</a>
            </div>

        </div>
        <div class="w-[285px] h-[580px] bg-white rounded-2xl shadow-[0_6px_16px_#7AB5A866]">
            <img class="w-full" src="{{ asset('img/tomida.png') }}" />
            <div class="p-7 flex flex-col gap-2">
                <p class="text-[18px] font-semibold">Томида Караиванова Алаѓозовска</p>
                <p class="text-[16px] text-[#5B52A3] font-light">Експерт за стратегиско управување со човечки ресурси и HR системи</p>
                <a class="text-[16px] font-light pb-7">Прочитај повеќе →</a>
            </div>
        </div>
    </div>
    <p class="text-[#4A5565] text-[20px] px-64 pt-10 font-light text-center">Веруваме дека најдобрите резултати доаѓаат од обединета експертиза. Затоа работиме како колектив – за да ви ја обезбедиме вистинската комбинација на знаење, искуство и пристап, според вашите конкретни потреби.</p>
</div>

<!-- 7 -->
 <section class="py-24 bg-[#F5F7F7] font-sans">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Heading -->
        <div class="text-center mb-14">
            <h2 class="text-[40px] font-bold text-[#0D1730]">
                Често поставувани прашања
            </h2>

            <p class="mt-2 text-[#4A5565] text-[20px] font-light">
                Имаме одговор на вашите најчести прашања
            </p>
        </div>

        <!-- FAQ -->
        <div class="space-y-6 flex flex-col items-center">

            <!-- Item -->
            <div x-data="{ open: true }"
                 class="bg-white w-[830px] rounded-[30px] shadow-[0_6px_18px_#0000001A] border border-[#E9EEEE] overflow-hidden">

                <!-- Button -->
                <button
                    @click="open = !open"
                    class="w-full px-10 py-6 flex items-center justify-between text-left">

                    <span class="text-[20px] font-bold text-black">
                        1. Кога е вистинско време да ангажираме HR консултант?
                    </span>

                    <!-- Icon -->
                    <div
                        class="w-[30px] h-[30px] rounded-full bg-gradient-to-b from-[#7567D8] to-[#7FC8B8] flex items-center justify-center">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-6 h-6 text-white transition duration-300"
                             :class="open ? 'rotate-180' : ''"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="3">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>

                <!-- Content -->
                <div x-show="open"
                     x-transition
                     class="px-10 pb-8">

                    <p class="text-[18px] leading-[25px] font-light text-black max-w-[950px]">
                        Кога чувствувате дека организацијата расте побрзо од структурата,
                        кога има нејасни улоги, пад на перформанси или пред трансформации.
                    </p>
                </div>
            </div>
                        <!-- Item -->
            <div x-data="{ open: false }"
                 class="bg-white w-[830px] rounded-[30px] shadow-[0_6px_18px_#0000001A] border border-[#E9EEEE] overflow-hidden">

                <!-- Button -->
                <button
                    @click="open = !open"
                    class="w-full px-10 py-6 flex items-center justify-between text-left">

                    <span class="text-[20px] font-bold text-black">
                        1. Кога е вистинско време да ангажираме HR консултант?
                    </span>

                    <!-- Icon -->
                    <div
                        class="w-[30px] h-[30px] rounded-full bg-gradient-to-b from-[#7567D8] to-[#7FC8B8] flex items-center justify-center">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-6 h-6 text-white transition duration-300"
                             :class="open ? 'rotate-180' : ''"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="3">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>

                <!-- Content -->
                <div x-show="open"
                     x-transition
                     class="px-10 pb-8">

                    <p class="text-[18px] leading-[25px] font-light text-black max-w-[950px]">
                        Кога чувствувате дека организацијата расте побрзо од структурата,
                        кога има нејасни улоги, пад на перформанси или пред трансформации.
                    </p>
                </div>
            </div>
            <!-- Item -->
            <div x-data="{ open: false }"
                 class="bg-white w-[830px] rounded-[30px] shadow-[0_6px_18px_#0000001A] border border-[#E9EEEE] overflow-hidden">

                <!-- Button -->
                <button
                    @click="open = !open"
                    class="w-full px-10 py-6 flex items-center justify-between text-left">

                    <span class="text-[20px] font-bold text-black">
                        1. Кога е вистинско време да ангажираме HR консултант?
                    </span>

                    <!-- Icon -->
                    <div
                        class="w-[30px] h-[30px] rounded-full bg-gradient-to-b from-[#7567D8] to-[#7FC8B8] flex items-center justify-center">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-6 h-6 text-white transition duration-300"
                             :class="open ? 'rotate-180' : ''"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="3">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>

                <!-- Content -->
                <div x-show="open"
                     x-transition
                     class="px-10 pb-8">

                    <p class="text-[18px] leading-[25px] font-light text-black max-w-[950px]">
                        Кога чувствувате дека организацијата расте побрзо од структурата,
                        кога има нејасни улоги, пад на перформанси или пред трансформации.
                    </p>
                </div>
            </div>
            <!-- Item -->
            <div x-data="{ open: false }"
                 class="bg-white w-[830px] rounded-[30px] shadow-[0_6px_18px_#0000001A] border border-[#E9EEEE] overflow-hidden">

                <!-- Button -->
                <button
                    @click="open = !open"
                    class="w-full px-10 py-6 flex items-center justify-between text-left">

                    <span class="text-[20px] font-bold text-black">
                        1. Кога е вистинско време да ангажираме HR консултант?
                    </span>

                    <!-- Icon -->
                    <div
                        class="w-[30px] h-[30px] rounded-full bg-gradient-to-b from-[#7567D8] to-[#7FC8B8] flex items-center justify-center">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-6 h-6 text-white transition duration-300"
                             :class="open ? 'rotate-180' : ''"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="3">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>

                <!-- Content -->
                <div x-show="open"
                     x-transition
                     class="px-10 pb-8">

                    <p class="text-[18px] leading-[25px] font-light text-black max-w-[950px]">
                        Кога чувствувате дека организацијата расте побрзо од структурата,
                        кога има нејасни улоги, пад на перформанси или пред трансформации.
                    </p>
                </div>
            </div>
            <!-- Item -->
            <div x-data="{ open: false }"
                 class="bg-white w-[830px] rounded-[30px] shadow-[0_6px_18px_#0000001A] border border-[#E9EEEE] overflow-hidden">

                <!-- Button -->
                <button
                    @click="open = !open"
                    class="w-full px-10 py-6 flex items-center justify-between text-left">

                    <span class="text-[20px] font-bold text-black">
                        1. Кога е вистинско време да ангажираме HR консултант?
                    </span>

                    <!-- Icon -->
                    <div
                        class="w-[30px] h-[30px] rounded-full bg-gradient-to-b from-[#7567D8] to-[#7FC8B8] flex items-center justify-center">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-6 h-6 text-white transition duration-300"
                             :class="open ? 'rotate-180' : ''"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="3">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>

                <!-- Content -->
                <div x-show="open"
                     x-transition
                     class="px-10 pb-8">

                    <p class="text-[18px] leading-[25px] font-light text-black max-w-[950px]">
                        Кога чувствувате дека организацијата расте побрзо од структурата,
                        кога има нејасни улоги, пад на перформанси или пред трансформации.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AlpineJS -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- form -->
<div class="min-h-screen flex items-center justify-center h-[470px]   bg-[#f5f5f5] font-sans py-16 px-6">
    <div class="max-w-[1600px] mx-auto bg-white rounded-[35px] p-10 shadow-[0_3px_12px_#7AB5A866]">

        <form action="{{ route('questions.store') }}" method="POST">
            @csrf

            <h2 class="text-[20px] font-semibold text-[#1f1f1f] mb-8">
                Форма за контакт
            </h2>

            <div class="mb-5">
                <input
                    type="text"
                    name="full_name"
                    placeholder="Име и презиме"
                    required
                    class="w-[1052px] h-[46px] rounded-xl border-2 border-[#e5e5e5] bg-[#F9FAFB] px-7 text-[14px] text-[#1A1A1A90] outline-none focus:border-[#6757c8] focus:bg-white transition"
                >
            </div>

            <div class="mb-5">
                <input
                    type="text"
                    name="company"
                    placeholder="Компанија"
                    class="w-[1052px] h-[46px] rounded-xl border-2 border-[#e5e5e5] bg-[#F9FAFB] px-7 text-[14px] text-[#1A1A1A90] outline-none focus:border-[#6757c8] focus:bg-white transition"
                >
            </div>

            <div class="mb-5">
                <input
                    type="email"
                    name="email"
                    placeholder="Емаил"
                    required
                    class="w-[1052px] h-[46px] rounded-xl border-2 border-[#e5e5e5] bg-[#F9FAFB] px-7 text-[14px] text-[#1A1A1A90] outline-none focus:border-[#6757c8] focus:bg-white transition"
                >
            </div>

            <div class="mb-5">
                <input
                    type="text"
                    name="phone"
                    placeholder="Телефон"
                    class="w-[1052px] h-[46px] rounded-xl border-2 border-[#e5e5e5] bg-[#F9FAFB] px-7 text-[14px] text-[#1A1A1A90] outline-none focus:border-[#6757c8] focus:bg-white transition"
                >
            </div>

            <div class="mb-5">
                <textarea
                    name="question"
                    placeholder="Прашање"
                    required
                    class="w-[1052px] h-[46px] px-7 py-2.5 rounded-xl border-2 border-[#e5e5e5] bg-[#F9FAFB] px-7  text-[14px] text-[#1A1A1A90] outline-none  focus:border-[#6757c8] focus:bg-white transition"
                ></textarea>
            </div>

            <button
                type="submit"
                class="w-[158px] h-[44px] rounded-[15px] bg-[#5B52A3] hover:bg-[#4d42a7] transition text-white text-[14px] font-light"
            >
                Испрати
            </button>

            @if(session('success'))
                <p class="mt-5 text-green-900 text-xl">
                    {{ session('success') }}
                </p>
            @endif

        </form>

    </div>
</div>


@endsection