@extends('components.layout')
@section('content')
    @auth
        <div class="grid place-items-center mt-20">
            <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-lg">
                <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">URL Shortener</h1>

                <form action="{{ route('shorten.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                    <div>
                        <label for="url" class="block text-lg text-gray-700 mb-2">Enter URL:</label>
                        <input type="url" id="url" name="original_url"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="https://example.com" required>
                        @error('original_url')
                            {{ $message }}
                        @enderror
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Shorten URL
                        </button>
                    </div>
                </form>

                @if (session('short_url'))
                    <div class="mt-6 text-center">
                        <p class="text-lg text-gray-700">Your shortened URL:</p>
                        <a href="{{ session('short_url') }}" target="_blank"
                            class="text-blue-600 font-semibold">{{ session('short_url') }}</a>
                    </div>
                @endif
            </div>
        </div>

    @endauth


    @guest
        <h1 class="grid place-items-center mt-20 text-3xl">For short Link go to Login</h1>
    @endguest
@endsection
