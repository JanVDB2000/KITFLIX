<div x-data="{ isDown: false, startX: 0, scrollLeft: 0 }"
     class="flex space-x-4 overflow-x-auto cursor-grab active:cursor-grabbing scrollbar-hide"
     @mousedown="isDown = true; startX = $event.pageX - $el.offsetLeft; scrollLeft = $el.scrollLeft"
     @mouseleave="isDown = false"
     @mouseup="isDown = false"
     @mousemove="if (!isDown) return; $event.preventDefault(); let x = $event.pageX - $el.offsetLeft; let walk = (x - startX) * 2; $el.scrollLeft = scrollLeft - walk;">
    @foreach($top10Media as $key => $media)
        <!-- Card - {{ $key+1 }} -->
        <div class="relative aspect-[3/2] flex-shrink-0">
            <div class="w-96 flex-shrink-0">
                <img src="{{$media->image_url ?? 'https://placehold.co/300x450.png?text=No-Image'}}" alt="{{$media->title}}" class="aspect-[3/2] w-96 object-cover rounded-md"/>
            </div>
            <div
                class="absolute top-2 left-2 bg-black bg-opacity-60 rounded-full px-2 py-1 text-7xl font-bold text-netflixRed">
                {{ $key+1 }}
            </div>
        </div>
    @endforeach
</div>
