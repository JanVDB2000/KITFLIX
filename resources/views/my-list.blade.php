<x-app-layout>
    <livewire:layout.navigation />
    <div class="px-10 pt-24">
        <div class="flex justify-start items-center">
            <h1 class="text-balance text-4xl font-bold tracking-tight text-white sm:text-7xl">
                My list
            </h1>
        </div>
        <div class="p-10 mx-auto">
            <div class="py-6">
                <div class="mx-auto mt-20 grid max-w-7xl grid-cols-1 gap-2 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-4">
                    @foreach($watchMedias as $key => $media)
                        <!-- Card - {{ $key + 1 }} -->
                        <div class="relative aspect-[3/2] flex-shrink-0">
                            <div class="w-96 flex-shrink-0">
                                <img src="{{$media->media()->first()->image_url ?? 'https://placehold.co/300x450.png?text=No-Image'}}" alt="{{$media->media()->first()->title}}" class="aspect-[3/2] w-96 object-cover rounded-md"/>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if(count($watchMedias)<=0)
                    <p class="text-white text-4xl text-center mx-auto">No List items found for this genre.</p>
                @endif
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-app-layout>
