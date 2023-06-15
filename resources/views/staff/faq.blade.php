@extends('layouts.index')
@section('nav')
    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="/dashboard" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Sikas</a>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="/dashboard" class="flex items-center opacity-75 text-white py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="/data-transaction" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-sticky-note mr-3"></i>
                Data Transaksi
            </a>
            <a href="/data-employee" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-sticky-note mr-3"></i>
                Data Karyawan
            </a>
            <a href="/faq" class="flex items-center active-nav-link text-white  hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                FAQ
            </a>
            <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Statistik
            </a>
            <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Promo
            </a>
        </nav>
        <a href="#"
            class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
            <i class="fas fa-arrow-circle-up mr-3"></i>
            Upgrade to Pro!
        </a>
    </aside>
@endsection
@section('content')
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-6">Frequently Asked Question (FAQ)</h1>
            <div class="w-full ">
                <div class="bg-white overflow-auto">
                    <div class="flex items-start mx-2 my-2">
                        <div class="w-full  my-1">
                            <ul class="flex flex-col">
                                <li class="bg-white my-2 shadow-lg" x-data="accordion(1)">
                                    <h2 @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                        <span>When will my order arrive?</span>
                                        <svg :class="handleRotate()"
                                            class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                            </path>
                                        </svg>
                                    </h2>
                                    <div x-ref="tab" :style="handleToggle()"
                                        class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all m-2">
                                        <p class="p-3 text-gray-900">
                                            Shipping time is set by our delivery partners, according to the delivery method
                                            chosen
                                            by you. Additional details can be found in the order confirmation

                                        </p>
                                        <div class="flex w-5 transform hover:text-blue-500 hover:scale-110">
                                            <a href="#"
                                                class=" ml-3  font-small text-blue-600 dark:text-blue-500 hover:underline">
                                                Edit
                                            </a>
                                            <span>
                                                <a href="#"
                                                    class=" ml-3  font-small text-red-600 dark:text-blue-500 hover:underline">
                                                    Delete
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="bg-white my-2 shadow-lg" x-data="accordion(2)">
                                    <h2 @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                        <span>When will my order arrive?</span>
                                        <svg :class="handleRotate()"
                                            class="fill-current text-blue-700 h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                            </path>
                                        </svg>
                                    </h2>
                                    <div x-ref="tab" :style="handleToggle()"
                                        class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all m-2">
                                        <p class="p-3 text-gray-900">
                                            Shipping time is set by our delivery partners, according to the delivery method
                                            chosen
                                            by you. Additional details can be found in the order confirmation

                                        </p>
                                        <div class="flex w-5 transform hover:text-blue-500 hover:scale-110">
                                            <a href="#"
                                                class=" ml-3  font-small text-blue-600 dark:text-blue-500 hover:underline">
                                                Edit
                                            </a>
                                            <span>
                                                <a href="#"
                                                    class=" ml-3  font-small text-red-600 dark:text-blue-500 hover:underline">
                                                    Delete
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
@section('script')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordion', {
                tab: 0
            });

            Alpine.data('accordion', (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx ?
                        `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                }
            }));
        })
    </script>
@endsection
