@extends('layouts.index')
@section('content')
    <header class="absolute inset-x-0 top-0 z-50">
        <nav class="flex items-center max-w-7xl mx-auto justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <p class="text-5xl text-netflixRed">KITFLIX</p>
                </a>
            </div>
            <div class="flex flex-1 justify-end">
                <div class="mt-1.5">
                    @if (Route::has('login'))
                        <livewire:welcome.navigation/>
                    @endif
                </div>
            </div>
        </nav>
    </header>
    <section class="relative isolate overflow-hidden pt-14">
        <img src="{{ asset('img/bg-home-page.png')  }}" alt="bg-home"
             class="absolute inset-0 -z-10 size-full object-cover opacity-30">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="text-center">
                    <h1 class="text-balance text-5xl font-bold tracking-tight text-white sm:text-7xl">Onbeperkt
                        Kitten series, films en nog veel meer kijken</h1>
                    <p class="mt-8 text-pretty text-lg text-gray-400 sm:text-xl/8">Vanaf € 9,99. Je kunt altijd
                        opzeggen.</p>
                    <div class="my-10">
                        <p class="mx-auto mt-6 text-center lg:text-nowrap text-base text-gray-300">Klaar om te
                            kijken? Voer je e-mailadres in om je lidmaatschap te starten of te hernieuwen.</p>
                        <form class="mx-auto mt-10 flex gap-x-4">
                            <label for="email-address" class="sr-only">Email address</label>
                            <input id="email-address" name="email" type="email" autocomplete="email" required
                                   class="min-w-0 flex-auto rounded-md px-3.5 py-2 text-base text-white outline outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-white sm:text-sm/6"
                                   placeholder="Enter your email">
                            <button type="submit"
                                    class="flex-none bg-netflixRed rounded-md px-3.5 py-2.5 font-bold shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                                Aan de slag >
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative flex w-full min-h-20 items-center bg-netflixBlack justify-center border-t-4 border-netflixRed rounded-t-[50%_100%] before:content-[''] before:absolute before:top-0 before:right-0 before:bottom-0 before:left-0 before:z-[-1] before:bg-gradient-to-r before:rounded-[inherit] before:-mt-1.5"></div>
    </section>
    <section class="max-w-7xl mx-auto p-4">
        <h2 class="text-3xl font-bold text-start mb-8">Trending</h2>
        <x-trending-media :top10Media="$top10Media" />
    </section>
    <section class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold text-start mb-8">
            Meer redenen om lid te worden
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card 1 -->
            <div
                class="bg-[linear-gradient(149deg,#192247_0%,#210e17_96.86%)] p-6 rounded-lg flex flex-col items-centertext-start">
                <h3 class="text-xl font-semibold">Kijk op tv</h3>
                <p class="mt-6 text-gray-300 text-sm opacity-50">
                    Kijk op smart-tv's, PlayStation, Xbox, Chromecast, Apple TV,
                    blu-rayspelers en meer.
                </p>
            </div>
            <!-- Card 2 -->
            <div
                class="bg-[linear-gradient(149deg,#192247_0%,#210e17_96.86%)] p-6 rounded-lg flex flex-col items-centertext-start">
                <h3 class="text-xl font-semibold">
                    Download series die je offline wilt kijken
                </h3>
                <p class="mt-6 text-gray-300 text-sm opacity-50">
                    Sla je favorieten eenvoudig op zodat je altijd wat kunt kijken.
                </p>
            </div>
            <!-- Card 3 -->
            <div
                class="bg-[linear-gradient(149deg,#192247_0%,#210e17_96.86%)] p-6 rounded-lg flex flex-col items-centertext-start">
                <h3 class="text-xl font-semibold">Kijk overal</h3>
                <p class="mt-6 text-gray-300 text-sm opacity-50">
                    Kijk onbeperkt series en films op je telefoon, tablet, laptop en tv.
                </p>
            </div>
            <!-- Card 4 -->
            <div
                class="bg-[linear-gradient(149deg,#192247_0%,#210e17_96.86%)] p-6 rounded-lg flex flex-col items-centertext-start">
                <h3 class="text-xl font-semibold">Maak profielen voor kinderen</h3>
                <p class="mt-6 text-gray-300 text-sm opacity-50">
                    Laat kids op avontuur gaan met hun favoriete personages in een
                    omgeving die speciaal voor hen is gemaakt. Gratis bij je
                    lidmaatschap.
                </p>
            </div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
            <div class="my-10">
                <p class="mx-auto mt-6 text-center lg:text-nowrap text-base text-gray-300">Klaar om te kijken? Voer je e-mailadres in om je lidmaatschap te starten of te hernieuwen.</p>
                <form class="mx-auto mt-10 flex gap-x-4">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required
                           class="min-w-0 flex-auto rounded-md px-3.5 py-2 text-base text-white outline outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-white sm:text-sm/6"
                           placeholder="Enter your email">
                    <button type="submit"
                            class="flex-none bg-netflixRed rounded-md px-3.5 py-2.5 font-bold shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        Aan de slag >
                    </button>
                </form>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
@endsection
