@extends('Layout.landing')

@section('body')
    <!-- Hero -->
    <div
        class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/squared-bg-element.svg')] dark:before:bg-[url('https://preline.co/assets/svg/examples-dark/squared-bg-element.svg')] before:bg-no-repeat before:bg-top before:size-full before:-z-[1] before:transform before:-translate-x-1/2">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10">
            <!-- Announcement Banner -->
            <div class="flex justify-center">
                <a class="inline-flex items-center gap-x-2 bg-white border border-gray-200 text-xs text-gray-600 p-2 px-3 rounded-full transition hover:border-gray-300 focus:outline-none focus:border-gray-300 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:border-neutral-600 dark:focus:border-neutral-600"
                    href="#">
                    Jl. Raya Ijen No.9, Mergelo, Wates, Kec. Magersari, Kota Mojokerto, Jawa Timur 61317
                    <span class="flex items-center gap-x-1">
                        <span
                            class="border-s border-gray-200 text-blue-600 ps-2 dark:text-blue-500 dark:border-neutral-700">Buka
                            Peta</span>
                        <svg class="shrink-0 size-4 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </span>
                </a>
            </div>
            <!-- End Announcement Banner -->

            <!-- Title -->
            <div class="mt-5 max-w-xl text-center mx-auto">
                <h1 class="block font-bold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
                    SMA Negeri 2 Mojokerto
                </h1>
            </div>
            <!-- End Title -->

            <div class="mt-5 max-w-3xl text-center mx-auto">
                <p class="text-lg text-gray-600 dark:text-neutral-400">SMA Negeri 2 Kota Mojokerto adalah Sekolah
                    Menengah Atas Negeri bertaraf internasional yang biasa disebut Buwitashakti
                    dan Inscada yang berada di Kota Mojokerto, Jawa Timur</p>
            </div>

            <!-- Buttons -->
            <div class="mt-8 gap-3 flex justify-center">
                <a class="inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 focus:outline-none focus:from-violet-600 focus:to-blue-600 border border-transparent text-white text-sm font-medium rounded-full py-3 px-4"
                    href="#">
                    Daftar Sekarang
                </a>
            </div>
            <!-- End Buttons -->
        </div>
    </div>
    <!-- End Hero -->


    <!-- Features -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="relative p-6 md:p-16">
            <!-- Grid -->
            <div class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
                <div class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-8 lg:order-2">
                    <h2 class="text-2xl text-gray-800 font-bold sm:text-3xl dark:text-neutral-200">
                        Fasilitas SMA Negeri 2
                    </h2>

                    <!-- Tab Navs -->
                    <nav class="grid gap-4 mt-5 md:mt-10" aria-label="Tabs" role="tablist" aria-orientation="vertical">
                        <button type="button"
                            class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 focus:outline-none focus:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 active"
                            id="tabs-with-card-item-1" aria-selected="true" data-hs-tab="#tabs-with-card-1"
                            aria-controls="tabs-with-card-1" role="tab">
                            <span class="flex gap-x-6">
                                <span class="grow">
                                    <span
                                        class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200">Ruangan
                                        Multimedia</span>
                                    <span
                                        class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Ruang
                                        Multimedia dirancang untuk rapat, pertemuan guru, dan kegiatan krusial lainnya.
                                        Fasilitas ini vital untuk
                                        meningkatkan kolaborasi dan
                                        komunikasi antar guru.</span>
                                </span>
                            </span>
                        </button>

                        <button type="button"
                            class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 focus:outline-none focus:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            id="tabs-with-card-item-2" aria-selected="false" data-hs-tab="#tabs-with-card-2"
                            aria-controls="tabs-with-card-2" role="tab">
                            <span class="flex gap-x-6">
                                <span class="grow">
                                    <span
                                        class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200">Lapangan
                                        Bola Voli</span>
                                    <span
                                        class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Lapangan
                                        bola voli SMAN 2 Mojokerto dimanfaatkan siswa-siswi untuk pembelajaran olahraga,
                                        ekstrakurikuler, dan latihan
                                        bagi atlet berprestasi.</span>
                                </span>
                            </span>
                        </button>

                        <button type="button"
                            class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 focus:outline-none focus:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            id="tabs-with-card-item-3" aria-selected="false" data-hs-tab="#tabs-with-card-3"
                            aria-controls="tabs-with-card-3" role="tab">
                            <span class="flex gap-x-6">
                                <span class="grow">
                                    <span
                                        class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200">Powerful
                                        features</span>
                                    <span
                                        class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Reduce
                                        time and effort on building modern look design with Preline only.</span>
                                </span>
                            </span>
                        </button>
                    </nav>
                    <!-- End Tab Navs -->
                </div>
                <!-- End Col -->

                <div class="lg:col-span-6">
                    <div class="relative">
                        <!-- Tab Content -->
                        <div>
                            <div id="tabs-with-card-1" role="tabpanel" aria-labelledby="tabs-with-card-item-1">
                                <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/20 h-[600px]"
                                    src="https://sman2mojokerto.sch.id/wp-content/uploads/2023/04/DSC_9525-scaled.jpg"
                                    alt="Features Image">
                            </div>

                            <div id="tabs-with-card-2" class="hidden" role="tabpanel"
                                aria-labelledby="tabs-with-card-item-2">
                                <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/20 h-[600px]"
                                    src="https://sman2mojokerto.sch.id/wp-content/uploads/2024/12/DSC_9514-scaled.jpg"
                                    alt="Features Image">
                            </div>

                            <div id="tabs-with-card-3" class="hidden" role="tabpanel"
                                aria-labelledby="tabs-with-card-item-3">
                                <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/20 h-[600px]"
                                    src="https://sman2mojokerto.sch.id/wp-content/uploads/2023/04/DSC_9525-scaled.jpg"
                                    alt="Features Image">
                            </div>
                        </div>
                        <!-- End Tab Content -->

                        <!-- SVG Element -->
                        <div class="hidden absolute top-0 end-0 translate-x-20 md:block lg:translate-x-20">
                            <svg class="w-16 h-auto text-orange-500" width="121" height="135" viewBox="0 0 121 135"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor"
                                    stroke-width="10" stroke-linecap="round" />
                                <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5" stroke="currentColor"
                                    stroke-width="10" stroke-linecap="round" />
                                <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor"
                                    stroke-width="10" stroke-linecap="round" />
                            </svg>
                        </div>
                        <!-- End SVG Element -->
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->

            <!-- Background Color -->
            <div class="absolute inset-0 grid grid-cols-12 size-full">
                <div
                    class="col-span-full lg:col-span-7 lg:col-start-6 bg-gray-100 w-full h-5/6 rounded-xl sm:h-3/4 lg:h-full dark:bg-neutral-800">
                </div>
            </div>
            <!-- End Background Color -->
        </div>
    </div>
    <!-- End Features -->


    <!-- Card Blog -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">The Blog</h2>
            <p class="mt-1 text-gray-600 dark:text-neutral-400">See how game-changing companies are making the most of
                every
                engagement with Preline.</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card -->
            <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg transition duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40 dark:focus:border-transparent dark:focus:shadow-black/40"
                href="#">
                <div class="aspect-w-16 aspect-h-11">
                    <img class="w-full object-cover rounded-xl"
                        src="https://images.unsplash.com/photo-1633114128174-2f8aa49759b0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80"
                        alt="Blog Image">
                </div>
                <div class="my-6">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                        Announcing a free plan for small teams
                    </h3>
                    <p class="mt-5 text-gray-600 dark:text-neutral-400">
                        At Wake, our mission has always been focused on bringing openness.
                    </p>
                </div>
                <div class="mt-auto flex items-center gap-x-3">
                    <img class="size-8 rounded-full"
                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                        alt="Avatar">
                    <div>
                        <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Lauren Waller</h5>
                    </div>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg transition duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40 dark:focus:border-transparent dark:focus:shadow-black/40"
                href="#">
                <div class="aspect-w-16 aspect-h-11">
                    <img class="w-full object-cover rounded-xl"
                        src="https://images.unsplash.com/photo-1562851529-c370841f6536?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80"
                        alt="Blog Image">
                </div>
                <div class="my-6">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                        How Google Assistant now helps you record stories for kids
                    </h3>
                    <p class="mt-5 text-gray-600 dark:text-neutral-400">
                        Google is constantly updating its consumer AI, Google Assistant, with new features.
                    </p>
                </div>
                <div class="mt-auto flex items-center gap-x-3">
                    <img class="size-8 rounded-full"
                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                        alt="Avatar">
                    <div>
                        <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Aaron Larsson</h5>
                    </div>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg transition duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40 dark:focus:border-transparent dark:focus:shadow-black/40"
                href="#">
                <div class="aspect-w-16 aspect-h-11">
                    <img class="w-full object-cover rounded-xl"
                        src="https://images.unsplash.com/photo-1521321205814-9d673c65c167?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80"
                        alt="Blog Image">
                </div>
                <div class="my-6">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                        Front accounts - let's work together
                    </h3>
                    <p class="mt-5 text-gray-600 dark:text-neutral-400">
                        Are you an accountant? Are you a company formation advisor?
                    </p>
                </div>
                <div class="mt-auto flex items-center gap-x-3">
                    <img class="size-8 rounded-full"
                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                        alt="Avatar">
                    <div>
                        <h5 class="text-sm text-gray-800 dark:text-neutral-200">By Lauren Waller</h5>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>
        <!-- End Grid -->

        <!-- Card -->
        <div class="mt-12 text-center">
            <a class="py-3 px-4 inline-flex items-center gap-x-1 text-sm font-medium rounded-full border border-gray-200 bg-white text-blue-600 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-blue-500 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                href="#">
                Read more
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </a>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Blog -->
@endsection
