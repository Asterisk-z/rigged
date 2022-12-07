<!DOCTYPE html>
<html lang="en-US" class="scroll-smooth">


<head>
    <meta charset="utf-8" />
    <title>Dashboard </title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="description"
        content="Doctor" />
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
</head>

<body class="relative">
    <!-- Page Content -->
    <main>
        <div style="z-index: 1000" class="bg-gray-900" id="preloader">
            <div id="loader"></div>
        </div>
        <!-- Dashboard sidebar -->
        @include('user.includes.sidebar')
        <div
            class="dashboard-sidebar-overlay fixed w-full h-full inset-0 z-40 cursor-pointer bg-black opacity-70 hidden">
        </div>

        <div
            class="dashboard-header transition-all duration-200 fixed lg:left-64 left-0 z-30 shadow-front-2 bg-white h-20 lg:w-[calc(100%-256px)] w-full px-7 py-4 flex flex-col justify-center dark:bg-foreground dark:text-gray-200 top-0">
            <div class="flex justify-between">
                <div class="flex items-center">
                    <button type="button" class="mr-3 lg:hidden block dashboard-header-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <button type="button" class="mr-3  sm:hidden block dashboard-sidebar-control">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center">
                    <div class="mr-9">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300 cursor-pointer darkMode"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-yellow-500 cursor-pointer lightMode hidden" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="dropdown mr-3" data-dropdown>
                        <button class="link hover:text-blue-500 flex items-center" data-dropdown-button>
                            <div class="relative lg:mr-3 mr-0">
                                <img class="w-8 h-8 rounded-full border border-white" src="assets/img/faces/10.jpg"
                                    data-dropdown-button alt="" />
                                <div class="w-2 h-2 bg-green-500 rounded-full border absolute bottom-0 right-0"></div>
                            </div>
                            <span data-dropdown-button class="lg:block hidden">My Account</span>
                            <svg class="w-3 h-auto ml-2" width="10" height="6" data-dropdown-button
                                viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.99982 6.00001C4.79513 6.00001 4.59034 5.92467 4.43435 5.774L0.434558 1.91686C0.122074 1.61552 0.122074 1.12735 0.434558 0.826011C0.747042 0.524671 1.25327 0.524671 1.56575 0.826011L4.99982 4.13893L8.43464 0.826613C8.74712 0.525274 9.25335 0.525274 9.56583 0.826613C9.87831 1.12795 9.87831 1.61612 9.56583 1.91746L5.56604 5.7746C5.4098 5.92527 5.20481 6.00001 4.99982 6.00001Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                        <div class="dropdown-menu bg-white dark:bg-foreground dark:text-gray-300 text-gray-700">
                            <div>
                                <div x-data="{
                                    pages: [
                                        { title: 'Account', url: 'listing-list.html', icon: '/assets/img/svg-sprite/sprite.svg#user' },
                                        { title: 'Order Tracking', url: 'listing-list.html', icon: '/assets/img/svg-sprite/sprite.svg#location-outline' },
                                        { title: 'My Voucher', url: 'listing-list.html', icon: '/assets/img/svg-sprite/sprite.svg#bookmark' },
                                        { title: 'My Wishlist', url: 'listing-list.html', icon: '/assets/img/svg-sprite/sprite.svg#heart-outline' },
                                        { title: 'Settings', url: 'listing-list.html', icon: '/assets/img/svg-sprite/sprite.svg#settings' },
                                        { title: 'Sign Out', url: 'listing-list.html', icon: '/assets/img/svg-sprite/sprite.svg#logout-regular' },
                                    ]
                                }" class="dropdown-links max-w-xs w-48 rounded-md py-3">
                                    <template x-for="page in pages">
                                        <a :href="page.url"
                                            class="link hover:text-blue-500 px-4 py-1 flex items-center text-sm text-gray-700 dark:text-gray-300">
                                            <svg class="w-4 h-4 mr-2">
                                                <use :href='page.icon'></use>
                                            </svg>
                                            <span x-text="page.title"></span>
                                        </a>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button"
                        class="inline-flex items-center px-3 py-2 rounded-lg border border-gray-200 text-gray-700 dark:text-gray-300">
                        <svg class="h-4 w-4 lg:mr-2 mr-0">
                             @include('user.includes.sprite-svg', ['name'=> 'plus'])
                        </svg>
                        <span class="lg:flex hidden">Add Listing</span>
                    </button>
                </div>
            </div>
        </div>
        <div
            class="dashboard-content transition-all duration-200 dark:bg-background lg:ml-64 ml-0 mt-20 min-h-[calc(100vh-80px)] p-7">
            <section class="dark:bg-background">
                <div class="container mx-auto">
                    <h3 class="text-gray-700 text-3xl dark:text-gray-100 font-medium mb-7"> Welcome, Gage Paquette
                    </h3>
                    <div class="grid xl:grid-cols-8 lg:grid-cols-2 grid-cols-1 gap-7">
                        <!-- Dashboard overview section -->
                        <!-- Card 1 -->
                        <div class="xl:col-span-2 lg:col-span-4 col-span-1">
                            <div
                                class="dark:bg-foreground rounded-lg shadow-front-2 flex justify-between items-center cursor-pointer hover:bg-blue-500 dark:hover:bg-blue-500 group p-6">
                                <div class="">
                                    <p
                                        class="text-base group-hover:text-white text-gray-500 dark:text-gray-400 mb-2 font-medium">
                                        Active Listings </p>
                                    <h5
                                        class="text-gray-700 group-hover:text-white dark:text-gray-200 font-semibold text-3xl">
                                        22 </h5>
                                </div>
                                <div class="bg-gray-100 group-hover:bg-white dark:bg-background rounded-full p-3">
                                    <svg class="w-8 h-8 dark:text-gray-400 text-gray-700 group-hover:text-blue-500">
                                         @include('user.includes.sprite-svg', ['name'=> 'active-content'])
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="xl:col-span-2 lg:col-span-4 col-span-1">
                            <div
                                class="dark:bg-foreground rounded-lg shadow-front-2 flex justify-between items-center cursor-pointer hover:bg-blue-500 dark:hover:bg-blue-500 group p-6">
                                <div class="">
                                    <p
                                        class="text-base group-hover:text-white text-gray-500 dark:text-gray-400 mb-2 font-medium">
                                        Total Views </p>
                                    <h5
                                        class="text-gray-700 group-hover:text-white dark:text-gray-200 font-semibold text-3xl">
                                        1.2k </h5>
                                </div>
                                <div class="bg-gray-100 group-hover:bg-white dark:bg-background rounded-full p-3">
                                    <svg class="w-8 h-8 dark:text-gray-400 text-gray-700 group-hover:text-blue-500">
                                         @include('user.includes.sprite-svg', ['name'=> 'chart'])
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="xl:col-span-2 lg:col-span-4 col-span-1">
                            <div
                                class="dark:bg-foreground rounded-lg shadow-front-2 flex justify-between items-center cursor-pointer hover:bg-blue-500 dark:hover:bg-blue-500 group p-6">
                                <div class="">
                                    <p
                                        class="text-base group-hover:text-white text-gray-500 dark:text-gray-400 mb-2 font-medium">
                                        Total Reviews </p>
                                    <h5
                                        class="text-gray-700 group-hover:text-white dark:text-gray-200 font-semibold text-3xl">
                                        395 </h5>
                                </div>
                                <div class="bg-gray-100 group-hover:bg-white dark:bg-background rounded-full p-3">
                                    <svg class="w-8 h-8 dark:text-gray-400 text-gray-700 group-hover:text-blue-500">
                                         @include('user.includes.sprite-svg', ['name'=> 'review-star'])
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="xl:col-span-2 lg:col-span-4 col-span-1">
                            <div
                                class="dark:bg-foreground rounded-lg shadow-front-2 flex justify-between items-center cursor-pointer hover:bg-blue-500 dark:hover:bg-blue-500 group p-6">
                                <div class="">
                                    <p
                                        class="text-base group-hover:text-white text-gray-500 dark:text-gray-400 mb-2 font-medium">
                                        Favourite Listings </p>
                                    <h5
                                        class="text-gray-700 group-hover:text-white dark:text-gray-200 font-semibold text-3xl">
                                        12 </h5>
                                </div>
                                <div class="bg-gray-100 group-hover:bg-white dark:bg-background rounded-full p-3">
                                    <svg class="w-8 h-8 dark:text-gray-400 text-gray-700 group-hover:text-blue-500">
                                         @include('user.includes.sprite-svg', ['name'=> 'heart-outline'])
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Dashboard Recent Activity section -->
                        <div
                            class="col-span-1 dark:bg-foreground rounded-lg shadow-front-2 p-6 xl:col-span-3 lg:col-span-4">
                            <div class="flex justify-between flex-wrap mb-8">
                                <h6 class="text-base text-gray-700 dark:text-gray-100 font-semibold"> Recent Activities
                                </h6>
                                <a href="#"
                                    class="text-base text-gray-500 dark:text-gray-400 hover:text-blue-500 dark:hover:text-blue-500">
                                    View All </a>
                            </div>
                            <!-- Card 1 -->
                            <div class="flex items-start mb-6">
                                <div class="bg-gray-100 dark:bg-background p-2 rounded-full mr-4">
                                    <svg class="w-5 h-5 dark:text-gray-400 text-gray-700">
                                         @include('user.includes.sprite-svg', ['name'=> 'check-outline-circle'])
                                    </svg>
                                </div>
                                <div class="mb-6">
                                    <a href="#"
                                        class="text-base hover:text-blue-500 dark:text-gray-300 text-gray-700 mb-2">
                                        Your lisitng Premium Duplex Apartment has been approved. </a>
                                    <p class="text-gray-500 dark:text-gray-400 text-sm"> 23 March, 2022 09.40PM </p>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="flex items-start mb-6">
                                <div class="bg-gray-100 dark:bg-background p-2 rounded-full mr-4">
                                    <svg class="w-5 h-5 dark:text-gray-400 text-gray-700">
                                         @include('user.includes.sprite-svg', ['name'=> 'review-star'])
                                    </svg>
                                </div>
                                <div class="mb-6">
                                    <a href="#"
                                        class="text-base hover:text-blue-500 dark:text-gray-300 text-gray-700 mb-2">
                                        Gage Paquette left a review on Premium Duplex Apartment has been approved. </a>
                                    <p class="text-gray-500 dark:text-gray-400 text-sm"> 23 March, 2022 09.40PM </p>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="flex items-start mb-6">
                                <div class="bg-gray-100 dark:bg-background p-2 rounded-full mr-4">
                                    <svg class="w-5 h-5 dark:text-gray-400 text-gray-700">
                                         @include('user.includes.sprite-svg', ['name'=> 'heart-outline'])
                                    </svg>
                                </div>
                                <div class="mb-6">
                                    <a href="#"
                                        class="text-base hover:text-blue-500 dark:text-gray-300 text-gray-700 mb-2">
                                        Someone bookmark your Premium Duplex Apartment listing </a>
                                    <p class="text-gray-500 dark:text-gray-400 text-sm"> 23 March, 2022 09.40PM </p>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            <div class="flex items-start mb-6">
                                <div class="bg-gray-100 dark:bg-background p-2 rounded-full mr-4">
                                    <svg class="w-5 h-5 dark:text-gray-400 text-gray-700">
                                         @include('user.includes.sprite-svg', ['name'=> 'check-outline-circle'])
                                    </svg>
                                </div>
                                <div class="mb-6">
                                    <a href="#"
                                        class="text-base hover:text-blue-500 dark:text-gray-300 text-gray-700 mb-2">
                                        Someone bookmark your Premium Duplex Apartment listing </a>
                                    <p class="text-gray-500 dark:text-gray-400 text-sm"> 23 March, 2022 09.40PM </p>
                                </div>
                            </div>
                        </div>
                        <!-- Dashboard Analytics Section -->
                        <div class="xl:col-span-5 lg:col-span-4 col-span-1">
                            <div class="dark:bg-foreground rounded-lg shadow-front-2 p-6">
                                <div class="flex justify-between items-center flex-wrap mb-8">
                                    <h6 class="text-base text-gray-700 dark:text-gray-100 font-semibold"> Analytics
                                    </h6>
                                    <select name="cars"
                                        class="border border-gray-200 text-gray-400 dark:bg-foreground dark:border-gray-800 rounded-lg px-2 py-2 focus:outline-none">
                                        <option value="volvo">Monthly</option>
                                        <option value="saab">New York</option>
                                        <option value="opel">Manhattan</option>
                                        <option value="audi">Toronto</option>
                                    </select>
                                </div>
                                <div id="chart"></div>
                            </div>
                        </div>
                        <!-- Dashboard Invoices Section -->
                        <div
                            class="dark:bg-foreground rounded-lg shadow-front-2 p-6 xl:col-span-4 lg:col-span-4 col-span-1">
                            <div class="flex justify-between flex-wrap mb-8">
                                <h6 class="text-base text-gray-700 dark:text-gray-100 font-semibold"> Invoices </h6>
                                <a href="#"
                                    class="text-base text-gray-500 dark:text-gray-400 hover:text-blue-500 dark:hover:text-blue-500">
                                    View All </a>
                            </div>
                            <!-- List 1 -->
                            <div class="flex justify-between items-start mb-0">
                                <div class="flex items-start">
                                    <div class="bg-gray-100 dark:bg-background p-2 rounded-full mr-4">
                                        <svg class="w-5 h-5 dark:text-gray-400 text-gray-700">
                                             @include('user.includes.sprite-svg', ['name'=> 'list-doc'])
                                        </svg>
                                    </div>
                                    <div class="mb-6">
                                        <p class="text-base font-medium dark:text-gray-300 text-gray-700 mb-2">
                                            Professional Plan </p>
                                        <div class="flex md:items-center items-start flex-wrap md:flex-row flex-col">
                                            <div
                                                class=" bg-green-100 text-green-500  px-3 py-1 rounded mr-3 font-medium text-xs">
                                                Paid </div>
                                            <div class="border-r border-gray-300 h-5 mr-3 md:block hidden"></div>
                                            <p class="text-gray-500 dark:text-gray-300 mr-3"> Order No: #25686 </p>
                                            <div class="border-r border-gray-300 h-5 mr-3 md:block hidden"></div>
                                            <p class="text-gray-500 dark:text-gray-300">22 March, 2022</p>
                                        </div>
                                    </div>
                                </div>
                                <button type="button"
                                    class="text-gray-500 hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-500">
                                    <svg class="w-6 h-6">
                                         @include('user.includes.sprite-svg', ['name'=> 'more-dots'])
                                    </svg>
                                </button>
                            </div>
                            <!-- List 2 -->
                            <div class="flex justify-between items-start mb-0">
                                <div class="flex items-start">
                                    <div class="bg-gray-100 dark:bg-background p-2 rounded-full mr-4">
                                        <svg class="w-5 h-5 dark:text-gray-400 text-gray-700">
                                             @include('user.includes.sprite-svg', ['name'=> 'list-doc'])
                                        </svg>
                                    </div>
                                    <div class="mb-6">
                                        <p class="text-base font-medium dark:text-gray-300 text-gray-700 mb-2">
                                            Extended Plan </p>
                                        <div class="flex md:items-center items-start flex-wrap md:flex-row flex-col">
                                            <div
                                                class=" bg-red-100 text-red-500  px-3 py-1 rounded mr-3 font-medium text-xs">
                                                Unpaid </div>
                                            <div class="border-r border-gray-300 h-5 mr-3 md:block hidden"></div>
                                            <p class="text-gray-500 dark:text-gray-300 mr-3"> Order No: #25686 </p>
                                            <div class="border-r border-gray-300 h-5 mr-3 md:block hidden"></div>
                                            <p class="text-gray-500 dark:text-gray-300">22 March, 2022</p>
                                        </div>
                                    </div>
                                </div>
                                <button type="button"
                                    class="text-gray-500 hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-500">
                                    <svg class="w-6 h-6">
                                         @include('user.includes.sprite-svg', ['name'=> 'more-dots'])
                                    </svg>
                                </button>
                            </div>
                            <!-- List 3 -->
                            <div class="flex justify-between items-start mb-0">
                                <div class="flex items-start">
                                    <div class="bg-gray-100 dark:bg-background p-2 rounded-full mr-4">
                                        <svg class="w-5 h-5 dark:text-gray-400 text-gray-700">
                                             @include('user.includes.sprite-svg', ['name'=> 'list-doc'])
                                        </svg>
                                    </div>
                                    <div class="mb-6">
                                        <p class="text-base font-medium dark:text-gray-300 text-gray-700 mb-2"> Basic
                                            Plan </p>
                                        <div class="flex md:items-center items-start flex-wrap md:flex-row flex-col">
                                            <div
                                                class=" bg-green-100 text-green-500  px-3 py-1 rounded mr-3 font-medium text-xs">
                                                Paid </div>
                                            <div class="border-r border-gray-300 h-5 mr-3 md:block hidden"></div>
                                            <p class="text-gray-500 dark:text-gray-300 mr-3"> Order No: #25686 </p>
                                            <div class="border-r border-gray-300 h-5 mr-3 md:block hidden"></div>
                                            <p class="text-gray-500 dark:text-gray-300">22 March, 2022</p>
                                        </div>
                                    </div>
                                </div>
                                <button type="button"
                                    class="text-gray-500 hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-500">
                                    <svg class="w-6 h-6">
                                         @include('user.includes.sprite-svg', ['name'=> 'more-dots'])
                                    </svg>
                                </button>
                            </div>
                            <!-- List 4 -->
                            <div class="flex justify-between items-start mb-0">
                                <div class="flex items-start">
                                    <div class="bg-gray-100 dark:bg-background p-2 rounded-full mr-4">
                                        <svg class="w-5 h-5 dark:text-gray-400 text-gray-700">
                                             @include('user.includes.sprite-svg', ['name'=> 'list-doc'])
                                        </svg>
                                    </div>
                                    <div class="mb-6">
                                        <p class="text-base font-medium dark:text-gray-300 text-gray-700 mb-2">
                                            Professional Plan </p>
                                        <div class="flex md:items-center items-start flex-wrap md:flex-row flex-col">
                                            <div
                                                class=" bg-green-100 text-green-500  px-3 py-1 rounded mr-3 font-medium text-xs">
                                                Paid </div>
                                            <div class="border-r border-gray-300 h-5 mr-3 md:block hidden"></div>
                                            <p class="text-gray-500 dark:text-gray-300 mr-3"> Order No: #25686 </p>
                                            <div class="border-r border-gray-300 h-5 mr-3 md:block hidden"></div>
                                            <p class="text-gray-500 dark:text-gray-300">22 March, 2022</p>
                                        </div>
                                    </div>
                                </div>
                                <button type="button"
                                    class="text-gray-500 hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-500">
                                    <svg class="w-6 h-6">
                                         @include('user.includes.sprite-svg', ['name'=> 'more-dots'])
                                    </svg>
                                </button>
                            </div>
                            <!-- List 5 -->
                            <div class="flex justify-between items-start mb-0">
                                <div class="flex items-start">
                                    <div class="bg-gray-100 dark:bg-background p-2 rounded-full mr-4">
                                        <svg class="w-5 h-5 dark:text-gray-400 text-gray-700">
                                             @include('user.includes.sprite-svg', ['name'=> 'list-doc'])
                                        </svg>
                                    </div>
                                    <div class="mb-6">
                                        <p class="text-base font-medium dark:text-gray-300 text-gray-700 mb-2">
                                            Extended Plan </p>
                                        <div class="flex md:items-center items-start flex-wrap md:flex-row flex-col">
                                            <div
                                                class=" bg-red-100 text-red-500  px-3 py-1 rounded mr-3 font-medium text-xs">
                                                Unpaid </div>
                                            <div class="border-r border-gray-300 h-5 mr-3 md:block hidden"></div>
                                            <p class="text-gray-500 dark:text-gray-300 mr-3"> Order No: #25686 </p>
                                            <div class="border-r border-gray-300 h-5 mr-3 md:block hidden"></div>
                                            <p class="text-gray-500 dark:text-gray-300">22 March, 2022</p>
                                        </div>
                                    </div>
                                </div>
                                <button type="button"
                                    class="text-gray-500 hover:text-blue-500 dark:text-gray-300 dark:hover:text-blue-500">
                                    <svg class="w-6 h-6">
                                         @include('user.includes.sprite-svg', ['name'=> 'more-dots'])
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- Dashboard Top Locations section -->
                        <div
                            class="dark:bg-foreground rounded-lg shadow-front-2 xl:col-span-4 lg:col-span-4 col-span-1">
                            <div class="flex justify-between flex-wrap mb-8 pt-6 px-6">
                                <h6 class="text-base text-gray-700 dark:text-gray-100 font-semibold"> Top Locations
                                </h6>
                                <a href="#"
                                    class="text-base text-gray-500 dark:text-gray-400 hover:text-blue-500 dark:hover:text-blue-500">
                                    View All </a>
                            </div>
                            <div class="flex justify-between mb-3 px-6">
                                <div class="text-base text-gray-700 flex-1 dark:text-gray-100 font-medium"> City Name
                                </div>
                                <div class="text-base text-gray-700 flex-1 dark:text-gray-100 font-medium"> No. of list
                                </div>
                                <div class="text-base text-gray-700 flex-1 dark:text-gray-100 font-medium"> Revenue
                                </div>
                            </div>
                            <!-- List 1 -->
                            <div
                                class="flex justify-between border-b border-t border-gray-50 dark:border-background  bg-gray-100 dark:bg-background  p-[22px]">
                                <div
                                    class="text-base flex items-center text-gray-500 flex-1 dark:text-gray-300 font-medium">
                                    <svg class="w-4 h-4 mr-2">
                                         @include('user.includes.sprite-svg', ['name'=> 'location-outline'])
                                    </svg>
                                    <span>New York</span>
                                </div>
                                <div class="text-base text-gray-500 flex-1 dark:text-gray-300 font-medium"> 12 </div>
                                <div class="text-base text-gray-500 flex-1 dark:text-gray-300 font-medium"> $28,750.25
                                </div>
                            </div>
                            <!-- List 2 -->
                            <div
                                class="flex justify-between border-b border-t border-gray-50 dark:border-background  p-[22px]">
                                <div
                                    class="text-base flex items-center text-gray-500 flex-1 dark:text-gray-300 font-medium">
                                    <svg class="w-4 h-4 mr-2">
                                         @include('user.includes.sprite-svg', ['name'=> 'location-outline'])
                                    </svg>
                                    <span>Manhattan</span>
                                </div>
                                <div class="text-base text-gray-500 flex-1 dark:text-gray-300 font-medium"> 12 </div>
                                <div class="text-base text-gray-500 flex-1 dark:text-gray-300 font-medium"> $20,420.14
                                </div>
                            </div>
                            <!-- List 3 -->
                            <div
                                class="flex justify-between border-b border-t border-gray-50 dark:border-background  bg-gray-100 dark:bg-background  p-[22px]">
                                <div
                                    class="text-base flex items-center text-gray-500 flex-1 dark:text-gray-300 font-medium">
                                    <svg class="w-4 h-4 mr-2">
                                         @include('user.includes.sprite-svg', ['name'=> 'location-outline'])
                                    </svg>
                                    <span>Barbor</span>
                                </div>
                                <div class="text-base text-gray-500 flex-1 dark:text-gray-300 font-medium"> 09 </div>
                                <div class="text-base text-gray-500 flex-1 dark:text-gray-300 font-medium"> $18,880.15
                                </div>
                            </div>
                            <!-- List 4 -->
                            <div
                                class="flex justify-between border-b border-t border-gray-50 dark:border-background  p-[22px]">
                                <div
                                    class="text-base flex items-center text-gray-500 flex-1 dark:text-gray-300 font-medium">
                                    <svg class="w-4 h-4 mr-2">
                                         @include('user.includes.sprite-svg', ['name'=> 'location-outline'])
                                    </svg>
                                    <span>Los Angeles</span>
                                </div>
                                <div class="text-base text-gray-500 flex-1 dark:text-gray-300 font-medium"> 12 </div>
                                <div class="text-base text-gray-500 flex-1 dark:text-gray-300 font-medium"> $20,420.14
                                </div>
                            </div>
                            <!-- List 5 -->
                            <div
                                class="flex justify-between border-b border-t border-gray-50 dark:border-background  bg-gray-100 dark:bg-background  p-[22px]">
                                <div
                                    class="text-base flex items-center text-gray-500 flex-1 dark:text-gray-300 font-medium">
                                    <svg class="w-4 h-4 mr-2">
                                         @include('user.includes.sprite-svg', ['name'=> 'location-outline'])
                                    </svg>
                                    <span>New Joursey</span>
                                </div>
                                <div class="text-base text-gray-500 flex-1 dark:text-gray-300 font-medium"> 09 </div>
                                <div class="text-base text-gray-500 flex-1 dark:text-gray-300 font-medium"> $18,880.15
                                </div>
                            </div>
                            <!-- List 6 -->
                            <div
                                class="flex justify-between border-b border-t border-gray-50 dark:border-background  p-[22px]">
                                <div
                                    class="text-base flex items-center text-gray-500 flex-1 dark:text-gray-300 font-medium">
                                    <svg class="w-4 h-4 mr-2">
                                         @include('user.includes.sprite-svg', ['name'=> 'location-outline'])
                                    </svg>
                                    <span>Manhattan</span>
                                </div>
                                <div class="text-base text-gray-500 flex-1 dark:text-gray-300 font-medium"> 12 </div>
                                <div class="text-base text-gray-500 flex-1 dark:text-gray-300 font-medium"> $20,420.14
                                </div>
                            </div>
                        </div>
                        <!-- Dashboard Visited Listings section -->
                        <div class="xl:col-span-8">
                            <div class="bg-white shadow-front-2 dark:bg-foreground rounded-lg mb-7">
                                <div
                                    class="flex justify-between items-center mb-7 p-6 border-b border-gray-200 dark:border-gray-800">
                                    <h4 class="text-gray-700 dark:text-gray-300 text-xl font-semibold"> Most Visited
                                        Listings </h4>
                                    <a href="#"
                                        class="text-base text-gray-500 dark:text-gray-400 hover:text-blue-500 dark:hover:text-blue-500">
                                        View All </a>
                                </div>
                                <div class="flex flex-col">
                                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                            <div class="overflow-hidden">
                                                <table id="myTable-no-search" class="min-w-full">
                                                    <thead class="">
                                                        <tr class="">
                                                            <th scope="col"
                                                                class="text-base font-medium text-gray-700 dark:text-gray-100 px-6 py-2 text-left">
                                                                List Title </th>
                                                            <th scope="col"
                                                                class="text-base font-medium text-gray-700 dark:text-gray-100 px-6 py-2 text-left">
                                                                Category </th>
                                                            <th scope="col"
                                                                class="text-base font-medium text-gray-700 dark:text-gray-100 px-6 py-2 text-left">
                                                                Status </th>
                                                            <th scope="col"
                                                                class="text-base font-medium text-gray-700 dark:text-gray-100 px-6 py-2 text-left">
                                                                Views </th>
                                                            <th scope="col"
                                                                class="text-base font-medium text-gray-700 dark:text-gray-100 px-6 pb-2 text-left">
                                                                Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="align-middle">
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-700 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                <div class="flex items-center mr-10">
                                                                    <img class="w-16 h-14 object-cover rounded mr-4 border border-white"
                                                                        src="assets/img/Image/landing-page-image/building-2.jpg"
                                                                        alt="" /> Liam Ancor - Physics Trinee
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap align-middle text-sm font-medium text-gray-500 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                Coaching </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-700 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                <div
                                                                    class="text-xs font-medium  bg-green-100 text-green-500    px-3 py-1 rounded mr-3 inline-block">
                                                                    <!-- Active  --> Active
                                                                    <!-- Pending -->
                                                                    <!-- Cancel -->
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                250K+ </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                <button type="button"
                                                                    class="text-gray-500 hover:text-blue-500 dark:text-gray-200 hover:dark:text-blue-500">
                                                                    <svg class="h-6 w-6">
                                                                        <use
                                                                            href="{{ asset('website/assets/img/svg-sprite/sprite.svg#mor') }}e-dots">
                                                                        </use>
                                                                    </svg>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-700 dark:text-gray-300  px-6 py-5">
                                                                <div class="flex items-center mr-10">
                                                                    <img class="w-16 h-14 object-cover rounded mr-4 border border-white"
                                                                        src="assets/img/Image/landing-page-image/dish.jpg"
                                                                        alt="" /> Liam Ancor - Physics Trinee
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap align-middle text-sm font-medium text-gray-500 dark:text-gray-300  px-6 py-5">
                                                                Coaching </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-700 dark:text-gray-300  px-6 py-5">
                                                                <div
                                                                    class="text-xs font-medium   bg-purple-100 text-purple-500   px-3 py-1 rounded mr-3 inline-block">
                                                                    <!-- Active  -->
                                                                    <!-- Pending --> Pending
                                                                    <!-- Cancel -->
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-300  px-6 py-5">
                                                                250K+ </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-300  px-6 py-5">
                                                                <button type="button"
                                                                    class="text-gray-500 hover:text-blue-500 dark:text-gray-200 hover:dark:text-blue-500">
                                                                    <svg class="h-6 w-6">
                                                                        <use
                                                                            href="{{ asset('website/assets/img/svg-sprite/sprite.svg#mor') }}e-dots">
                                                                        </use>
                                                                    </svg>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-700 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                <div class="flex items-center mr-10">
                                                                    <img class="w-16 h-14 object-cover rounded mr-4 border border-white"
                                                                        src="assets/img/Image/landing-page-image/concert.jpg"
                                                                        alt="" /> Liam Ancor - Physics Trinee
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap align-middle text-sm font-medium text-gray-500 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                Coaching </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-700 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                <div
                                                                    class="text-xs font-medium    bg-red-100 text-red-500  px-3 py-1 rounded mr-3 inline-block">
                                                                    <!-- Active  -->
                                                                    <!-- Pending -->
                                                                    <!-- Cancel --> Cancel
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                250K+ </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                <button type="button"
                                                                    class="text-gray-500 hover:text-blue-500 dark:text-gray-200 hover:dark:text-blue-500">
                                                                    <svg class="h-6 w-6">
                                                                        <use
                                                                            href="{{ asset('website/assets/img/svg-sprite/sprite.svg#mor') }}e-dots">
                                                                        </use>
                                                                    </svg>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-700 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                <div class="flex items-center mr-10">
                                                                    <img class="w-16 h-14 object-cover rounded mr-4 border border-white"
                                                                        src="assets/img/Image/landing-page-image/building.jpg"
                                                                        alt="" /> Liam Ancor - Physics Trinee
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap align-middle text-sm font-medium text-gray-500 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                Coaching </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-700 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                <div
                                                                    class="text-xs font-medium   bg-purple-100 text-purple-500   px-3 py-1 rounded mr-3 inline-block">
                                                                    <!-- Active  -->
                                                                    <!-- Pending --> Pending
                                                                    <!-- Cancel -->
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                250K+ </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                <button type="button"
                                                                    class="text-gray-500 hover:text-blue-500 dark:text-gray-200 hover:dark:text-blue-500">
                                                                    <svg class="h-6 w-6">
                                                                        <use
                                                                            href="{{ asset('website/assets/img/svg-sprite/sprite.svg#mor') }}e-dots">
                                                                        </use>
                                                                    </svg>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-700 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                <div class="flex items-center mr-10">
                                                                    <img class="w-16 h-14 object-cover rounded mr-4 border border-white"
                                                                        src="assets/img/Image/landing-page-image/coffee-house.jpg"
                                                                        alt="" /> Liam Ancor - Physics Trinee
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap align-middle text-sm font-medium text-gray-500 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                Coaching </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-700 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                <div
                                                                    class="text-xs font-medium    bg-red-100 text-red-500  px-3 py-1 rounded mr-3 inline-block">
                                                                    <!-- Active  -->
                                                                    <!-- Pending -->
                                                                    <!-- Cancel --> Cancel
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                250K+ </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                <button type="button"
                                                                    class="text-gray-500 hover:text-blue-500 dark:text-gray-200 hover:dark:text-blue-500">
                                                                    <svg class="h-6 w-6">
                                                                        <use
                                                                            href="{{ asset('website/assets/img/svg-sprite/sprite.svg#mor') }}e-dots">
                                                                        </use>
                                                                    </svg>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-700 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                <div class="flex items-center mr-10">
                                                                    <img class="w-16 h-14 object-cover rounded mr-4 border border-white"
                                                                        src="assets/img/Image/landing-page-image/building-2.jpg"
                                                                        alt="" /> Liam Ancor - Physics Trinee
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap align-middle text-sm font-medium text-gray-500 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                Coaching </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-700 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                <div
                                                                    class="text-xs font-medium  bg-green-100 text-green-500    px-3 py-1 rounded mr-3 inline-block">
                                                                    <!-- Active  --> Active
                                                                    <!-- Pending -->
                                                                    <!-- Cancel -->
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                250K+ </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                <button type="button"
                                                                    class="text-gray-500 hover:text-blue-500 dark:text-gray-200 hover:dark:text-blue-500">
                                                                    <svg class="h-6 w-6">
                                                                        <use
                                                                            href="{{ asset('website/assets/img/svg-sprite/sprite.svg#mor') }}e-dots">
                                                                        </use>
                                                                    </svg>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-700 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                <div class="flex items-center mr-10">
                                                                    <img class="w-16 h-14 object-cover rounded mr-4 border border-white"
                                                                        src="assets/img/Image/landing-page-image/building.jpg"
                                                                        alt="" /> Liam Ancor - Physics Trinee
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap align-middle text-sm font-medium text-gray-500 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                Coaching </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-700 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                <div
                                                                    class="text-xs font-medium   bg-purple-100 text-purple-500   px-3 py-1 rounded mr-3 inline-block">
                                                                    <!-- Active  -->
                                                                    <!-- Pending --> Pending
                                                                    <!-- Cancel -->
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                250K+ </td>
                                                            <td
                                                                class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-300  bg-gray-50 dark:bg-background  px-6 py-5">
                                                                <button type="button"
                                                                    class="text-gray-500 hover:text-blue-500 dark:text-gray-200 hover:dark:text-blue-500">
                                                                    <svg class="h-6 w-6">
                                                                        <use
                                                                            href="{{ asset('website/assets/img/svg-sprite/sprite.svg#mor') }}e-dots">
                                                                        </use>
                                                                    </svg>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <!-- All scripts -->
        <script src="{{ asset('website/assets/js/others/plugins-core/apexcharts.js') }}"></script>
        <script src="{{ asset('website/assets/js/others/plugins-script/apexchart.js') }}"></script>
        <script src="{{ asset('website/assets/js/others/plugins-core/simple-datatables.js') }}"></script>
        <script src="{{ asset('website/assets/js/others/plugins-script/simple-datatables-2.js') }}"></script>
        <script src="{{ asset('website/assets/js/others/plugins-core/handy-collapse.js') }}"></script>
        <script src="{{ asset('website/assets/js/others/plugins-script/handy-collapse.js') }}"></script>
        <script src="{{ asset('website/assets/js/others/plugins-core/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('website/assets/js/others/plugins-script/perfect-scrollbar.js') }}"></script>
    </main>
    <script src="{{ asset('website/assets/js/others/plugins-core/alpine.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/main.js') }}"></script>
</body>


</html>
