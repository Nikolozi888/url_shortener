<header class="bg-white p-10 shadow-md flex justify-between items-center">

    <a href="/" class="text-2xl font-serif text-orange-600">URLshortener</a>
    <nav class="flex items-center space-x-4 text-gray-700">
        <a href="#" class="hover:text-orange-500 text-lg text-blue-700">Shortener</a>
        <a href="#" class="hover:text-orange-500 text-lg text-blue-700">Shortener</a>
        <a href="#" class="hover:text-orange-500">Shortener</a>
        <a href="#" class="hover:text-orange-500">Shortener</a>
        <a href="#" class="hover:text-orange-500">Shortener</a>
        <a href="#" class="hover:text-orange-500">Shortener</a>
        <a href="#" class="hover:text-orange-500">Shortener</a>
    </nav>
    @guest
        <div>
            <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-500 text-2xl underline">Login</a>
            <a href="{{ route('register') }}" class="text-gray-700 hover:text-blue-500 text-2xl underline">Register</a>
        </div>
    @endguest


    @auth
        <div class="">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="bg-blue-500 text-white text-lg p-2 font-semibold rounded-xl" type="submit">Logout</button>
            </form>
        </div>
    @endauth

</header>
