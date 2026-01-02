<x-app-layout>
    <div class="relative bg-white dark:bg-gray-900">
        <!-- Carousel Section -->
        <div x-data="{
                activeSlide: 0,
                slides: [
                    { img: '/images/slider3.png', title: '{{ __('who_we_are_title') }}', text: '{{ __('who_we_are_text') }}' },
                    { img: '/images/slider1.png', title: '{{ __('specialties_title') }}', text: '{{ __('specialties_1') }}' },
                    { img: '/images/slider2.png', title: '{{ __('our_works_title') }}', text: 'Khahlil Mahmoud Al-Shaar' }
                ],
                next() {
                    this.activeSlide = (this.activeSlide === this.slides.length - 1) ? 0 : this.activeSlide + 1;
                },
                prev() {
                    this.activeSlide = (this.activeSlide === 0) ? this.slides.length - 1 : this.activeSlide - 1;
                },
                init() {
                    setInterval(() => this.next(), 5000);
                }
             }" class="relative w-full h-[600px] overflow-hidden">

            <!-- Slides -->
            <template x-for="(slide, index) in slides" :key="index">
                <div x-show="activeSlide === index"
                     x-transition:enter="transition ease-out duration-700"
                     x-transition:enter-start="opacity-0 transform scale-105"
                     x-transition:enter-end="opacity-100 transform scale-100"
                     x-transition:leave="transition ease-in duration-700"
                     x-transition:leave-start="opacity-100 transform scale-100"
                     x-transition:leave-end="opacity-0 transform scale-105"
                     class="absolute inset-0 w-full h-full">
                    <img :src="slide.img" class="object-cover w-full h-full" alt="Slider Image">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                        <div class="text-center px-4 max-w-4xl mx-auto">
                            <h2 class="text-4xl md:text-6xl font-bold text-white mb-4" x-text="slide.title"></h2>
                            <p class="text-lg md:text-xl text-gray-200 line-clamp-3" x-text="slide.text"></p>
                        </div>
                    </div>
                </div>
            </template>

            <!-- Controls -->
            <button @click="prev()" class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white hover:text-blue-500 focus:outline-none bg-black/30 p-2 rounded-full backdrop-blur-sm z-10 rtl:right-4 rtl:left-auto">
                <svg class="w-8 h-8 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button @click="next()" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white hover:text-blue-500 focus:outline-none bg-black/30 p-2 rounded-full backdrop-blur-sm z-10 rtl:left-4 rtl:right-auto">
                <svg class="w-8 h-8 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </div>

        <!-- Who We Are Section -->
        <section class="py-16 bg-gray-50 dark:bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white uppercase tracking-wide border-b-4 border-blue-600 inline-block pb-2">
                        {{ __('who_we_are_title') }}
                    </h2>
                </div>
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-xl p-8 transform hover:scale-[1.01] transition duration-500">
                    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed text-justify">
                        {{ __('who_we_are_text') }}
                    </p>
                </div>
            </div>
        </section>

        <!-- Our Specialties Section -->
        <section class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white uppercase tracking-wide border-b-4 border-blue-600 inline-block pb-2">
                        {{ __('specialties_title') }}
                    </h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition duration-300 border-l-4 border-blue-500">
                         <div class="mb-4 text-blue-600 dark:text-blue-400">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <p class="text-gray-700 dark:text-gray-300 font-medium">{{ __('specialties_1') }}</p>
                    </div>
                    <!-- Feature 2 -->
                    <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition duration-300 border-l-4 border-blue-500">
                         <div class="mb-4 text-blue-600 dark:text-blue-400">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                        </div>
                        <p class="text-gray-700 dark:text-gray-300 font-medium">{{ __('specialties_2') }}</p>
                    </div>
                    <!-- Feature 3 -->
                    <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition duration-300 border-l-4 border-blue-500">
                         <div class="mb-4 text-blue-600 dark:text-blue-400">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        </div>
                        <p class="text-gray-700 dark:text-gray-300 font-medium">{{ __('specialties_3') }}</p>
                    </div>
                    <!-- Feature 4 -->
                    <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition duration-300 border-l-4 border-blue-500">
                         <div class="mb-4 text-blue-600 dark:text-blue-400">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <p class="text-gray-700 dark:text-gray-300 font-medium">{{ __('specialties_4') }}</p>
                    </div>
                     <!-- Feature 5 -->
                     <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition duration-300 border-l-4 border-blue-500 md:col-span-2 lg:col-span-1">
                         <div class="mb-4 text-blue-600 dark:text-blue-400">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
                        </div>
                        <p class="text-gray-700 dark:text-gray-300 font-medium">{{ __('specialties_5') }}</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Works Section -->
         <section class="py-16 bg-gray-50 dark:bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                     <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white uppercase tracking-wide border-b-4 border-blue-600 inline-block pb-2">
                        {{ __('our_works_title') }}
                    </h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @php
                        $works = [
                            'works_1', 'works_2', 'works_3', 'works_4', 'works_5',
                            'works_6', 'works_7', 'works_8', 'works_9', 'works_10'
                        ];
                    @endphp
                    @foreach($works as $work)
                         <div class="flex items-start space-x-3 rtl:space-x-reverse">
                             <div class="flex-shrink-0 mt-1">
                                 <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                             </div>
                             <p class="text-gray-700 dark:text-gray-300 text-lg">{{ __($work) }}</p>
                         </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                    <div>
                        <h3 class="text-lg font-bold mb-4">Khalil Mahmoud Al-Shaar</h3>
                        <p class="text-gray-400 text-sm">Industrial Power & Automation Solutions</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold mb-4">Contact</h3>
                        <p class="text-gray-400 text-sm">Damascus, Syria</p>
                    </div>
                    <div>
                         <h3 class="text-lg font-bold mb-4">Sitemap</h3>
                         <ul class="text-gray-400 text-sm space-y-2">
                            <li><a href="#" class="hover:text-white">{{ __('home') }}</a></li>
                            <li><a href="{{ route('login') }}" class="hover:text-white">{{ __('login') }}</a></li>
                         </ul>
                    </div>
                </div>
                <div class="border-t border-gray-700 pt-8">
                    <p class="text-sm text-gray-400">&copy; {{ date('Y') }} Khalil Mahmoud Al-Shaar. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</x-app-layout>
