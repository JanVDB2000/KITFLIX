<div class="px-10 pt-24">
    <div class="flex justify-start items-center">
        <h1 class="text-balance text-4xl font-bold tracking-tight text-white sm:text-7xl">
            TV Shows
        </h1>
        <div class="mx-10">
            <div class="mt-2 grid grid-cols-1">
                <select
                    id="genre"
                    name="genre"
                    wire:model.live="selectedGenre"
                    class="w-full appearance-none rounded-md bg-netflixBlack py-1.5 pl-3 pr-8 text-lg text-white outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-netflixRed sm:text-sm/6"
                >
                    <option value="">Select Genre</option>
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="p-10 mx-auto">
        <div class="py-6">
            <div class="mx-auto mt-20 grid max-w-7xl grid-cols-1 gap-2 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-4">
                @foreach($medias as $key => $media)
                    <!-- Card - {{ $key + 1 }} -->
                    <div class="relative aspect-[3/2] flex-shrink-0">
                        <div class="w-96 flex-shrink-0">
                            <img src="{{ $media->image_url ?? 'https://placehold.co/300x450.png?text=No-Image' }}" alt="{{ $media->title }}" class="aspect-[3/2] w-96 object-cover rounded-md"/>
                        </div>
                    </div>
                @endforeach
            </div>
            @if(count($medias)<=0)
                <p class="text-white text-4xl text-center mx-auto">No TV shows found for this genre.</p>
            @endif
        </div>
    </div>
</div>
