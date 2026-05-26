@extends('layouts.app')

@section('content')

<!-- 1 -->
<div class="flex pt-14 font-sans px-6 font-light flex-col justify-center items-center">
    <img src="{{ asset('img/elipse1.png') }}" class="absolute top-33 left-34 w-[271px] h-[271px]"/>
    <img src="{{ asset('img/elipse2.png') }}" class="absolute bottom-33 right-38 w-[271px] h-[271px]"/>
    <p data-aos="fade-left" class="text-[14px] text-[#00786F] bg-[#F0FDFA] px-5 py-2 border-[#CBFBF1] border-2 rounded-full">✦ Нудиме целосни, стратешки и практични HR решенија на едно место</p>
    <div data-aos="fade-right" class="pt-5 flex flex-col -space-y-5 ">
        <p class="text-[67px] text-center px-20 font-extrabold text-[#101828]">Им помагаме на</p>
        <p class="text-[67px] text-center px-20 font-extrabold text-[#101828]">организациите да растат</p>
        <p class="text-[67px] text-center px-20 font-extrabold bg-gradient-to-r from-[#5B52A3] to-[#7AB5A8] bg-clip-text text-transparent">преку луѓето </p>
    </div> 
    <p data-aos="fade-left" class="pt-5 text-center text-[20px] text-[#4A5565]">Ги поддржуваме компаниите да изградат силни тимови, ефективно лидерство и <br/>HR процеси што носат долгорочни резултати.</p>
    <div data-aos="fade-right" class="flex gap-5 pt-12">
        <a class="bg-[#5B52A3] rounded-xl px-9 text-white py-2">Контактирајте нѐ →</a>
        <a class="border-2 bg-white border-[#D1D5DC] rounded-xl px-4 py-2">Пребарајте услуги</a>
    </div>


</div>

