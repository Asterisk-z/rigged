
<template>

    <div>
        <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
            <main class="grid w-full grow grid-cols-1 place-items-center">
                <div class="w-full max-w-[26rem] p-4 sm:px-5">
                    <div class="text-center">
                        <div>
                            <Link href="/">
                                <ApplicationLogo class="mx-auto w-20 h-20 fill-current text-gray-500" />
                            </Link>
                        </div>
                        <div class="mt-4">
                            <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                                Welcome
                            </h2>
                        </div>
                    </div>

                    <slot />

                </div>
            </main>
        </div>

    </div>
</template>

<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>
