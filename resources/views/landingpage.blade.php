<!DOCTYPE html>
<html lang="en-US" class="scroll-smooth">


<head>
    <meta charset="utf-8" />
    <title>Dashboard </title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="description" content="Doctor" />
    <meta name="copyright" content="Ad." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/plugin-css/swiper-bundle.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/plugin-css/aos.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/plugin-css/swiper-bundle.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/plugin-css/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/plugin-css/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/plugin-css/simple-datatables.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/plugin-css/preloader.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('website/assets/css/main.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins"/>
    <style>
        * {
            font-family : Poppins;
        }
    </style>


</head>

<body class="relative">
    <!-- Page Content -->
    <main>

        <div
            class="mobile-navbar overflow-y-auto fixed bg-white dark:bg-background -left-full top-0 h-full w-full transition-all z-[100]">
            <div class="flex justify-end py-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-500 close-navbar-btn"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
        </div>
        <header class="relative dark:text-gray-100 sticky-header-first-content"
            style="
			background: url('/website/assets/img/intro/intro-bg.png'),
				linear-gradient(180deg, #ffffff 0%, #f0f7fe 100%);
			background-size: cover;
			background-position: center;
		">
            <div class="w-full navbar h-20 flex items-center sticky-header -top-20">
                <nav class="container mx-auto lg:px-0 px-5 flex items-center justify-between transition-all">
                    <div class="flex items-center">
                        <button type="button" class="lg:hidden block menu-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                        <a href="#" class="flex items-center">
                            <img class="w-11 h-11 mr-3" src="logo.png" alt="" />
                        </a>
                    </div>
                    <button type="button" class="text-white hover:text-blue-500 flex items-center lg:hidden">
                        <span class="lg:mr-3 mr-0 relative">
                            <img class="w-8 h-8 rounded-full border border-white" src="/website/assets/img/faces/10.jpg"
                                alt="" />
                            <span class="w-2 h-2 bg-green-500 rounded-full border absolute bottom-0 right-0"></span>
                        </span>
                    </button>
                    <div class="hidden lg:flex items-center">
                        <ul class="flex items-center">
                            <li class="list-none">
                                <div
                                    class="relative [&>div] [&>div]:hover:visible [&>div]:hover:transition-all [&>div]:hover:pt-3 [&>div]:hover:h-full [&>div]:hover:opacity-100 [&>div]:hover:top-auto [&>div]:hover:z-10 pr-9">
                                    <a class="link hover:text-blue-500 flex items-center"> Home</a>
                                </div>
                            </li>
                            <li class="list-none">
                                <div
                                    class="dropdown relative [&>div]:hover:visible [&>div]:hover:transition-all [&>div]:hover:pt-3 [&>div]:hover:h-full [&>div]:hover:block [&>div]:hover:opacity-100 [&>div]:hover:top-auto [&>div]:hover:z-10 pr-9">
                                    <a class="link hover:text-blue-500 flex items-center"> About</a>
                                </div>
                            </li>
                            <li class="list-none">
                                <div
                                    class="dropdown relative [&>div]:hover:visible [&>div]:hover:transition-all [&>div]:hover:pt-3 [&>div]:hover:h-full [&>div]:hover:block [&>div]:hover:opacity-100 [&>div]:hover:top-auto [&>div]:hover:z-10 pr-9">
                                    <a class="link hover:text-blue-500 flex items-center"> Pricing</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="{{ route('register') }}"
                        class="hidden lg:inline-flex items-center px-5 py-3 rounded-full border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white">
                        <span class="">Book A Session</span>
                    </a>
                </nav>
            </div>
            <div class="container mx-auto pt-10 lg:px-0 px-5 lg:pt-20 text-center pb-5 z-50">
                <h6 class="text-blue-500 font-semibold text-base mb-1" data-aos="fade-up" data-aos-duration="400">
                   Health is life </h6>
                <h1 class="text-2xl leading-tight md:text-[48px] font-semibold text-gray-800 max-w-[850px] mx-auto mb-6 z-50"
                    data-aos="fade-up" data-aos-duration="800"> Talk with the best Doctors
                </h1>
                <p class="text-gray-500 max-w-[426px] mx-auto mb-[30px]" data-aos="fade-up" data-aos-duration="900">
                   Awesome 24/7 consultancy service to help you archive perfect health</p>
                <div class="flex justify-center" data-aos="fade-up" data-aos-duration="1000">
                    <a href="{{ route('register') }}"
                        class="mr-4 px-7 py-3 bg-blue-500 hover:bg-blue-600 rounded-full text-white font-medium"> Login </a>
                    <a
                        href="{{ route('register') }}"
                        class="px-7 py-3 text-gray-700 hover:bg-blue-25 font-medium shadow-front-1 border border-gray-300 rounded-full">
                        Get Started </a>
                </div>
            </div>
            <img class="w-full container mx-auto" src="{{ asset('website/assets/img/intro/intro-headr.png') }}" data-aos="fade-up"
                data-aos-duration="1500" alt="" />
                Create Image tray of Health Icons
        </header>
        <div class="bg-white dark:bg-gray-900">
            <div>
                <section class="container mx-auto my-[100px]">
                    <h4 class="text-2xl font-semibold md:text-[32px] text-center text-gray-700 max-w-[440px] mx-auto mb-12"
                        data-aos="fade-up" data-aos-duration="400" style="line-height: 40px"> Our Statistics</h4>
                    <div  class="grid grid-cols-1 md:grid-cols-4 gap-7" data-aos="fade-up">
                            <div
                                class="shadow-card hover:shadow-hover cursor-pointer bg-white dark:bg-dark rounded-md flex items-center justify-center p-10">
                                <img src="website/assets/img/intro/pencil.png" class="w-14 h-14 mr-10" alt="" />
                                <div>
                                    <h3
                                        class="text-2xl md:text-[28px] text-gray-800 font-semibold">10</h3>
                                    <p class="text-gray-500 mt-2">Patients</p>
                                </div>
                            </div>
                            <div
                                class="shadow-card hover:shadow-hover cursor-pointer bg-white dark:bg-dark rounded-md flex items-center justify-center p-10">
                                <img src="website/assets/img/intro/pencil.png" class="w-14 h-14 mr-10" alt="" />
                                <div>
                                    <h3
                                        class="text-2xl md:text-[28px] text-gray-800 font-semibold">10</h3>
                                    <p class="text-gray-500 mt-2">Doctors</p>
                                </div>
                            </div>
                            <div
                                class="shadow-card hover:shadow-hover cursor-pointer bg-white dark:bg-dark rounded-md flex items-center justify-center p-10">
                                <img src="website/assets/img/intro/pencil.png" class="w-14 h-14 mr-10" alt="" />
                                <div>
                                    <h3
                                        class="text-2xl md:text-[28px] text-gray-800 font-semibold">10</h3>
                                    <p class="text-gray-500 mt-2">Appointments</p>
                                </div>
                            </div>
                            <div
                                class="shadow-card hover:shadow-hover cursor-pointer bg-white dark:bg-dark rounded-md flex items-center justify-center p-10">
                                <img src="website/assets/img/intro/pencil.png" class="w-14 h-14 mr-10" alt="" />
                                <div>
                                    <h3
                                        class="text-2xl md:text-[28px] text-gray-800 font-semibold">10</h3>
                                    <p class="text-gray-500 mt-2">Patients</p>
                                </div>
                            </div>
                    </div>
                </section>
            </div>
            <div>
                <section class="container mx-auto text-center mb-[100px]" data-aos="fade-up">
                    <h4 class="text-2xl md:text-[32px] font-semibold text-gray-700 mb-12"> Our Services</span>
                    </h4>
                    <div x-data="{
                        elements: [{
                                title: 'SEO Friendly',
                                description: 'The best SEO practices achieve higher rankings on Google.',
                                icon: 'seo-search'
                            },
                            {
                                title: 'Server Side Rendered',
                                description: 'Automatic code splitting, system based routing, hot code reloading.',
                                icon: 'server'
                            },
                            {
                                title: 'Multi-Vendor Support',
                                description: 'We can assure you the proper Author support & faster response.',
                                icon: 'support'
                            },
                            {
                                title: 'Clean Code',
                                description: 'Codebase is huge, but structured and robust.',
                                icon: 'code-regular'
                            },
                        ]
                    }" class="grid grid-cols-1 md:grid-cols-4 gap-7">
                        <template x-for="element in elements">
                            <div
                                class="group shadow-card hover:shadow-hover cursor-pointer text-start bg-white dark:bg-dark rounded-md p-9">
                                <svg class="w-9 h-9" x-text='element.icon'>


                                    @include('user.includes.sprite-svg', ['name'=> 'plus'])
                                </svg>
                                <h6 x-text="element.title"
                                    class="text-lg text-gray-800 font-medium group-hover:text-blue-500 mt-[28px] mb-3">
                                </h6>
                                <p x-text="element.description" class="text-sm text-gray-500"></p>
                            </div>
                        </template>
                    </div>
                </section>
            </div>
            <div>
                <section class="container mx-auto mb-[100px]">
                    <div>
                        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-x-7 bg-blue-25 dark:bg-dark rounded-lg mb-12"
                            data-aos="fade-up">
                            <img class="max-w-full relative z-[1] md:pl-[80px]" src="website/assets/img/intro/landing2.png"
                                alt="" />
                            <div class="lg:pt-0 pt-10 lg:pl-20 pl-5 pb-10">
                                <h5 class="text-[22px] md:text-2xl font-semibold text-gray-800 mb-8"> Abour Us </h5>

                                <p class="md:text-lg text-gray-800 mb-7"> Super smart color, typography and effects
                                    styles already setup. Change one style and apply changes to the entire library. </p>
                                <a class="bg-blue-500 hover:bg-blue-600 dark:hover:bg-slate-100 text-white dark:text-gray-700 font-semibold px-5 md:px-7 py-2 md:py-3 rounded-full"
                                    href="{{ route('register') }}"> Know More </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div>
                <section class="container mx-auto mb-[100px]">
                    <h4 class="text-2xl md:text-[32px] text-center font-semibold text-gray-800 mb-2">
                        <span>
                            Pricing </span>
                    </h4>
                    <p class="text-gray-500 text-center mb-12" data-aos="fade-up"> Pay For every Appointment. </p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-7 items-center mb-10" data-aos="fade-up">
                        <div
                            class="bg-gray-25 dark:bg-transparent hover:bg-white dark:hover:bg-dark group rounded-md hover:shadow-drop p-8">
                        </div>
                        <div
                            class="bg-gray-25 dark:bg-transparent hover:bg-white dark:hover:bg-dark group rounded-md hover:shadow-drop p-8">
                            <h6 class="text-[22px] font-semibold text-gray-800 dark:text-gray-500 text-left mb-3">
                                Popular </h6>
                            <h3 class="text-blue-500 font-semibold text-left text-5xl mb-3"> $59 </h3>
                            <p class="text-gray-500 text-left dark:text-gray-500 mb-9"> A license for 5 designers
                                Bazar Template, with global style and components. </p>
                            <ul>
                                <li>
                                    <div class="flex items-center text-left mb-4">
                                        <svg class="w-5 h-5 mr-2 text-gray-800 dark:text-white">
                                            @include('user.includes.sprite-svg', ['name'=> 'check-fill-circle'])
                                        </svg>
                                        <p class="text-gray-800 dark:text-white">5 user license</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center text-left mb-4">
                                        <svg class="w-5 h-5 mr-2 text-gray-800 dark:text-white">
                                            @include('user.includes.sprite-svg', ['name'=> 'check-fill-circle'])
                                        </svg>
                                        <p class="text-gray-800 dark:text-white">50000+ components &amp; variants</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center text-left mb-4">
                                        <svg class="w-5 h-5 mr-2 text-gray-800 dark:text-white">
                                            @include('user.includes.sprite-svg', ['name'=> 'check-fill-circle'])
                                        </svg>
                                        <p class="text-gray-800 dark:text-white">1000+ global styles</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center text-left mb-4">
                                        <svg class="w-5 h-5 mr-2 text-gray-800 dark:text-white">
                                            @include('user.includes.sprite-svg', ['name'=> 'check-fill-circle'])
                                        </svg>
                                        <p class="text-gray-800 dark:text-white">20+ example pages</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="flex items-center text-left mb-4">
                                        <svg class="w-5 h-5 mr-2 text-gray-800 dark:text-white">
                                            @include('user.includes.sprite-svg', ['name'=> 'check-fill-circle'])
                                        </svg>
                                        <p class="text-gray-800 dark:text-white">Free lifetime updates</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{ route('register') }}">
                                <button type="button"
                                    class="mt-9 w-full flex justify-center rounded-full border bg-white group-hover:bg-blue-500 group-hover:text-white group-hover:border-transparent border-gray-300 dark:border-gray-500 cursor-pointer px-4 py-4 font-medium text-gray-700 dark:text-gray-900">
                                    Purchase Now </button>
                            </a>
                        </div>
                        <div
                            class="bg-gray-25 dark:bg-transparent hover:bg-white dark:hover:bg-dark group rounded-md hover:shadow-drop p-8">

                        </div>
                    </div>
                </section>
            </div>
            <div>
                <section class="bg-gray-50 dark:bg-dark mb-[100px]">
                    <div class="container mx-auto py-20">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-7">
                            <div>
                                <h4 class="text-2xl md:text-[32px] font-semibold text-gray-800 mb-4">
                                    Get the best Health services
                                </h4>
                                <p class="text-sm md:text-lg text-gray-500 dark:text-gray-500"> Bazar template is the
                                    largest e-commerce and design system. Kick start any project, save thousands of
                                    hours, and level up your skills as a designer/developer. </p>
                            </div>
                            <div class="flex items-center justify-end">
                                <a href="{{ route('register') }}">
                                    <button
                                        class="px-5 md:px-8 py-[10px] md:py-4 rounded-full font-medium text-base flex items-center justify-center bg-blue-500 text-white hover:bg-blue-600 transition-colors duration-200 mr-4">
                                        Book An Appointment </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div>
                <footer class="border-t border-gray-200 dark:border-gray-800">
                    <div
                        class="grid lg:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-7 container mx-auto py-12 items-center">
                        <div
                            class="flex items-center lg:justify-start justify-center text-gray-800 dark:text-gray-300 font-semibold">
                            Developed with <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-blue-500 mx-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="flex lg:justify-end justify-center">
                            <a href="#" class="mr-4">
                                <svg width="23" height="23" viewBox="0 0 23 23"
                                    class="text-gray-500 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-500"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.0873 11.5C22.0873 5.45 17.1373 0.5 11.0873 0.5C5.03728 0.5 0.0872802 5.45 0.0872802 11.5C0.0872802 17 4.07478 21.5375 9.29978 22.3625L9.29978 14.6625L6.54978 14.6625L6.54978 11.5L9.29978 11.5L9.29978 9.025C9.29978 6.275 10.9498 4.7625 13.4248 4.7625C14.6623 4.7625 15.8998 5.0375 15.8998 5.0375L15.8998 7.7875L14.5248 7.7875C13.1498 7.7875 12.7373 8.6125 12.7373 9.4375L12.7373 11.5L15.7623 11.5L15.2123 14.6625L12.5998 14.6625L12.5998 22.5C18.0998 21.675 22.0873 17 22.0873 11.5Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                            <a href="#" class="mr-4">
                                <svg width="25" height="21"
                                    class="text-gray-500 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-500"
                                    viewBox="0 0 25 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.4351 2.80769C23.5221 3.26923 22.609 3.42308 21.5438 3.57692C22.609 2.96154 23.3699 2.03846 23.6742 0.807692C22.7612 1.42308 21.696 1.73077 20.4786 2.03846C19.5655 1.11538 18.196 0.5 16.8264 0.5C13.6308 0.5 11.196 3.57692 11.9568 6.65385C7.84815 6.5 4.19598 4.5 1.60902 1.42308C0.239454 3.73077 1.00032 6.65385 3.13076 8.19231C2.36989 8.19231 1.60902 7.88462 0.84815 7.57692C0.84815 9.88462 2.52206 12.0385 4.80467 12.6538C4.0438 12.8077 3.28293 12.9615 2.52206 12.8077C3.13076 14.8077 4.95685 16.3462 7.23945 16.3462C5.41337 17.7308 2.67424 18.5 0.0872802 18.1923C2.36989 19.5769 4.95685 20.5 7.69598 20.5C16.9786 20.5 22.1525 12.6538 21.8481 5.42308C22.9134 4.80769 23.8264 3.88462 24.4351 2.80769Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                            <a href="#" class="mr-4">
                                <svg width="29" height="21"
                                    class="text-gray-500 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-500"
                                    viewBox="0 0 29 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M28.4114 3.62952C28.0822 2.40578 27.1174 1.44112 25.8938 1.11161C23.6586 0.5 14.7172 0.5 14.7172 0.5C14.7172 0.5 5.77617 0.5 3.54087 1.08842C2.34084 1.41759 1.35247 2.40596 1.0233 3.62952C0.435059 5.86465 0.435059 10.5 0.435059 10.5C0.435059 10.5 0.435059 15.1587 1.0233 17.3705C1.35282 18.594 2.3173 19.5587 3.54104 19.8882C5.7997 20.5 14.7175 20.5 14.7175 20.5C14.7175 20.5 23.6586 20.5 25.8938 19.9116C27.1176 19.5822 28.0822 18.6176 28.4118 17.394C28.9998 15.1587 28.9998 10.5235 28.9998 10.5235C28.9998 10.5235 29.0234 5.86465 28.4114 3.62952ZM11.8705 14.7823V6.2177L19.3056 10.5L11.8705 14.7823Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                            <a href="#" class="mr-4">
                                <svg width="20" height="21"
                                    class="text-gray-500 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-500"
                                    viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 2.30723C12.6506 2.30723 13.0121 2.30723 14.0964 2.30723C15.0602 2.30723 15.5422 2.54819 15.9036 2.66868C16.3855 2.90964 16.747 3.03012 17.1084 3.39157C17.4699 3.75301 17.7108 4.11446 17.8313 4.59639C17.9518 4.95783 18.0723 5.43976 18.1928 6.40362C18.1928 7.48795 18.1928 7.72892 18.1928 10.5C18.1928 13.2711 18.1928 13.5121 18.1928 14.5964C18.1928 15.5602 17.9518 16.0422 17.8313 16.4036C17.5904 16.8855 17.4699 17.247 17.1084 17.6084C16.747 17.9699 16.3855 18.2108 15.9036 18.3313C15.5422 18.4518 15.0602 18.5723 14.0964 18.6928C13.0121 18.6928 12.7711 18.6928 10 18.6928C7.22892 18.6928 6.98795 18.6928 5.90362 18.6928C4.93976 18.6928 4.45783 18.4518 4.09639 18.3313C3.61446 18.0904 3.25301 17.9699 2.89157 17.6084C2.53012 17.247 2.28916 16.8855 2.16868 16.4036C2.04819 16.0422 1.92771 15.5602 1.80723 14.5964C1.80723 13.5121 1.80723 13.2711 1.80723 10.5C1.80723 7.72892 1.80723 7.48795 1.80723 6.40362C1.80723 5.43976 2.04819 4.95783 2.16868 4.59639C2.40964 4.11446 2.53012 3.75301 2.89157 3.39157C3.25301 3.03012 3.61446 2.78916 4.09639 2.66868C4.45783 2.54819 4.93976 2.42771 5.90362 2.30723C6.98795 2.30723 7.3494 2.30723 10 2.30723ZM10 0.5C7.22892 0.5 6.98795 0.5 5.90362 0.5C4.81928 0.5 4.09639 0.740965 3.49398 0.981928C2.89157 1.22289 2.28916 1.58434 1.68675 2.18675C1.08434 2.78916 0.843374 3.27109 0.481928 3.99398C0.240965 4.59639 0.120482 5.31928 -3.0639e-08 6.40362C-3.62665e-08 7.48795 -3.81424e-08 7.8494 -5.18986e-08 10.5C-6.62802e-08 13.2711 -6.75307e-08 13.5121 -7.31583e-08 14.5964C-7.87859e-08 15.6807 0.240964 16.4036 0.481928 17.006C0.722892 17.6084 1.08434 18.2108 1.68675 18.8133C2.28916 19.4157 2.77109 19.6566 3.49398 20.0181C4.09639 20.259 4.81928 20.3795 5.90362 20.5C6.98795 20.5 7.3494 20.5 10 20.5C12.6506 20.5 13.0121 20.5 14.0964 20.5C15.1807 20.5 15.9036 20.259 16.506 20.0181C17.1084 19.7771 17.7108 19.4157 18.3133 18.8133C18.9157 18.2108 19.1566 17.7289 19.5181 17.006C19.759 16.4036 19.8795 15.6807 20 14.5964C20 13.5121 20 13.1506 20 10.5C20 7.8494 20 7.48795 20 6.40362C20 5.31928 19.759 4.59639 19.5181 3.99398C19.2771 3.39157 18.9157 2.78916 18.3133 2.18675C17.7108 1.58434 17.2289 1.34337 16.506 0.981929C15.9036 0.740965 15.1807 0.620482 14.0964 0.5C13.0121 0.5 12.7711 0.5 10 0.5Z"
                                        fill="currentColor" />
                                    <path
                                        d="M10 5.31928C7.10843 5.31928 4.81928 7.60843 4.81928 10.5C4.81928 13.3916 7.10843 15.6807 10 15.6807C12.8916 15.6807 15.1807 13.3916 15.1807 10.5C15.1807 7.60843 12.8916 5.31928 10 5.31928ZM10 13.8735C8.19277 13.8735 6.62651 12.4277 6.62651 10.5C6.62651 8.69277 8.07229 7.12651 10 7.12651C11.8072 7.12651 13.3735 8.57229 13.3735 10.5C13.3735 12.3072 11.8072 13.8735 10 13.8735Z"
                                        fill="currentColor" />
                                    <path
                                        d="M15.3012 6.40362C15.9666 6.40362 16.506 5.8642 16.506 5.1988C16.506 4.53339 15.9666 3.99398 15.3012 3.99398C14.6358 3.99398 14.0964 4.53339 14.0964 5.1988C14.0964 5.8642 14.6358 6.40362 15.3012 6.40362Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </main>

    <script src="{{ asset('website/assets/js/others/plugins-core/aos.js') }}"></script>
    <script src="{{ asset('website/assets/js/others/plugins-script/aos.js') }}"></script>
    <script src="{{ asset('website/assets/js/others/plugins-core/swiper-bundle.js') }}"></script>
    <script src="{{ asset('website/assets/js/others/plugins-script/swiper.js') }}"></script>
    <script src="{{ asset('website/assets/js/others/plugins-core/apexcharts.js') }}"></script>
    <script src="{{ asset('website/assets/js/others/plugins-script/apexchart.js') }}"></script>
    <script src="{{ asset('website/assets/js/others/plugins-core/simple-datatables.js') }}"></script>
    <script src="{{ asset('website/assets/js/others/plugins-script/simple-datatables-2.js') }}"></script>
    <script src="{{ asset('website/assets/js/others/plugins-core/handy-collapse.js') }}"></script>
    <script src="{{ asset('website/assets/js/others/plugins-script/handy-collapse.js') }}"></script>
    <script src="{{ asset('website/assets/js/others/plugins-core/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('website/assets/js/others/plugins-script/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('website/assets/js/others/plugins-core/alpine.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/main.js') }}"></script>
</body>


</html>
