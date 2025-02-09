<x-app-layout>
    <div class="relative w-full h-[700px] bg-cover bg-center"
         style="background-image: url('{{$showMedia->image_url}}');">
        <livewire:layout.navigation/>

        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center p-10">
            <p class="text-5xl text-netflixRed">K <span class="text-2xl text-white">SERIES</span></p>
            <h1 class="text-5xl font-bold">{{$showMedia->title}}</h1>
            <p class="mt-2 text-lg">{{$showMedia->description}}</p>
            <div class="mt-4">
                <a href="#" class="bg-netflixRed px-4 py-2 rounded font-bold mr-2">▶ Play</a>
                <button class="bg-gray-500 px-4 py-2 rounded">More Info</button>
            </div>
        </div>
    </div>
    <div class="px-10 my-10 mx-auto">
        <div class="py-6">
            <h2 class="text-2xl font-semibold mb-4">My List</h2>
            <x-watched-media :medias="$watchMedias"/>
        </div>
        <div class="py-6">
            <h2 class="text-2xl font-semibold mb-4">Top 10 TV Shows in Belgium Today</h2>
            <x-trending-media :top10Media="$top10Media"/>
        </div>

        <div class="py-6">
            <h2 class="text-2xl font-semibold mb-4">Top TV Shows & Movies</h2>
            <div
                class="mx-auto grid max-w-7xl grid-cols-1 gap-1 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-4">
                @foreach($medias as $key => $media)
                    <!-- Card - {{ $key + 1 }} -->
                    <div class="relative aspect-[3/2] flex-shrink-0">
                        <div class="w-96 flex-shrink-0">
                            <img src="{{ $media->image_url ?? 'https://placehold.co/300x450.png?text=No-Image' }}"
                                 alt="{{ $media->title }}" class="aspect-[3/2] w-96 object-cover rounded-md"/>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-app-layout>
