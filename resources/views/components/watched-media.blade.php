<div class="flex space-x-4 overflow-x-auto">
    @foreach($medias as $key => $media)
        <!-- Card - {{ $key+1 }} -->
        <div class="w-92 flex-shrink-0">
            <img src="{{$media->image_url}}" alt="{{$media->title}}" class="aspect-[3/2] w-full object-cover rounded-md"/>
        </div>
    @endforeach
</div>
