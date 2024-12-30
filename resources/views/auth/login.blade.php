@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-center text-green-600">Login</h2>

    <form method="POST" action="{{ route('login.proses') }}">
        @csrf

        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="w-full p-3 border border-gray-300 rounded-lg" required autofocus>
        </div>

        <div class="mb-6">
            <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
            <input type="password" name="password" id="password" class="w-full p-3 border border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-6 flex items-center justify-between">
            <label for="remember" class="flex items-center text-sm text-gray-700">
                <input type="checkbox" name="remember" id="remember" class="mr-2"> Remember Me
            </label>
            <a href="{{ route('password.request') }}" class="text-sm text-green-600 hover:underline">Forgot Password?</a>
        </div>

        <button type="submit" class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition duration-200">Login</button>
    </form>
</div>
@endsection
