<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    <div x-show="$store.global.isRightSidebarExpanded"
        @keydown.window.escape="$store.global.isRightSidebarExpanded = false">
        <div class="fixed inset-0 z-[150] bg-slate-900/60 transition-opacity duration-200"
            @click="$store.global.isRightSidebarExpanded = false" x-show="$store.global.isRightSidebarExpanded"
            x-transition:enter="ease-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        </div>
        <div class="fixed right-0 top-0 z-[151] h-full w-full sm:w-80">
            <div x-data="{ activeTab: 'tabHome' }"
                class="relative flex h-full w-full transform-gpu flex-col bg-white transition-transform duration-200 dark:bg-navy-750"
                x-show="$store.global.isRightSidebarExpanded" x-transition:enter="ease-out"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="ease-in" x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full">
                <div class="flex items-center justify-between py-2 px-4">
                    <p x-show="activeTab === 'tabHome'" class="flex shrink-0 items-center space-x-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="text-xs">25 May, 2022</span>
                    </p>

                    <button @click="$store.global.isRightSidebarExpanded=false"
                        class="btn -mr-1 h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div x-show="activeTab === 'tabHome'" x-transition:enter="transition-all duration-500 easy-in-out"
                    x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                    class="is-scrollbar-hidden overflow-y-auto overscroll-contain pt-1">

                    <div class="mt-4">
                        <h2
                            class="px-3 text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                            Latest News
                        </h2>
                        <div class="mt-3 space-y-3 px-2">
                            <div class="flex justify-between space-x-2 rounded-lg bg-slate-100 p-2.5 dark:bg-navy-700">
                                <div class="flex flex-1 flex-col justify-between">
                                    <div class="line-clamp-2">
                                        <a href="#"
                                            class="font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">What
                                            is Tailwind CSS?</a>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-2">
                                            <div class="avatar h-7 w-7">
                                                <img class="rounded-full" src="images/avatar/avatar-20.jpg"
                                                    alt="avatar" />
                                            </div>
                                            <div>
                                                <p class="text-xs font-medium line-clamp-1">
                                                    John D.
                                                </p>
                                                <p class="text-tiny+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                                    2 min read
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <button
                                                class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                                </svg>
                                            </button>
                                            <button
                                                class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <img src="images/object/object-18.jpg"
                                    class="h-20 w-20 rounded-lg object-cover object-center" alt="image" />
                            </div>
                        </div>
                    </div>



                    <div class="mt-3 px-3">
                        <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                            <div class="flex items-center justify-between">
                                <p>
                                    <span class="font-medium text-slate-600 dark:text-navy-100">35GB</span>
                                    of 1TB
                                </p>
                                <a href="#"
                                    class="text-xs+ font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">Upgrade</a>
                            </div>

                            <div class="progress mt-2 h-2 bg-slate-150 dark:bg-navy-500">
                                <div class="w-7/12 rounded-full bg-info"></div>
                            </div>
                        </div>
                    </div>
                    <div class="h-18"></div>
                </div>

            </div>
        </div>
    </div>
</div>
