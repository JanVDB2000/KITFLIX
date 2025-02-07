<div>
    @if($showModal)
        <div class="fixed inset-0 flex items-center justify-center bg-netflixBlack z-50">
            <div class="p-6 rounded-xl text-white max-w-7xl shadow-lg">
                <h2 class="text-5xl font-bold text-center mb-4">Who's watching?</h2>
                <div class="grid grid-cols-3 gap-4 my-24">
                    @foreach($profiles as $profile)
                        <div class="flex flex-col items-center cursor-pointer" wire:click="selectProfile('{{ $profile->id }}')">
                            <img src="https://placehold.co/400x400" alt="{{ $profile->profile_name }}" class="w-40 h-40 rounded-lg shadow-lg">
                            <span class="mt-2 text-2xl">{{ $profile->profile_name }}</span>
                        </div>
                    @endforeach
                </div>
                <button class="mt-6 w-full bg-netflixRed hover:bg-red-700 py-2 rounded-lg text-white font-bold" wire:click="$set('showModal', false)">Cancel</button>
            </div>
        </div>
    @endif
</div>

