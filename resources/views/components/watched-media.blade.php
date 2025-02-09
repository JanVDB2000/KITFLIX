<div x-data="{ isDown: false, startX: 0, scrollLeft: 0 }"
     class="flex space-x-4 overflow-x-auto cursor-grab active:cursor-grabbing scrollbar-hide"
     @mousedown="isDown = true; startX = $event.pageX - $el.offsetLeft; scrollLeft = $el.scrollLeft"
     @mouseleave="isDown = false"
     @mouseup="isDown = false"
     @mousemove="if (!isDown) return; $event.preventDefault(); let x = $event.pageX - $el.offsetLeft; let walk = (x - startX) * 2; $el.scrollLeft = scrollLeft - walk;">
    @foreach($medias as $key => $media)
        <!-- Card - {{ $key+1 }} -->
        <div class="w-96 flex-shrink-0">
            <img src="{{$media->media()->first()->image_url ?? 'https://placehold.co/300x450.png?text=No-Image'}}" alt="{{$media->media()->first()->title}}" class="aspect-[3/2] w-96 object-cover rounded-md"/>
        </div>
    @endforeach
</div>
