@extends('layouts.home')

@section('content')
    <!-- 1 -->
    <div
        class="relative flex pt-14 font-sans px-4 sm:px-6 font-light flex-col justify-center items-center overflow-hidden md:overflow-visible">

        <img src="{{ asset('img/elipse1.png') }}" class="hidden md:block absolute top-33 left-34 w-[271px] h-[271px] -z-10" />
        <img src="{{ asset('img/elipse2.png') }}"
            class="hidden md:block absolute bottom-33 right-38 w-[271px] h-[271px] -z-10" />

        <p data-aos="fade-left"
            class="text-[12px] md:text-[14px] text-center text-[#00786F] bg-[#F0FDFA] px-4 md:px-5 py-2 border-[#CBFBF1] border-2 rounded-full z-10">
            ✦ Нудиме целосни, стратешки и практични HR решенија на едно место
        </p>

        <div data-aos="fade-right" class="pt-6 md:pt-5 flex flex-col -space-y-1 sm:-space-y-2 md:-space-y-5 z-10 w-full">
            <p
                class="text-4xl sm:text-5xl md:text-[67px] leading-tight md:leading-normal text-center px-2 md:px-20 font-extrabold text-[#101828]">
                Им помагаме на</p>
            <p
                class="text-4xl sm:text-5xl md:text-[67px] leading-tight md:leading-normal text-center px-2 md:px-20 font-extrabold text-[#101828]">
                организациите да растат</p>
            <p
                class="text-4xl sm:text-5xl md:text-[67px] leading-tight md:leading-normal text-center px-2 md:px-20 font-extrabold bg-gradient-to-r from-[#5B52A3] to-[#7AB5A8] bg-clip-text text-transparent pb-2 md:pb-0">
                преку луѓето</p>
        </div>

        <p data-aos="fade-left"
            class="pt-6 md:pt-5 text-center text-base md:text-[20px] text-[#4A5565] max-w-3xl z-10 leading-relaxed">
            Ги поддржуваме компаниите да изградат силни тимови, ефективно лидерство и <br class="hidden md:block" />HR
            процеси што носат долгорочни резултати.
        </p>

        <div data-aos="fade-right" class="flex flex-col sm:flex-row gap-4 sm:gap-5 pt-8 md:pt-12 z-10 w-full sm:w-auto">
            <a href="#contact-section"
                class="bg-[#5B52A3] text-center rounded-xl px-9 text-white py-3 md:py-2 transition-colors hover:bg-[#4a4386] inline-block">Контактирајте
                нѐ →</a> <a href="#services-section"
                class="border-2 text-center bg-white border-[#D1D5DC] rounded-xl px-4 py-3 md:py-2 text-[#101828] font-medium transition-colors hover:bg-gray-50">Пребарајте
                услуги</a>
        </div>

    </div>

    <!-- 2 -->
    <section id="services-section" class="relative font-sans py-16 px-4 md:px-8 max-w-7xl mx-auto" x-data="{
        openServiceModal: false,
        activeService: {},
        services: {
            '01': {
                num: '01',
                title: 'Стратегиски HR',
                desc: `Опфаќа: развој на стратегии за човечки recursos, градење и менторство на HR тимови, организациски дизајн, систематизација на улоги и одговорности, поставување на HR политики и процеси, како и развој на HR KPI и People Analytics рамки.<br><br>
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
                <p class="text-[#4A5565] font-light text-lg md:text-[20px] leading-relaxed">Ги поврзуваме бизнис целите со
                    HR практиките за создавање усогласени, стабилни и успешни тимови.</p>
            </div>

            <div @click="openModal('01')" data-aos="fade-up" class="group cursor-pointer block h-full">
                <div
                    class="h-full bg-white p-8 rounded-3xl shadow-[0_6px_16px_#5B52A315] flex flex-col justify-between gap-4 transition-all duration-300 ease-out origin-center group-hover:-rotate-2 group-hover:-translate-y-2 group-hover:shadow-2xl group-hover:bg-[#5B52A3]">
                    <div>
                        <p
                            class="text-[20px] font-semibold text-[#101828] mb-3 group-hover:text-white transition-colors duration-300">
                            Стратегиски HR и организациски развој</p>
                        <p
                            class="text-[15px] font-light text-[#4A5565] group-hover:text-white/90 transition-colors duration-300">
                            Ги усогласуваме HR процесите со растот на компанијата преку современи стратегии, структури и
                            системи.</p>
                    </div>
                    <p
                        class="text-[14px] font-semibold text-[#101828] mt-4 group-hover:text-white transition-colors duration-300">
                        Прочитај повеќе →</p>
                </div>
            </div>

            <div @click="openModal('02')" data-aos="fade-left" class="group cursor-pointer block h-full">
                <div
                    class="h-full bg-white p-8 rounded-3xl shadow-[0_6px_16px_#5B52A315] flex flex-col justify-between gap-4 transition-all duration-300 ease-out origin-center group-hover:-rotate-2 group-hover:-translate-y-2 group-hover:shadow-2xl group-hover:bg-[#7AB5A8]">
                    <div>
                        <p
                            class="text-[20px] font-semibold text-[#101828] mb-3 group-hover:text-white transition-colors duration-300">
                            Менаџирање со перформанси</p>
                        <p
                            class="text-[15px] font-light text-[#4A5565] group-hover:text-white/90 transition-colors duration-300">
                            Поставување и каскадирање на цели, оценка на учинок, KPI и фидбек</p>
                    </div>
                    <p
                        class="text-[14px] font-semibold text-[#101828] mt-4 group-hover:text-white transition-colors duration-300">
                        Прочитај повеќе →</p>
                </div>
            </div>

            <div @click="openModal('03')" data-aos="fade-right" class="group cursor-pointer block h-full">
                <div
                    class="h-full bg-white p-8 rounded-3xl shadow-[0_6px_16px_#5B52A315] flex flex-col justify-between gap-4 transition-all duration-300 ease-out origin-center group-hover:-rotate-2 group-hover:-translate-y-2 group-hover:shadow-2xl group-hover:bg-[#5B52A3]">
                    <div>
                        <p
                            class="text-[20px] font-semibold text-[#101828] mb-3 group-hover:text-white transition-colors duration-300">
                            Развој на вработени <br />и кариера</p>
                        <p
                            class="text-[15px] font-light text-[#4A5565] group-hover:text-white/90 transition-colors duration-300">
                            Развиваме лидери и тимови преку практични програми, обуки и алатки што создаваат реален импакт.
                        </p>
                    </div>
                    <p
                        class="text-[14px] font-semibold text-[#101828] mt-4 group-hover:text-white transition-colors duration-300">
                        Прочитај повеќе →</p>
                </div>
            </div>

            <div @click="openModal('04')" data-aos="fade-up" class="group cursor-pointer block h-full">
                <div
                    class="h-full bg-white p-8 rounded-3xl shadow-[0_6px_16px_#5B52A315] flex flex-col justify-between gap-4 transition-all duration-300 ease-out origin-center group-hover:-rotate-2 group-hover:-translate-y-2 group-hover:shadow-2xl group-hover:bg-[#7AB5A8]">
                    <div>
                        <p
                            class="text-[20px] font-semibold text-[#101828] mb-3 group-hover:text-white transition-colors duration-300">
                            Менторство и обуки</p>
                        <p
                            class="text-[15px] font-light text-[#4A5565] group-hover:text-white/90 transition-colors duration-300">
                            Обуки за менаџери, HR академии, менторство, развој на лидерски и HR компетенции, градење
                            професионални заедници</p>
                    </div>
                    <p
                        class="text-[14px] font-semibold text-[#101828] mt-4 group-hover:text-white transition-colors duration-300">
                        Прочитај повеќе →</p>
                </div>
            </div>

            <div @click="openModal('05')" data-aos="fade-left" class="group cursor-pointer block h-full">
                <div
                    class="h-full bg-white p-8 rounded-3xl shadow-[0_6px_16px_#5B52A315] flex flex-col justify-between gap-4 transition-all duration-300 ease-out origin-center group-hover:-rotate-2 group-hover:-translate-y-2 group-hover:shadow-2xl group-hover:bg-[#5B52A3]">
                    <div>
                        <p
                            class="text-[20px] font-semibold text-[#101828] mb-3 group-hover:text-white transition-colors duration-300">
                            HR решенија по мерка</p>
                        <p
                            class="text-[15px] font-light text-[#4A5565] group-hover:text-white/90 transition-colors duration-300">
                            Преку анализа, заедничко дефинирање на приоритети и дизајн создаваме фокусирани и применливи
                            решенија</p>
                    </div>
                    <p
                        class="text-[14px] font-semibold text-[#101828] mt-4 group-hover:text-white transition-colors duration-300">
                        Прочитај повеќе →</p>
                </div>
            </div>

        </div>

        <div class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/60 backdrop-blur-sm"
            x-show="openServiceModal" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" @keydown.escape.window="openServiceModal = false" style="display: none;">

            <div class="relative w-full max-w-4xl bg-white rounded-2xl shadow-2xl border-l-[12px] border-[#5B52A3] flex flex-col sm:flex-row p-6 sm:p-8 overflow-hidden"
                @click.away="openServiceModal = false" x-show="openServiceModal"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">

                <div class="sm:pr-6 mb-4 sm:mb-0">
                    <span class="text-5xl font-semibold text-[#7AB5A8]" x-text="activeService.num"></span>
                </div>

                <div class="flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold text-[#101828]" x-text="activeService.title"></h3>
                        <button @click="openServiceModal = false"
                            class="text-gray-400 hover:text-[#101828] transition-colors">
                            <svg class="w-6 h-6 hover:cursor-pointer" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <p class="text-sm text-[#4A5565] mb-8 leading-relaxed" x-html="activeService.desc"></p>

                    <a href="#contact-section"
                        class="inline-flex bg-[#5B52A3] hover:bg-[#4f4794] text-white text-sm py-3 px-6 rounded-lg transition-colors items-center gap-2 font-medium">
                        Контактирајте нè &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 3 -->
    <div class="flex flex-col px-4 sm:px-6 font-sans justify-center items-center pt-12 max-w-7xl mx-auto">
        <p data-aos="fade-up" class="font-semibold text-sm md:text-[16px] text-[#5B52A3] tracking-wider uppercase mb-2">
            ДОЗНАЈ ПОВЕЌЕ ЗА НАС
        </p>

        <p data-aos="fade-up" class="text-3xl sm:text-4xl md:text-[48px] font-bold text-[#101828] text-center">
            Зошто SynapseHR?
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 pt-8 w-full items-stretch">

            <div
                class="hover:scale-105 transition-all duration-500 ease-in-out w-full min-h-[260px] md:h-[300px] flex flex-col justify-between shadow-[0_8px_16px_#7AB5A833] bg-white py-8 px-6 md:py-[43px] md:px-[36px] rounded-2xl">
                <div>
                    <div
                        class="w-14 h-14 flex items-center justify-center border-2 border-[#E5E7EB] bg-[#eeedf6] rounded-full">
                        <i class="fa-solid fa-magnifying-glass text-[#5B52A3] text-lg"></i>
                    </div>
                    <p class="text-xl pt-4 font-semibold text-[#101828]">Практичен пристап</p>
                </div>
                <p class="text-[15px] pt-4 font-light text-[#4A5565] leading-relaxed">Нудиме решенија што можат веднаш да
                    се применат во секојдневното работење.</p>
            </div>

            <div
                class="hover:scale-105 transition-all duration-500 ease-in-out w-full min-h-[260px] md:h-[300px] flex flex-col justify-between shadow-[0_8px_16px_#7AB5A833] bg-white py-8 px-6 md:py-[43px] md:px-[36px] rounded-2xl">
                <div>
                    <div
                        class="w-14 h-14 flex items-center border-2 border-[#E5E7EB] justify-center bg-[#f2f7f6] rounded-full">
                        <i class="fa-regular fa-lightbulb text-[#7AB5A8] text-xl"></i>
                    </div>
                    <p class="text-xl pt-4 font-semibold text-[#101828]">Искуство и експертиза</p>
                </div>
                <p class="text-[15px] pt-4 font-light text-[#4A5565] leading-relaxed">Нашиот тим комбинира HR знаење,
                    бизнис разбирање и практично искуство од различни индустрии.</p>
            </div>

            <div
                class="hover:scale-105 transition-all duration-500 ease-in-out w-full min-h-[260px] md:h-[300px] flex flex-col justify-between shadow-[0_8px_16px_#7AB5A833] bg-white py-8 px-6 md:py-[43px] md:px-[36px] rounded-2xl">
                <div>
                    <div
                        class="w-14 h-14 flex items-center border-2 border-[#E5E7EB] justify-center bg-[#eeedf6] rounded-full">
                        <i class="fa-solid fa-wrench text-lg text-[#5B52A3]"></i>
                    </div>
                    <p class="text-xl pt-4 font-semibold text-[#101828]">Прилагодени решенија</p>
                </div>
                <p class="text-[15px] pt-4 font-light text-[#4A5565] leading-relaxed">Секоја организација е различна, затоа
                    креираме пристап според вашите цели и потреби.</p>
            </div>

        </div>
    </div>

    <div data-aos="fade-up" class="px-4 sm:px-6 md:px-12 pt-14 max-w-7xl mx-auto w-full">
        <div
            class="relative px-6 py-8 md:px-12 md:py-11 bg-gradient-to-r font-sans font-light from-[#5B52A3] to-[#7AB5A8] text-white rounded-3xl flex flex-col gap-3 overflow-hidden">

            <div
                class="absolute right-4 top-4 md:right-12 md:top-1/2 md:-translate-y-1/2 w-12 h-12 md:w-16 md:h-16 flex items-center justify-center bg-white/20 rounded-full backdrop-blur-sm">
                <i class="fa-solid fa-user-group text-lg md:text-[22px]"></i>
            </div>

            <p class="text-xl md:text-[30px] font-medium leading-tight max-w-[85%] md:max-w-[75%]">
                Компании од различни индустрии нѝ веруваат
            </p>
            <p class="text-sm md:text-[16px] w-full md:w-[85%] leading-relaxed text-white/90">
                кога треба да изградат јасна структура, функционални процеси и организациска култура што поддржува стабилен
                и одржлив раст. Без разлика дали се работи за конкретен предизвик или поширока трансформација, ние ја
                избираме и вклучуваме најсоодветната експертиза од нашиот тим и мрежа на партнери.
            </p>
        </div>
    </div>

    <!-- 4 -->
    <div
        class="flex flex-col-reverse lg:flex-row px-4 sm:px-6 font-sans items-center pt-12 pb-16 lg:pt-22 lg:pb-24 max-w-7xl mx-auto gap-12 lg:gap-0">

        <div data-aos="fade-right" class="w-full lg:w-1/2 px-4 lg:px-14 flex justify-center">
            <img src="{{ asset('img/peopleworking.png') }}" class="max-w-full h-auto" alt="People working" />
        </div>

        <div data-aos="fade-left"
            class="w-full lg:w-1/2 flex flex-col items-center lg:items-start text-center lg:text-left">
            <p class="text-[14px] font-semibold text-[#5B52A3] tracking-wider">КАКО РАБОТИМЕ?</p>
            <p class="font-bold text-3xl sm:text-4xl lg:text-[36px] pt-2 text-[#101828]">Принципи на работа</p>

            <div class="flex flex-col sm:flex-row gap-6 pt-9 w-full justify-center lg:justify-start">

                <div id="levo" class="flex flex-col gap-6 w-full sm:w-auto">

                    <div
                        class="w-full sm:w-[285px] min-h-[175px] flex flex-col justify-between shadow-[0_8px_16px_#7AB5A840] bg-white px-6 py-5 rounded-2xl text-left transition-transform duration-300 hover:-translate-y-1">
                        <div class="w-[40px] h-[40px] flex items-center bg-[#5B52A31A] justify-center rounded-full">
                            <i class="fa-regular fa-lightbulb text-[20px] text-[#5B52A3]"></i>
                        </div>
                        <p class="text-[14px] font-semibold text-[#101828] pt-3">Јасност пред комплексност</p>
                        <p class="text-[12px] font-light text-[#4A5565] pt-1">Секое решение мора да биде разбирливо,
                            структурирано и применливо.</p>
                    </div>

                    <div
                        class="w-full sm:w-[285px] min-h-[175px] flex flex-col justify-between shadow-[0_8px_16px_#7AB5A840] bg-white px-6 py-5 rounded-2xl text-left transition-transform duration-300 hover:-translate-y-1">
                        <div class="w-[40px] h-[40px] flex items-center justify-center bg-[#7AB5A81A] rounded-full">
                            <i class="fa-solid fa-screwdriver-wrench text-[18px] text-[#7AB5A8]"></i>
                        </div>
                        <p class="text-[14px] font-semibold text-[#101828] pt-3">Практична вредност</p>
                        <p class="text-[12px] font-light text-[#4A5565] pt-1">Сè што развиваме мора да функционира во
                            секојдневната работа.</p>
                    </div>

                    <div
                        class="w-full sm:w-[285px] min-h-[175px] flex flex-col justify-between shadow-[0_8px_16px_#7AB5A840] bg-white px-6 py-5 rounded-2xl text-left transition-transform duration-300 hover:-translate-y-1">
                        <div class="w-[40px] h-[40px] flex items-center justify-center bg-[#5B52A31A] rounded-full">
                            <i class="fa-solid fa-puzzle-piece text-[18px] text-[#5B52A3]"></i>
                        </div>
                        <p class="text-[14px] font-semibold text-[#101828] pt-3">Ко-креирање со клиентот</p>
                        <p class="text-[12px] font-light text-[#4A5565] pt-1">Најдобрите решенија ги создаваме во тесна
                            соработка со клиентот.</p>
                    </div>
                </div>

                <div id="desno" class="flex flex-col gap-6 w-full sm:w-auto">

                    <div
                        class="w-full sm:w-[285px] min-h-[175px] flex flex-col justify-between shadow-[0_8px_16px_#7AB5A840] bg-white px-6 py-5 rounded-2xl text-left transition-transform duration-300 hover:-translate-y-1">
                        <div class="w-[40px] h-[40px] flex items-center justify-center bg-[#7AB5A81A] rounded-full">
                            <i class="fa-solid fa-book-open text-[18px] text-[#7AB5A8]"></i>
                        </div>
                        <p class="text-[14px] font-semibold text-[#101828] pt-3">Фокус на резултати</p>
                        <p class="text-[12px] font-light text-[#4A5565] pt-1">Не мериме активности – мериме влијание врз
                            бизнисот и луѓето.</p>
                    </div>

                    <div
                        class="w-full sm:w-[285px] min-h-[175px] flex flex-col justify-between shadow-[0_8px_16px_#7AB5A840] bg-white px-6 py-5 rounded-2xl text-left transition-transform duration-300 hover:-translate-y-1">
                        <div class="w-[40px] h-[40px] flex items-center justify-center bg-[#5B52A31A] rounded-full">
                            <i class="fa-regular fa-handshake text-[18px] text-[#5B52A3]"></i>
                        </div>
                        <p class="text-[14px] font-semibold text-[#101828] pt-3">Доверба и интегритет</p>
                        <p class="text-[12px] font-light text-[#4A5565] pt-1">Работиме транспарентно, професионално и со
                            целосна посветеност на клиентот.</p>
                    </div>

                    <div
                        class="w-full sm:w-[285px] min-h-[175px] flex flex-col justify-between shadow-[0_8px_16px_#7AB5A840] bg-white px-6 py-5 rounded-2xl text-left transition-transform duration-300 hover:-translate-y-1">
                        <div class="w-[40px] h-[40px] flex items-center justify-center bg-[#7AB5A81A] rounded-full">
                            <i class="fa-solid fa-leaf text-[18px] text-[#7AB5A8]"></i>
                        </div>
                        <p class="text-[14px] font-semibold text-[#101828] pt-3">Одржливост</p>
                        <p class="text-[12px] font-light text-[#4A5565] pt-1">Градиме системи што остануваат и
                            функционираат и по завршување на соработката.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 5 -->
    <div data-aos="fade-up" class="py-12 lg:py-20 font-sans flex flex-col lg:flex-row bg-cover bg-center gap-12 lg:gap-0"
        style="background-image: url('{{ asset('img/bg.png') }}')">

        <div id="levo" class="w-full lg:w-1/2 px-6 sm:px-12 lg:pl-36 lg:pr-8 flex flex-col justify-center">
            <p
                class="bg-[#FFFFFF1A] text-white font-light text-[14px] border-[#FFFFFF33] border-2 rounded-full w-[220px] px-3 py-2 text-center">
                🎓 Континуирано учење
            </p>

            <div
                class="text-4xl sm:text-5xl lg:text-[48px] pt-5 text-white font-bold flex flex-col -space-y-1 sm:-space-y-2 lg:space-y-2">
                <p>Школа за</p>
                <p>менаџирање</p>
                <p>со луѓе</p>
            </div>

            <p class="text-base sm:text-[18px] text-[#FFFFFFE5] font-light pt-6 leading-relaxed max-w-xl">
                Практична програма за развој на менаџери, лидери и HR професионалци преку современи алатки, реални сценарија
                и применливо знаење.
            </p>

            <div class="flex flex-col gap-3 pt-6 text-[#FFFFFFF2] font-light text-sm sm:text-base">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('img/check.png') }}" class="w-[22px] h-[22px] shrink-0" alt="Check icon" />
                    <p>Практична и интерактивна програма</p>
                </div>
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('img/check.png') }}" class="w-[22px] h-[22px] shrink-0" alt="Check icon" />
                    <p>Практична и интерактивна програма</p>
                </div>
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('img/check.png') }}" class="w-[22px] h-[22px] shrink-0" alt="Check icon" />
                    <p>Практична и интерактивна програма</p>
                </div>
                <div class="flex items-center space-x-3 font-normal">
                    <img src="{{ asset('img/check.png') }}" class="w-[22px] h-[22px] shrink-0" alt="Check icon" />
                    <p>Практична и интерактивна програма</p>
                </div>
            </div>

            <a class="bg-[#7AB5A8] text-white mt-8 w-full sm:w-[245px] text-center rounded-xl px-6 py-4 font-medium transition-colors hover:bg-[#699e92]"
                href="/academy">
                Разгледај ја академијата
            </a>
        </div>

        <div id="desno"
            class="w-full lg:w-1/2 px-6 sm:px-12 lg:pl-7 lg:pr-36 flex flex-col gap-6 sm:gap-8 justify-center items-center lg:items-start">
            <p
                class="bg-[#FFFFFF1A] border-2 border-[#FFFFFF33] p-6 sm:p-8 w-full max-w-[552px] font-semibold text-sm sm:text-base leading-relaxed sm:leading-8 text-[#FFFFFFB2] rounded-2xl">
                Програмите се дизајнирани за практична примена и долгорочен развој на организациите и тимовите.
            </p>

            <img class="w-full max-w-[552px] h-auto md:h-[406px] object-cover rounded-2xl shadow-lg"
                src="{{ asset('img/tablesit.jpg') }}" alt="Academy training Session" />
        </div>

    </div>

    <!-- 6 -->
    <section id="about-section" class="px-4 py-16 md:px-8 relative" x-data="{
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

                <p data-aos="fade-right" class="text-sm text-[#7AB5A8] font-light uppercase tracking-wider mb-2">ПОВЕЌЕ ЗА
                    КОИ СЕ SYNAPSEHR</p>
                <p data-aos="fade-left" class="font-semibold text-3xl md:text-5xl text-[#101828] mb-6 text-center">Нашиот
                    тим</p>
                <p data-aos="fade-right"class="text-base md:text-xl text-[#4A5565] font-light max-w-4xl text-center mb-12">
                    SynapseHR е колектив на докажани HR консултанти кои го здружуваат своето долгогодишно корпоративно
                    искуство за да понудат системски, стратегиски и практични решенија.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 w-full">

                    <div data-aos="fade-right"
                        class="bg-white rounded-2xl shadow-[0_6px_16px_#7AB5A866] flex flex-col overflow-hidden">
                        <img class="w-full h-auto object-cover" src="{{ asset('img/tomida.png') }}" alt="Томида" />
                        <div class="p-6 flex flex-col flex-grow">
                            <p class="text-lg font-semibold mb-2">Томида Караиванова Алаѓозовска</p>
                            <p class="text-base text-[#5B52A3] font-light mb-6 flex-grow">Експерт за стратегиско управување
                                со човечки ресурси и HR системи</p>
                            <button @click="openMember('01')"
                                class="text-left text-base font-light text-[#101828] hover:text-[#7AB5A8] transition-colors mt-auto inline-flex items-center gap-1">Прочитај
                                повеќе →</button>
                        </div>
                    </div>

                    <div data-aos="fade-right"
                        class="bg-white rounded-2xl shadow-[0_6px_16px_#7AB5A866] flex flex-col overflow-hidden">
                        <img class="w-full h-auto object-cover" src="{{ asset('img/ana.png') }}" alt="Ана" />
                        <div class="p-6 flex flex-col flex-grow">
                            <p class="text-lg font-semibold mb-2">Ана Костовска</p>
                            <p class="text-base text-[#5B52A3] font-light mb-6 flex-grow">Организациски психолог и експерт
                                за развој на луѓе и системи</p>
                            <button @click="openMember('02')"
                                class="text-left text-base font-light text-[#101828] hover:text-[#7AB5A8] transition-colors mt-auto inline-flex items-center gap-1">Прочитај
                                повеќе →</button>
                        </div>
                    </div>

                    <div data-aos="fade-left"
                        class="bg-white rounded-2xl shadow-[0_6px_16px_#7AB5A866] flex flex-col overflow-hidden">
                        <img class="w-full h-auto object-cover" src="{{ asset('img/ivana.png') }}" alt="Ивана" />
                        <div class="p-6 flex flex-col flex-grow">
                            <p class="text-lg font-semibold mb-2">Ивана Дојчиновска Стојановиќ</p>
                            <p class="text-base text-[#5B52A3] font-light mb-6 flex-grow">Експерт за организациски дизајн,
                                HR системи и кариерен развој</p>
                            <button @click="openMember('03')"
                                class="text-left text-base font-light text-[#101828] hover:text-[#7AB5A8] transition-colors mt-auto inline-flex items-center gap-1">Прочитај
                                повеќе →</button>
                        </div>
                    </div>

                    <div data-aos="fade-left"
                        class="bg-white rounded-2xl shadow-[0_6px_16px_#7AB5A866] flex flex-col overflow-hidden">
                        <img class="w-full h-auto object-cover" src="{{ asset('img/iskra.png') }}" alt="Искра" />
                        <div class="p-6 flex flex-col flex-grow">
                            <p class="text-lg font-semibold mb-2">Искра Конеска</p>
                            <p class="text-base text-[#5B52A3] font-light mb-6 flex-grow">HR лидер специјализирана во HRIS,
                                перформанси и организациски развој</p>
                            <button @click="openMember('04')"
                                class="text-left text-base font-light text-[#101828] hover:text-[#7AB5A8] transition-colors mt-auto inline-flex items-center gap-1">Прочитај
                                повеќе →</button>
                        </div>
                    </div>

                </div>

                <p data-aos="fade-up" class="text-[#4A5565] text-base md:text-xl max-w-5xl mt-16 font-light text-center">
                    Ова не е само академска теорија пренесена од учебник. Ова е знаење изградено низ реални менаџерски
                    предизвици, трансформации, раст на компании и работа со тимови во комплексни организациски системи, како
                    и бројни консултантски часови.
                </p>
            </div>
        </div>

        <div class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/60 backdrop-blur-sm"
            x-show="openTeamModal" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" @keydown.escape.window="openTeamModal = false" style="display: none;">

            <div class="relative w-full max-w-4xl bg-white rounded-2xl shadow-2xl border-l-[12px] border-[#5B52A3] flex flex-col sm:flex-row p-6 sm:p-8 overflow-hidden"
                @click.away="openTeamModal = false" x-show="openTeamModal"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">

                <div class="sm:pr-6 mb-4 sm:mb-0">
                    <span class="text-5xl font-semibold text-[#7AB5A8]" x-text="activeMember.num"></span>
                </div>

                <div class="flex-grow">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-gray-900" x-text="activeMember.name"></h3>
                        <button @click="openTeamModal = false"
                            class="text-gray-400 hover:cursor-pointer hover:text-gray-900 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <p class="text-sm text-[#4A5565] mb-6 leading-relaxed" x-text="activeMember.desc"></p>

                    <div class="flex flex-wrap gap-3 items-center">

                        <a href="#"
                            class="border border-gray-300 text-gray-700 hover:bg-gray-50 text-sm py-2.5 px-6 rounded-lg transition-colors">Go
                            to Linkedin</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7 -->
    <section class="py-12 md:py-24 bg-[#F5F7F7] font-sans">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">

            <div data-aos="fade-up" class="text-center mb-10 md:mb-14">
                <h2 class="text-3xl md:text-[40px] font-bold text-[#0D1730] leading-tight">
                    Често поставувани прашања
                </h2>
                <p class="mt-2 text-[#4A5565] text-base md:text-[20px] font-light">
                    Имаме одговор на вашите најчести прашања
                </p>
            </div>

            <div class="space-y-4 md:space-y-6 flex flex-col items-center w-full">

                <div data-aos="fade-right" x-data="{ open: true }"
                    class="bg-white w-full max-w-[830px] rounded-[24px] md:rounded-[30px] shadow-[0_6px_18px_#0000001A] border border-[#E9EEEE] overflow-hidden transition-all duration-300">
                    <button @click="open = !open"
                        class="w-full px-5 py-5 md:px-10 md:py-6 flex items-center hover:cursor-pointer justify-between text-left gap-4">
                        <span class="text-base md:text-[20px] font-bold text-[#0D1730] leading-snug">
                            1. Кога е вистинско време да ангажираме HR консултант?
                        </span>
                        <div
                            class="w-[30px] h-[30px] rounded-full bg-gradient-to-b from-[#7567D8] to-[#7FC8B8] flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white transition duration-300"
                                :class="open ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div x-show="open" x-transition class="px-5 pb-6 md:px-10 md:pb-8">
                        <p class="text-sm md:text-[18px] leading-relaxed font-light text-[#4A5565]">
                            Кога чувствувате дека организацијата расте побрзо од структурата, кога има нејасни улоги, пад на
                            перформанси или пред трансформации.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-left" x-data="{ open: false }"
                    class="bg-white w-full max-w-[830px] rounded-[24px] md:rounded-[30px] shadow-[0_6px_18px_#0000001A] border border-[#E9EEEE] overflow-hidden transition-all duration-300">
                    <button @click="open = !open"
                        class="w-full px-5 py-5 md:px-10 md:py-6 flex items-center hover:cursor-pointer justify-between text-left gap-4">
                        <span class="text-base md:text-[20px] font-bold text-[#0D1730] leading-snug">
                            2. Дали ни треба HR консултант ако веќе имаме HR тим?
                        </span>
                        <div
                            class="w-[30px] h-[30px] rounded-full bg-gradient-to-b from-[#7567D8] to-[#7FC8B8] flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white transition duration-300"
                                :class="open ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div x-show="open" x-transition class="px-5 pb-6 md:px-10 md:pb-8">
                        <p class="text-sm md:text-[18px] leading-relaxed font-light text-[#4A5565]">
                            Да – најчесто работиме како поддршка на постоечки HR тимови. Носиме надворешна перспектива и
                            дополнителна експертиза.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-right" x-data="{ open: false }"
                    class="bg-white w-full max-w-[830px] rounded-[24px] md:rounded-[30px] shadow-[0_6px_18px_#0000001A] border border-[#E9EEEE] overflow-hidden transition-all duration-300">
                    <button @click="open = !open"
                        class="w-full px-5 py-5 md:px-10 md:py-6 flex items-center hover:cursor-pointer justify-between text-left gap-4">
                        <span class="text-base md:text-[20px] font-bold text-[#0D1730] leading-snug">
                            3. Колку време трае една HR интервенција?
                        </span>
                        <div
                            class="w-[30px] h-[30px] rounded-full bg-gradient-to-b from-[#7567D8] to-[#7FC8B8] flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white transition duration-300"
                                :class="open ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div x-show="open" x-transition class="px-5 pb-6 md:px-10 md:pb-8">
                        <p class="text-sm md:text-[18px] leading-relaxed font-light text-[#4A5565]">
                            Зависи од обемот – од неколку недели (за специфични решенија) до неколку месеци (за системски
                            промени).
                        </p>
                    </div>
                </div>

                <div data-aos="fade-left" x-data="{ open: false }"
                    class="bg-white w-full max-w-[830px] rounded-[24px] md:rounded-[30px] shadow-[0_6px_18px_#0000001A] border border-[#E9EEEE] overflow-hidden transition-all duration-300">
                    <button @click="open = !open"
                        class="w-full px-5 py-5 md:px-10 md:py-6 flex items-center hover:cursor-pointer justify-between text-left gap-4">
                        <span class="text-base md:text-[20px] font-bold text-[#0D1730] leading-snug">
                            4. Дали работите со мали компании или само со големи системи?
                        </span>
                        <div
                            class="w-[30px] h-[30px] rounded-full bg-gradient-to-b from-[#7567D8] to-[#7FC8B8] flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white transition duration-300"
                                :class="open ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div x-show="open" x-transition class="px-5 pb-6 md:px-10 md:pb-8">
                        <p class="text-sm md:text-[18px] leading-relaxed font-light text-[#4A5565]">
                            Работиме со компании од различна големина – од растечки бизниси до комплексни организации.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-right" x-data="{ open: false }"
                    class="bg-white w-full max-w-[830px] rounded-[24px] md:rounded-[30px] shadow-[0_6px_18px_#0000001A] border border-[#E9EEEE] overflow-hidden transition-all duration-300">
                    <button @click="open = !open"
                        class="w-full px-5 py-5 md:px-10 md:py-6 flex items-center hover:cursor-pointer justify-between text-left gap-4">
                        <span class="text-base md:text-[20px] font-bold text-[#0D1730] leading-snug">
                            5. Дали нудите обуки за менаџери и тимови?
                        </span>
                        <div
                            class="w-[30px] h-[30px] rounded-full bg-gradient-to-b from-[#7567D8] to-[#7FC8B8] flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white transition duration-300"
                                :class="open ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div x-show="open" x-transition class="px-5 pb-6 md:px-10 md:pb-8">
                        <p class="text-sm md:text-[18px] leading-relaxed font-light text-[#4A5565]">
                            Да – обуките се практични, интерактивни и директно поврзани со реалните предизвици во
                            организацијата.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-left" x-data="{ open: false }"
                    class="bg-white w-full max-w-[830px] rounded-[24px] md:rounded-[30px] shadow-[0_6px_18px_#0000001A] border border-[#E9EEEE] overflow-hidden transition-all duration-300">
                    <button @click="open = !open"
                        class="w-full px-5 py-5 md:px-10 md:py-6 flex items-center hover:cursor-pointer justify-between text-left gap-4">
                        <span class="text-base md:text-[20px] font-bold text-[#0D1730] leading-snug">
                            6. Дали помагате при организациски промени или трансформации?
                        </span>
                        <div
                            class="w-[30px] h-[30px] rounded-full bg-gradient-to-b from-[#7567D8] to-[#7FC8B8] flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white transition duration-300"
                                :class="open ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div x-show="open" x-transition class="px-5 pb-6 md:px-10 md:pb-8">
                        <p class="text-sm md:text-[18px] leading-relaxed font-light text-[#4A5565]">
                            Да – поддржуваме компании во редизајн на структура, улоги, процеси и култура за да се овозможи
                            успешна трансформација.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-right" x-data="{ open: false }"
                    class="bg-white w-full max-w-[830px] rounded-[24px] md:rounded-[30px] shadow-[0_6px_18px_#0000001A] border border-[#E9EEEE] overflow-hidden transition-all duration-300">
                    <button @click="open = !open"
                        class="w-full px-5 py-5 md:px-10 md:py-6 flex items-center hover:cursor-pointer justify-between text-left gap-4">
                        <span class="text-base md:text-[20px] font-bold text-[#0D1730] leading-snug">
                            7. Ќе треба ли многу ангажман од наша страна?
                        </span>
                        <div
                            class="w-[30px] h-[30px] rounded-full bg-gradient-to-b from-[#7567D8] to-[#7FC8B8] flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white transition duration-300"
                                :class="open ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div x-show="open" x-transition class="px-5 pb-6 md:px-10 md:pb-8">
                        <p class="text-sm md:text-[18px] leading-relaxed font-light text-[#4A5565]">
                            Ќе треба вклученост – но насочена и ефективна. Ние ја водиме структурата и процесот, а од вас ни
                            требаат клучни информации и одлуки.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

 <section id="events-section" class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        
        <p class="text-sm font-semibold tracking-wide text-indigo-600 uppercase">СОВЕТИ И НОВОСТИ</p>
        <h2 class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl">Што е ново?</h2>
        <h3 class="mt-2 text-3xl font-bold text-slate-500">
            Што говорат експертите во <span class="text-teal-600">SynapseHR?</span>
        </h3>

        <!-- Filter Buttons -->
        <div class="mt-8 flex justify-center space-x-4">
            <button onclick="sortEvents('date-desc')" data-type="date-desc" class="filter-btn px-6 py-2 rounded-full text-sm font-medium transition shadow-sm bg-white text-black border border-gray-200 font-semibold">Најново</button>
            <button onclick="sortEvents('date-asc')" data-type="date-asc" class="filter-btn px-6 py-2 rounded-full text-sm font-medium transition shadow-sm bg-gray-100 text-gray-600 hover:bg-gray-200">Најстаро</button>
            <button onclick="sortEvents('views-desc')" data-type="views-desc" class="filter-btn px-6 py-2 rounded-full text-sm font-medium transition shadow-sm bg-gray-100 text-gray-600 hover:bg-gray-200">Најактуелно</button>
        </div>

        <!-- Events Grid -->
        <div id="events-grid" class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3 text-left">
            @foreach($events as $event)
                <div class="event-card flex flex-col rounded-3xl shadow-lg overflow-hidden bg-white border border-gray-100 transition duration-300 hover:shadow-xl"
                     data-date="{{ $event->created_at->timestamp }}" 
                     data-views="{{ $event->views }}">
                    
                    <div class="relative h-48 w-full bg-gray-200">
                        @if($event->image)
                            <img class="h-full w-full object-cover" src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}">
                        @endif
                        <span class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-xs font-bold tracking-wider text-gray-700 px-3 py-1 rounded-md uppercase">
                            {{ $event->badge }}
                        </span>
                    </div>

                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-gray-900 leading-snug">{{ $event->title }}</h4>
                            <p class="mt-3 text-sm text-gray-500 line-clamp-3">{{ $event->description }}</p>
                        </div>
                        <div class="mt-6">
                            @if($event->action_type === 'external')
                                <a href="{{ $event->action_url }}" target="_blank" rel="noopener noreferrer" onclick="trackView({{ $event->id }})" class="inline-flex items-center text-sm font-semibold text-gray-700 hover:text-indigo-600 transition">
                                    Прочитај повеќе 
                                </a>
                            @elseif($event->action_type === 'modal')
                                <button type="button" onclick="trackView({{ $event->id }}); openEventModal('{{ addslashes($event->title) }}', '{{ addslashes($event->description) }}')" class="inline-flex items-center text-sm font-semibold text-gray-700 hover:text-indigo-600 transition">
                                    Прочитај повеќе 
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Design-Matching Modal -->
<div id="eventModal" class="fixed inset-0 z-50 hidden overflow-y-auto" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-900/40 backdrop-blur-sm transition-opacity" onclick="closeEventModal()"></div>
    <div class="flex min-h-screen items-center justify-center p-4">
        <div class="relative bg-white rounded-xl shadow-2xl max-w-2xl w-full p-6 border-l-8 border-indigo-500 overflow-hidden">
            <button onclick="closeEventModal()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800 transition">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <h3 class="text-xl font-bold text-gray-900 mb-4 pr-8" id="modalTitle"></h3>
            <div class="prose prose-slate max-w-none text-gray-700 leading-relaxed" id="modalDescription"></div>
        </div>
    </div>
</div>

    <section data-aos="fade-up" class="w-full px-4 py-12 md:py-20 bg-[#F5F6F7]">

        <div class="max-w-6xl mx-auto">


            <div
                class="relative overflow-hidden bg-gradient-to-r from-[#4F4697] via-[#577B94] to-[#6FA498] rounded-[24px] md:rounded-[36px] px-6 py-12 md:py-16 lg:py-20 text-center flex flex-col items-center justify-center shadow-xl shadow-indigo-950/5">


                <h2
                    class="text-white font-bold text-2xl sm:text-3xl md:text-4xl lg:text-[46px] leading-tight md:leading-[56px] max-w-3xl tracking-wide mb-6">

                    Ајде да градиме посилни <br class="hidden md:inline" /> тимови заедно

                </h2>


                <p class="text-white/90 font-light text-sm md:text-[16px] leading-relaxed max-w-2xl mb-8 px-2 md:px-4">

                    Подготвени сте да ги развиете капацитетите на вашиот тим и организација?

                    Закажете консултација и разговарајте со нас за вашите конкретни потреби.

                </p>


                <a href="#contact-section"
                    class="bg-[#54499C] hover:bg-[#433982] text-white font-normal text-sm md:text-[15px] px-8 py-3.5 rounded-xl transition-all duration-300 ease-in-out shadow-lg shadow-black/10 hover:scale-[1.03] active:scale-[0.98]">

                    Закажи средба

                </a>


            </div>



        </div>

    </section>



    <section id="contact-section" data-aos="fade-right" class=" py-12 px-4">

        <div class="max-w-6xl mx-auto bg-white rounded-2xl p-8 shadow-sm relative overflow-hidden">



            <div class="absolute top-0 left-0 right-0 h-2.5 pointer-events-none"
                style="background: linear-gradient(to right, #5B52A3, #5BA3A1);">

            </div>



            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center mt-2">



                <div class="flex flex-col items-center">

                    <div class="w-12 h-12 rounded-full bg-[#F1F5F9] text-[#5B52A3] flex items-center justify-center mb-4">

                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />

                        </svg>

                    </div>

                    <h4 class="font-medium text-[#101828] text-[17px] mb-1">Пратете ни меил</h4>

                    <a href="mailto:peopleschool@synapsehr.mk"
                        class="text-[15px] font-light text-[#5B52A3] hover:underline underline-offset-4 decoration-1">peopleschool@synapsehr.mk</a>

                </div>



                <div class="flex flex-col items-center">

                    <div class="w-12 h-12 rounded-full bg-[#F1F5F9] text-[#5B52A3] flex items-center justify-center mb-4">

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

                    <div class="w-12 h-12 rounded-full bg-[#F1F5F9] text-[#5B52A3] flex items-center justify-center mb-4">

                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />

                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />

                        </svg>

                    </div>

                    <h4 class="font-medium text-[#101828] text-[17px] mb-1">Телефонски број</h4>

                    <p class="text-[15px] font-light text-[#64748B]">+389 72 308 607</p>

                </div>



            </div>

        </div>

    </section>

    <!-- form -->
    <section data-aos="fade-left" class="py-12 px-4">
        <div class="max-w-6xl mx-auto bg-white rounded-2xl p-6 sm:p-10 shadow-[0_3px_12px_#7AB5A866]">

            <form action="{{ route('questions.store') }}" method="POST" class="w-full">
                @csrf

                <h2 class="text-xl md:text-[20px] font-semibold text-[#1f1f1f] mb-6 md:mb-8 text-center sm:text-left">
                    Форма за контакт
                </h2>

                <div class="mb-5">
                    <input type="text" name="full_name" placeholder="Име и презиме" required
                        class="w-full h-[46px] rounded-xl border-2 border-[#e5e5e5] bg-[#F9FAFB] px-5 sm:px-7 text-[14px] text-[#1A1A1A90] outline-none focus:border-[#6757c8] focus:bg-white transition">
                </div>

                <div class="mb-5">
                    <input type="text" name="company" placeholder="Компанија"
                        class="w-full h-[46px] rounded-xl border-2 border-[#e5e5e5] bg-[#F9FAFB] px-5 sm:px-7 text-[14px] text-[#1A1A1A90] outline-none focus:border-[#6757c8] focus:bg-white transition">
                </div>

                <div class="mb-5">
                    <input type="email" name="email" placeholder="Емаил" required
                        class="w-full h-[46px] rounded-xl border-2 border-[#e5e5e5] bg-[#F9FAFB] px-5 sm:px-7 text-[14px] text-[#1A1A1A90] outline-none focus:border-[#6757c8] focus:bg-white transition">
                </div>

                <div class="mb-5">
                    <input type="text" name="phone" placeholder="Телефон"
                        class="w-full h-[46px] rounded-xl border-2 border-[#e5e5e5] bg-[#F9FAFB] px-5 sm:px-7 text-[14px] text-[#1A1A1A90] outline-none focus:border-[#6757c8] focus:bg-white transition">
                </div>

                <div class="mb-6">
                    <textarea name="question" placeholder="Прашање" required rows="4"
                        class="w-full min-h-[120px] py-3 px-5 sm:px-7 rounded-xl border-2 border-[#e5e5e5] bg-[#F9FAFB] text-[14px] text-[#1A1A1A90] outline-none focus:border-[#6757c8] focus:bg-white transition resize-y"></textarea>
                </div>

                <div class="flex justify-center sm:justify-start">
                    <button type="submit"
                        class="w-full sm:w-[158px] h-[44px] rounded-[15px] bg-[#5B52A3] hover:bg-[#4d42a7] transition text-white text-[14px] font-light shadow-sm cursor-pointer">
                        Испрати
                    </button>
                </div>

                @if (session('success'))
                    <p class="mt-5 text-green-600 text-base md:text-xl font-medium text-center sm:text-left">
                        {{ session('success') }}
                    </p>
                @endif

            </form>

        </div>
    </section>
    <div id="eventModal" class="fixed inset-0 z-50 hidden bg-gray-900 bg-opacity-50 overflow-y-auto h-full w-full" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:p-0">
        
        <div class="relative bg-white rounded-2xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:max-w-2xl w-full p-8">
            
            <button onclick="closeEventModal()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>

            <h3 class="text-2xl font-bold text-gray-900 mb-4" id="modalTitle"></h3>
            <div class="prose prose-sm sm:prose-base text-gray-600" id="modalDescription"></div>
            
            <div class="mt-8 text-right">
                <button onclick="closeEventModal()" class="bg-indigo-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-indigo-700 transition">Затвори</button>
            </div>
        </div>
    </div>
</div>

<script>
    // --- Modal Logic ---
    function openEventModal(title, description) {
        document.getElementById('modalTitle').innerText = title;
        document.getElementById('modalDescription').innerHTML = description; 
        document.getElementById('eventModal').classList.remove('hidden');
    }

    function closeEventModal() {
        document.getElementById('eventModal').classList.add('hidden');
    }

    // Close modal if clicking outside the white box
    document.getElementById('eventModal').addEventListener('click', function(event) {
        if (event.target === this) closeEventModal();
    });

    // --- Tracking Logic ---
    function trackView(eventId) {
        fetch(`/events/${eventId}/increment-views`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            }
        }).catch(error => console.error('Error tracking view:', error));
    }

    // --- Sorting Logic ---
    function sortEvents(type) {
        const grid = document.getElementById('events-grid');
        const cards = Array.from(document.getElementsByClassName('event-card'));

        cards.sort((a, b) => {
            if (type === 'date-desc') return b.dataset.date - a.dataset.date;
            if (type === 'date-asc') return a.dataset.date - b.dataset.date;
            if (type === 'views-desc') return b.dataset.views - a.dataset.views;
            return 0;
        });

        cards.forEach(card => grid.appendChild(card));
        
        // Optional: Update button styles to reflect active filter
        updateButtonStyles(type);
    }

    function updateButtonStyles(activeType) {
        // Find all buttons in the filter container
        const buttons = document.querySelectorAll('.filter-btn');
        buttons.forEach(btn => {
            if (btn.getAttribute('data-type') === activeType) {
                btn.classList.add('bg-white', 'text-black', 'border-gray-200', 'font-semibold');
                btn.classList.remove('bg-gray-100', 'text-gray-600');
            } else {
                btn.classList.remove('bg-white', 'text-black', 'border-gray-200', 'font-semibold');
                btn.classList.add('bg-gray-100', 'text-gray-600');
            }
        });
    }
</script>
@endsection