<!-- 2 -->
<section class="relative font-sans py-16 px-4 md:px-8 max-w-7xl mx-auto" x-data="{
    openServiceModal: false,
    activeService: {},
    services: {
        '01': {
            num: '01',
            title: 'Стратегиски HR',
            desc: `Опфаќа: развој на стратегии за човечки ресурси, градење и менторство на HR тимови, организациски дизајн, систематизација на улоги и одговорности, поставување на HR политики и процеси, како и развој на HR KPI и People Analytics рамки.<br><br>
            Идеално за компании кои растат, се трансформираат или имаат потреба од јасна структура и насока во управувањето со луѓето.<br><br>
            Преку детална анализа на организацијата, дизајн на соодветни решенија и поставување практични системи и алатки во кои активно учествува менаџментот/HR тимот, добивате јасна организациска структура, прецизно дефинирани улоги и одговорности, усогласеност помеѓу стратегијата и секојдневното работење и стабилна основа за одржлив раст.<br><br>
            Поставете цврста основа за раст.`
        },
        '02': {
            num: '02',
            title: 'Менаџирање со перформанси',
            desc: `Изработуваме дизајн и унапредување на системи за поставување и каскадирање на цели, евалуација на перформанси, KPI системи, фидбек механизми и нивно поврзување со системи за наградување.<br><br>
            Им помагаме на компаниите и тимовите кои сакаат да воспостават или подобрат систем за управување со перформанси и да обезбедат реална усогласеност со бизнис резултатите.<br><br>
            Преку дизајн или оптимизација на постојните системи, дефинираме на алатки и процеси, како и обука на менаџерите за нивна ефективна примена. Целосно решение за јасно поставени цели на сите нивоа, мерливи резултати, зголемена одговорност и континуирано подобрување на перформансите.<br><br>
            Претворете ги целите во реални резултати.`
        },
        '03': {
            num: '03',
            title: 'Развој на вработени и кариера',
            desc: `За компаниите кои сакаат да го развијат потенцијалот на своите вработени, да ги задржат талентите и да воспостават структуриран пристап кон кариерен развој, обезбедуваме развој на компетенциски модели, системи за учење и развој, кариерни патеки, интерна мобилност, како и индивидуално и групно кариерно советување.<br><br>
            Услугите ги реализираме преку дизајн на програми и системи, како и директна работа со вработени и менаџери преку работилници, советување и развојни планови, за да добиете јасни кариерни патеки, подобра искористеност на потенцијалот, поголема ангажираност и создавање на квалитетни работни места со можности за раст.<br><br>
            Задржете ги и развијте ги најдобрите вработени.`
        },
        '04': {
            num: '04',
            title: 'Менторство, обуки и HR заедница',
            desc: `Обуки за менаџери, HR академии, менторство, развој на лидерски и HR компетенции, градење професионални заедници или peer learning формати, создаваме структурирани програми, интерактивни обуки, менторски процеси и континуирана поддршка за менаџери, HR професионалци и организации кои сакаат да ги зајакнат своите капацитети за управување со луѓе.<br><br>
            Идеално за компании кои се стремат кон поголема сигурност во управувањето со луѓе, поефективни лидерски практики, силна корпоративна култура и директно влијание врз тимската ефективност.<br><br>
            Изградете лидери кои знаат да водат.`
        },
        '05': {
            num: '05',
            title: 'HR решенија по мерка',
            desc: `Секоја компанија има специфични предизвици, комплексни ситуации или потреба од интегриран пристап во управување со луѓето. Имаме решение за секоја од нив: Комбинирани или специфични HR интервенции според потребите на организацијата – од иницијална дијагностика до имплементација на целосни системи.<br><br>
            Преку анализа, заедничко дефинирање на приоритети и дизајн на прилагодени решенија кои се имплементираат во пракса, создаваме фокусирани и применливи решенија кои директно одговараат на реалните бизнис потреби и водат до подобрување на организацијата и перформансите.<br><br>
            Изградете лидери кои знаат да водат.`
        }
    },
    openModal(id) {
        this.activeService = this.services[id];
        this.openServiceModal = true;
    }
}">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 items-stretch">
        
        <div data-aos="fade-right" class="flex flex-col justify-center items-start lg:pr-4 mb-6 md:mb-0">
            <p class="text-[14px] font-semibold text-[#5B52A3] uppercase tracking-wider mb-2">НАШИ УСЛУГИ</p>
            <p class="text-[#101828] font-bold text-3xl md:text-[38px] leading-tight mb-4">Стратегиски HR</p>
            <p class="text-[#4A5565] font-light text-lg md:text-[20px] leading-relaxed">Ги поврзуваме бизнис целите со HR практиките за создавање усогласени, стабилни и успешни тимови.</p>
        </div>

        <div @click="openModal('01')" data-aos="fade-up" class="group bg-white p-8 rounded-3xl shadow-[0_6px_16px_#5B52A315] flex flex-col justify-between gap-4 cursor-pointer transition-all duration-300 ease-out origin-center hover:-rotate-2 hover:-translate-y-2 hover:shadow-2xl hover:bg-[#5B52A3]">
            <div>
                <p class="text-[20px] font-semibold text-[#101828] mb-3 group-hover:text-white transition-colors duration-300">Стратегиски HR и организациски развој</p>
                <p class="text-[15px] font-light text-[#4A5565] group-hover:text-white/90 transition-colors duration-300">Ги усогласуваме HR процесите со растот на компанијата преку современи стратегии, структури и системи.</p>
            </div>
            <p class="text-[14px] font-semibold text-[#101828] mt-4 group-hover:text-white transition-colors duration-300">Прочитај повеќе →</p>
        </div>

        <div @click="openModal('02')" data-aos="fade-left" class="group bg-white p-8 rounded-3xl shadow-[0_6px_16px_#5B52A315] flex flex-col justify-between gap-4 cursor-pointer transition-all duration-300 ease-out origin-center hover:-rotate-2 hover:-translate-y-2 hover:shadow-2xl hover:bg-[#7AB5A8]">
            <div>
                <p class="text-[20px] font-semibold text-[#101828] mb-3 group-hover:text-white transition-colors duration-300">Менаџирање со перформанси</p>
                <p class="text-[15px] font-light text-[#4A5565] group-hover:text-white/90 transition-colors duration-300">Поставување и каскадирање на цели, оценка на учинок, KPI и фидбек</p>
            </div>
            <p class="text-[14px] font-semibold text-[#101828] mt-4 group-hover:text-white transition-colors duration-300">Прочитај повеќе →</p>
        </div>

        <div @click="openModal('03')" data-aos="fade-right" class="group bg-white p-8 rounded-3xl shadow-[0_6px_16px_#5B52A315] flex flex-col justify-between gap-4 cursor-pointer transition-all duration-300 ease-out origin-center hover:-rotate-2 hover:-translate-y-2 hover:shadow-2xl hover:bg-[#5B52A3]">
            <div>
                <p class="text-[20px] font-semibold text-[#101828] mb-3 group-hover:text-white transition-colors duration-300">Развој на вработени <br/>и кариера</p>
                <p class="text-[15px] font-light text-[#4A5565] group-hover:text-white/90 transition-colors duration-300">Развиваме лидери и тимови преку практични програми, обуки и алатки што создаваат реален импакт.</p>
            </div>
            <p class="text-[14px] font-semibold text-[#101828] mt-4 group-hover:text-white transition-colors duration-300">Прочитај повеќе →</p>
        </div>

        <div @click="openModal('04')" data-aos="fade-up" class="group bg-white p-8 rounded-3xl shadow-[0_6px_16px_#5B52A315] flex flex-col justify-between gap-4 cursor-pointer transition-all duration-300 ease-out origin-center hover:-rotate-2 hover:-translate-y-2 hover:shadow-2xl hover:bg-[#7AB5A8]">
            <div>
                <p class="text-[20px] font-semibold text-[#101828] mb-3 group-hover:text-white transition-colors duration-300">Менторство и обуки</p>
                <p class="text-[15px] font-light text-[#4A5565] group-hover:text-white/90 transition-colors duration-300">Обуки за менаџери, HR академии, менторство, развој на лидерски и HR компетенции, градење професионални заедници</p>
            </div>
            <p class="text-[14px] font-semibold text-[#101828] mt-4 group-hover:text-white transition-colors duration-300">Прочитај повеќе →</p>
        </div>

        <div @click="openModal('05')" data-aos="fade-left" class="group bg-white p-8 rounded-3xl shadow-[0_6px_16px_#5B52A315] flex flex-col justify-between gap-4 cursor-pointer transition-all duration-300 ease-out origin-center hover:-rotate-2 hover:-translate-y-2 hover:shadow-2xl hover:bg-[#5B52A3]">
            <div>
                <p class="text-[20px] font-semibold text-[#101828] mb-3 group-hover:text-white transition-colors duration-300">HR решенија по мерка</p>
                <p class="text-[15px] font-light text-[#4A5565] group-hover:text-white/90 transition-colors duration-300">Преку анализа, заедничко дефинирање на приоритети и дизајн создаваме фокусирани и применливи решенија</p>
            </div>
            <p class="text-[14px] font-semibold text-[#101828] mt-4 group-hover:text-white transition-colors duration-300">Прочитај повеќе →</p>
        </div>

    </div>

    <div class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/60 backdrop-blur-sm"
        x-show="openServiceModal" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0" 
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200" 
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" 
        @keydown.escape.window="openServiceModal = false"
        style="display: none;">

        <div class="relative w-full max-w-4xl bg-white rounded-2xl shadow-2xl border-l-[12px] border-[#5B52A3] flex flex-col sm:flex-row p-6 sm:p-8 overflow-hidden"
             @click.away="openServiceModal = false"
             x-show="openServiceModal"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95" 
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-200" 
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95">
            
            <div class="sm:pr-6 mb-4 sm:mb-0">
                <span class="text-5xl font-semibold text-[#7AB5A8]" x-text="activeService.num"></span>
            </div>
            
            <div class="flex-grow">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-2xl font-bold text-[#101828]" x-text="activeService.title"></h3>
                    <button @click="openServiceModal = false" class="text-gray-400 hover:text-[#101828] transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
                
                <p class="text-sm text-[#4A5565] mb-8 leading-relaxed" x-html="activeService.desc"></p>
                
                <a href="#" class="inline-flex bg-[#5B52A3] hover:bg-[#4f4794] text-white text-sm py-3 px-6 rounded-lg transition-colors items-center gap-2 font-medium">
                    Контактирајте нè &rarr;
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 3 -->
<div class="flex flex-col px-6 font-sans justify-center items-center pt-24">
    <p data-aos="fade-up" class="font-light text-[16px] text-[#5B52A3]">ДОЗНАЈ ПОВЕЌЕ ЗА НАС</p>
    <p data-aos="fade-up" class="text-[48px] font-bold ">Зошто SynapseHR?</p>
    <div class="flex space-x-8 pt-7">
        <div data-aos="fade-right" class="w-[350.328125px] h-[300px] flex flex-col  justify-between shadow-[0_8px_16px_#7AB5A866] bg-white py-[43px] px-[36px] rounded-2xl">
            <div class="w-14 h-14 flex items-center justify-center border-2 border-[#E5E7EB] bg-[#eeedf6] rounded-full">
                <i class="fa-solid fa-magnifying-glass text-[#5B52A3]"></i>
            </div>            
            <p class="text-[20px] pt-3 font-semibold">Практичен пристап</p>
            <p class="text-[15px] pt-6 font-light">Нудиме решенија што можат веднаш да се применат во секојдневното работење.</p>
        </div>
        <div data-aos="fade-up" class="w-[350.328125px] h-[300px] flex flex-col  justify-between shadow-[0_8px_16px_#7AB5A866] bg-white py-[43px] px-[36px] rounded-2xl">
            <div class="w-14 h-14 flex items-center border-2 border-[#E5E7EB] justify-center bg-[#f2f7f6] rounded-full">
                <i class="fa-regular fa-lightbulb text-[#7AB5A8] text-[20px] "></i>
            </div>            
            <p class="text-[20px] pt-3 font-semibold">Искуство и експертиза</p>
            <p class="text-[15px] pt-6 font-light">Нашиот тим комбинира HR знаење, бизнис разбирање и практично искуство од различни индустрии.</p>
        </div>
        <div data-aos="fade-left" class="w-[350.328125px] h-[300px] flex flex-col  justify-between shadow-[0_8px_16px_#7AB5A866] bg-white py-[43px] px-[36px] rounded-2xl">
            <div class="w-14 h-14 flex items-center border-2 border-[#E5E7EB] justify-center bg-[#eeedf6] rounded-full">
                <i class="fa-solid fa-wrench text-[20px] text-[#5B52A3]"></i>
            </div>            
            <p class="text-[20px] pt-3 font-semibold">Прилагодени решенија</p>
            <p class="text-[15px] pt-6 font-light">Секоја организација е различна, затоа креираме пристап според вашите цели и потреби.</p>
        </div>
    </div>
</div>
<div data-aos="fade-up" class="px-12 px-6 pt-14">
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
    <div data-aos="fade-right" class="w-1/2 px-14">
        <img src="{{ asset('img/peopleworking.png') }}" />
    </div>
    <div data-aos="fade-left" class="flex flex-col">
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
<div data-aos="fade-up" class="py-12 font-sans flex  bg-cover bg-center" style="background-image: url('{{ asset('img/bg.png') }}')">
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
        <a class="bg-[#7AB5A8] text-white mt-10 w-[245px] text-center rounded-xl px-6 py-4 " href="/academy">Разгледај ја академијата</a>
    </div>
    <div id="desno" class="w-1/2 pl-7 flex flex-col gap-10 justify-center">
        <p class="bg-[#FFFFFF1A] border-2 border-[#FFFFFF33] p-8 w-[552px] font-semibold leading-8 text-[#FFFFFFB2] rounded-2xl">Програмите се дизајнирани за практична примена и долгорочен развој на организациите и тимовите.</p>
        <img class="w-[552px] h-[406px] rounded-2xl" src="{{ asset('img/tablesit.jpg') }}" />
    </div>
</div>

<!-- 6 -->
<section class="px-4 py-16 md:px-8 relative" x-data="{
    openTeamModal: false,
    activeMember: {},
    team: {
        '01': {
            num: '01',
            name: 'Томида Караиванова Алаѓозовска',
            role: 'Експерт за стратегиско управување со човечки ресурси и HR системи',
            desc: 'Експерт за стратегиско управување со човечки ресурси и HR системи, со 20 години искуство во FMCG, производство, телекомуникации, хотелиерство, авио индустрија, градежништво. Работела како корпоративен HR директор на ниво на повеќе држави, со фокус на усогласување на бизнисот и луѓето преку јасни структури, процеси и одлуки. Томида е Стратешки HR консултант и основач на Evolvia.',
            companyBtn: 'Evolvia &rarr;'
        },
        '02': {
            num: '02',
            name: 'Ана Костовска',
            role: 'Организациски психолог и експерт за развој на луѓе и системи',
            desc: 'Организациски психолог со 17+ години искуство во различни индустрии и организациски контексти (телеком, малопродажба, производство). Работи на развој на луѓе и системи, поврзувајќи психологија и менаџмент пракса за создавање стабилни тимови и одржливи резултати. Ана е основач на CSD SONIK, им помага на луѓето и организациите да се развиваат со јасна цел и самодоверба.',
            companyBtn: 'CSD SONIK &rarr;'
        },
        '03': {
            num: '03',
            name: 'Ивана Дојчиновска Стојановиќ',
            role: 'Експерт за организациски дизајн, HR системи и кариерен развој',
            desc: 'Експерт за организациски дизајн, HR системи и кариерен развој, со над 20 години искуство во банкарство и производни системи. Работела на лидерски HR позиции во меѓународни компании, а денес поддржува организации и поединци во развој, трансформација и кариерен раст. Ивана е основач на Prudens Consulting, која со јасен и практичен пристап ги претвора комплексните предизвици во структурирани, одржливи решенија.',
            companyBtn: 'Prudens Consulting &rarr;'
        },
        '04': {
            num: '04',
            name: 'Искра Конеска',
            role: 'HR лидер специјализирана во HRIS, перформанси и организациски развој',
            desc: 'HR лидер со над 20 годишно искуство, специјализирана во HRIS, перформанси и организациски развој. Работела во IT, FMCG и автомобилска индустрија, активно поттикнува иновации и раст на современи HR професионалци. Искра со практичен и иновативен пристап гради системи што го поддржуваат развојот на луѓето, организациската култура и лидерството.',
            companyBtn: '' 
        }
    },
    openMember(id) {
        this.activeMember = this.team[id];
        this.openTeamModal = true;
    }
}">

    <div class="max-w-7xl mx-auto">
        <div class="font-sans flex flex-col items-center">

            <p data-aos="fade-right" class="text-sm text-[#7AB5A8] font-light uppercase tracking-wider mb-2">ПОВЕЌЕ ЗА КОИ СЕ SYNAPSEHR</p>
            <p data-aos="fade-left" class="font-semibold text-3xl md:text-5xl text-[#101828] mb-6 text-center">Нашиот тим</p>
            <p data-aos="fade-right"class="text-base md:text-xl text-[#4A5565] font-light max-w-4xl text-center mb-12">
                SynapseHR е колектив на докажани HR консултанти кои го здружуваат своето долгогодишно корпоративно
                искуство за да понудат системски, стратегиски и практични решенија.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 w-full">
                
                <div data-aos="fade-right" class="bg-white rounded-2xl shadow-[0_6px_16px_#7AB5A866] flex flex-col overflow-hidden">
                    <img class="w-full h-auto object-cover" src="{{ asset('img/tomida.png') }}" alt="Томида" />
                    <div class="p-6 flex flex-col flex-grow">
                        <p class="text-lg font-semibold mb-2">Томида Караиванова Алаѓозовска</p>
                        <p class="text-base text-[#5B52A3] font-light mb-6 flex-grow">Експерт за стратегиско управување со човечки ресурси и HR системи</p>
                        <button @click="openMember('01')" class="text-left text-base font-light text-[#101828] hover:text-[#7AB5A8] transition-colors mt-auto inline-flex items-center gap-1">Прочитај повеќе →</button>
                    </div>
                </div>

                <div data-aos="fade-right" class="bg-white rounded-2xl shadow-[0_6px_16px_#7AB5A866] flex flex-col overflow-hidden">
                    <img class="w-full h-auto object-cover" src="{{ asset('img/ana.png') }}" alt="Ана" />
                    <div class="p-6 flex flex-col flex-grow">
                        <p class="text-lg font-semibold mb-2">Ана Костовска</p>
                        <p class="text-base text-[#5B52A3] font-light mb-6 flex-grow">Организациски психолог и експерт за развој на луѓе и системи</p>
                        <button @click="openMember('02')" class="text-left text-base font-light text-[#101828] hover:text-[#7AB5A8] transition-colors mt-auto inline-flex items-center gap-1">Прочитај повеќе →</button>
                    </div>
                </div>

                <div data-aos="fade-left" class="bg-white rounded-2xl shadow-[0_6px_16px_#7AB5A866] flex flex-col overflow-hidden">
                    <img class="w-full h-auto object-cover" src="{{ asset('img/ivana.png') }}" alt="Ивана" />
                    <div class="p-6 flex flex-col flex-grow">
                        <p class="text-lg font-semibold mb-2">Ивана Дојчиновска Стојановиќ</p>
                        <p class="text-base text-[#5B52A3] font-light mb-6 flex-grow">Експерт за организациски дизајн, HR системи и кариерен развој</p>
                        <button @click="openMember('03')" class="text-left text-base font-light text-[#101828] hover:text-[#7AB5A8] transition-colors mt-auto inline-flex items-center gap-1">Прочитај повеќе →</button>
                    </div>
                </div>

                <div data-aos="fade-left" class="bg-white rounded-2xl shadow-[0_6px_16px_#7AB5A866] flex flex-col overflow-hidden">
                    <img class="w-full h-auto object-cover" src="{{ asset('img/iskra.png') }}" alt="Искра" />
                    <div class="p-6 flex flex-col flex-grow">
                        <p class="text-lg font-semibold mb-2">Искра Конеска</p>
                        <p class="text-base text-[#5B52A3] font-light mb-6 flex-grow">HR лидер специјализирана во HRIS, перформанси и организациски развој</p>
                        <button @click="openMember('04')" class="text-left text-base font-light text-[#101828] hover:text-[#7AB5A8] transition-colors mt-auto inline-flex items-center gap-1">Прочитај повеќе →</button>
                    </div>
                </div>

            </div>

            <p data-aos="fade-up" class="text-[#4A5565] text-base md:text-xl max-w-5xl mt-16 font-light text-center">
                Ова не е само академска теорија пренесена од учебник. Ова е знаење изградено низ реални менаџерски предизвици, трансформации, раст на компании и работа со тимови во комплексни организациски системи, како и бројни консултантски часови.
            </p>
        </div>
    </div>

    <div class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/60 backdrop-blur-sm"
        x-show="openTeamModal" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0" 
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200" 
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" 
        @keydown.escape.window="openTeamModal = false"
        style="display: none;">

        <div class="relative w-full max-w-4xl bg-white rounded-2xl shadow-2xl border-l-[12px] border-[#5B52A3] flex flex-col sm:flex-row p-6 sm:p-8 overflow-hidden"
             @click.away="openTeamModal = false"
             x-show="openTeamModal"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95" 
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-200" 
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95">
            
            <div class="sm:pr-6 mb-4 sm:mb-0">
                <span class="text-5xl font-semibold text-[#7AB5A8]" x-text="activeMember.num"></span>
            </div>
            
            <div class="flex-grow">
                <div class="flex justify-between items-start mb-3">
                    <h3 class="text-xl font-bold text-gray-900" x-text="activeMember.name"></h3>
                    <button @click="openTeamModal = false" class="text-gray-400 hover:text-gray-900 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
                
                <p class="text-sm text-[#4A5565] mb-6 leading-relaxed" x-text="activeMember.desc"></p>
                
                <div class="flex flex-wrap gap-3 items-center">
                    <a href="#" x-show="activeMember.companyBtn" class="bg-[#5B52A3] hover:bg-[#4f4794] text-white text-sm py-2.5 px-6 rounded-lg transition-colors flex items-center gap-2" x-html="activeMember.companyBtn"></a>
                    
                    <a href="#" class="text-[#5B52A3] bg-purple-50 p-2.5 rounded-lg hover:bg-purple-100 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="#" class="border border-gray-300 text-gray-700 hover:bg-gray-50 text-sm py-2.5 px-6 rounded-lg transition-colors">Go to Linkedin</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7 -->
 <section class="py-24 bg-[#F5F7F7] font-sans">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Heading -->
        <div data-aos="fade-up" class="text-center mb-14">
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
            <div data-aos="fade-right" x-data="{ open: true }"
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
            <div data-aos="fade-left" x-data="{ open: false }"
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
            <div data-aos="fade-right" x-data="{ open: false }"
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
            <div data-aos="fade-left" x-data="{ open: false }"
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
            <div data-aos="fade-right" x-data="{ open: false }"
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

 <section data-aos="fade-right" class=" py-12 px-4">
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

<!-- form -->
<div data-aos="fade-left" class="min-h-screen flex items-center justify-center h-[470px]   bg-[#f5f5f5] font-sans py-16 px-6">
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