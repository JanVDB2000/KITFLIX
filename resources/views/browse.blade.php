<x-app-layout>
    <div class="relative w-full h-[700px] bg-cover bg-center" style="background-image: url('https://placehold.co/1600x900?text=Hello+World');">
        <livewire:layout.navigation />
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center p-10">
            <p class="text-5xl text-netflixRed">K <span class="text-2xl text-white">SERIES</span></p>
            <h1 class="text-5xl font-bold">Sweet Magnolias</h1>
            <p class="mt-2 text-lg">Teken ze, en je huwelijk met Bill Townsend is officieel voorbij.</p>
            <div class="mt-4">
                <a href="#" class="bg-netflixRed px-4 py-2 rounded font-bold mr-2">▶ Play</a>
                <button class="bg-gray-500 px-4 py-2 rounded">More Info</button>
            </div>
        </div>
    </div>
    <div class="px-10 my-10 mx-auto">
        <div class="py-6">
            <h2 class="text-2xl font-semibold mb-4">My List</h2>
            <div class="flex space-x-4 overflow-x-scroll">
                <img class="w-80 h-48 rounded-lg" src="https://placehold.co/200x150.png?text=tv-show" alt="Show">
                <img class="w-80 h-48 rounded-lg" src="https://placehold.co/200x150.png?text=series" alt="Series">
                <img class="w-80 h-48 rounded-lg" src="https://placehold.co/200x150.png?text=film" alt="Film">
            </div>
        </div>
        <div class="py-6">
            <h2 class="text-2xl font-semibold mb-4">Continue Watching for Claudine</h2>
            <div class="flex space-x-4 overflow-x-scroll">
                <img class="w-80 h-48 rounded-lg" src="https://placehold.co/200x150.png?text=drama" alt="Drama">
                <img class="w-80 h-48 rounded-lg" src="https://placehold.co/200x150.png?text=comedy" alt="Comedy">
                <img class="w-80 h-48 rounded-lg" src="https://placehold.co/200x150.png?text=action" alt="Action">
                <img class="w-80 h-48 rounded-lg" src="https://placehold.co/200x150.png?text=action" alt="Action">
                <img class="w-80 h-48 rounded-lg" src="https://placehold.co/200x150.png?text=action" alt="Action">
                <img class="w-80 h-48 rounded-lg" src="https://placehold.co/200x150.png?text=action" alt="Action">
                <img class="w-80 h-48 rounded-lg" src="https://placehold.co/200x150.png?text=action" alt="Action">
            </div>
        </div>
        <div class="py-6">
            <h2 class="text-2xl font-semibold mb-4">Top 10 TV Shows in Belgium Today</h2>
            <div class="flex space-x-4 overflow-x-scroll">

            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-app-layout>
