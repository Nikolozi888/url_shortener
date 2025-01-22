@extends('components.layout')
@section('content')
    <div class="container mx-auto w-2/4 px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Login</h1>
        <form action="{{ route('login.store') }}" method="POST" class="bg-white p-6 shadow rounded">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">email</label>
                <input type="email" name="email" id="email"
                    class="mt-1 p-3 block w-full border-gray-300 rounded-md shadow-lg">
                @error('email')
                    <p class="danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">
                    <label for="password" class="block text-sm font-medium text-gray-700">password</label>
                    <input type="password" name="password" id="password"
                        class="mt-1 p-3 block w-full border-gray-300 rounded-md shadow-lg">
                    @error('email')
                        <p class="danger">{{ $message }}</p>
                    @enderror
            </div>
            <div class="flex items-center justify-between mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="remember" class="form-checkbox">
                    <span class="ml-2 text-sm text-gray-600">remember</span>
                </label>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded shadow">login</button>
        </form>
    </div>
@endsection
