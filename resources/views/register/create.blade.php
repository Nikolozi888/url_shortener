@extends('components.layout')
@section('content')
        <div class="grid place-items-center mt-20">
            <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Register</h1>
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Full Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                        <input type="password" id="password" name="password" required
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="mb-6">
                        <button type="submit"
                            class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Register</button>
                    </div>
                </form>
            </div>
        </div>

@endsection
