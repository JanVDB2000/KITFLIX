<nav>
    @auth
        <a
            href="{{ url('/dashboard') }}"
            class="bg-netflixRed rounded-md mx-2 p-2 shadow-sm hover:bg-gray-100"
        >
            Dashboard
        </a>
    @else
        <a
            href="{{ route('login') }}"
            class="bg-netflixRed rounded-md mx-2 p-2 shadow-sm hover:bg-gray-100"
        >
            Inloggen
        </a>
    @endauth
</nav>
