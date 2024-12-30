<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
<header class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0" href="#">
            <img src="{{asset('images/logo.png')}}" class="h-20 p-2" alt="logo">
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-white" href="#">Brands</a>
            <a class="mr-5 hover:text-white" href="#">Latest Products</a>
{{--            <a class="mr-5 hover:text-white" href="#">Third Link</a>--}}
{{--            <a class="mr-5 hover:text-white" href="#">Fourth Link</a>--}}
        </nav>
{{--        <button class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">Button--}}
{{--            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">--}}
{{--                <path d="M5 12h14M12 5l7 7-7 7"></path>--}}
{{--            </svg>--}}
{{--        </button>--}}
    </div>
</header>
<section class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 md:mb-0 mb-10">
            <img class="object-cover object-center rounded" alt="hero" src="{{asset('images/img1.jpg')}}">
        </div>
        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Smart Power Solutions
                <br class="hidden lg:inline-block">by: KSHco
            </h1>
            <p class="mb-8 leading-relaxed">KSHco specializes in electrical components and solutions, providing high-quality parts for various applications. Ensure safety and efficiency in your operations with our reliable products.</p>
{{--            <div class="flex justify-center">--}}
{{--                <button class="inline-flex text-white bg-purple-500 border-0 py-2 px-6 focus:outline-none hover:bg-purple-600 rounded text-lg">Button</button>--}}
{{--                <button class="ml-4 inline-flex text-gray-400 bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">Button</button>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
<section class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Brands</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Wide collection of top electrical brands.</p>
        </div>
        <div class="flex flex-wrap -m-2">
            @foreach($brands as $brand)
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <a href="#">
                        <div class="h-full flex items-center border-gray-800 border p-4 rounded-lg">
                            <img alt="logo" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="storage/{{$brand->logo_url}}">
                            <div class="flex-grow">
                                <h2 class="text-white title-font font-medium">{{$brand->name}}</h2>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-24 mx-auto">
        @foreach($items_by_date as $item)
            <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="storage/{{$item->image_url}}">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{$item->brand->name}}</h3>
                        <h2 class="text-white title-font text-lg font-medium">{{$item->name}}</h2>
                        <p class="mt-1">{{$item->description}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<section class="text-gray-400 bg-gray-900 body-font">
    <div class="max-w-screen-lg mx-auto px-4 md:px-8 py-12 transition-all duration-500 ease-linear">
        <div class="relative">
            <div class="slides-container h-72 flex snap-x snap-mandatory overflow-hidden overflow-x-auto space-x-2 rounded scroll-smooth before:w-[45vw] before:shrink-0 after:w-[45vw] after:shrink-0 md:before:w-0 md:after:w-0">
                <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                    <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/9754/mountains-clouds-forest-fog.jpg?auto=compress&cs=tinysrgb&w=1600" alt="mountain_image">
                </div>
                <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                    <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/6263568/pexels-photo-6263568.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="mountain_image">
                </div>
                <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                    <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/3026364/pexels-photo-3026364.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="mountain_image">
                </div>
                <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                    <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/10343729/pexels-photo-10343729.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="mountain_image">
                </div>
                <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                    <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/13860053/pexels-photo-13860053.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="mountain_image">
                </div>
                <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                    <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/8576739/pexels-photo-8576739.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="mountain_image">
                </div>
                <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                    <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/1743367/pexels-photo-1743367.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="mountain_image">
                </div>
                <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                    <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/5920021/pexels-photo-5920021.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="mountain_image">
                </div>
                <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                    <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/12805075/pexels-photo-12805075.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="mountain_image">
                </div>
                <div class="slide aspect-square h-full flex-shrink-0 snap-center rounded overflow-hidden">
                    <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/547115/pexels-photo-547115.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="mountain_image">
                </div>

            </div>

            <div class="absolute top-0 -left-4 h-full items-center hidden md:flex">
                <button role="button" class="prev px-2 py-2 rounded-full bg-neutral-100 text-neutral-900 group" aria-label="prev"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-active:-translate-x-2 transition-all duration-200 ease-linear">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>

                </button>
            </div>
            <div class="absolute top-0 -right-4 h-full items-center hidden md:flex">
                <button role="button" class="next px-2 py-2 rounded-full bg-neutral-100 text-neutral-900 group" aria-label="next"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-active:translate-x-2 transition-all duration-200 ease-linear">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
<footer class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Tailblocks</span>
        </a>
        <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© 2020 Tailblocks —
            <a href="https://twitter.com/knyttneve" class="text-gray-500 ml-1" target="_blank" rel="noopener noreferrer">@knyttneve</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-400">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-400">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-400">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-400">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
    </div>
</footer>
</body>
</html>
