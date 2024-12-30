@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-center text-green-600">Forgot Your Password?</h2>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="w-full p-3 border border-gray-300 rounded-lg" required autofocus>
        </div>

        <button type="submit" class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition duration-200">Send Reset Link</button>
    </form>
</div>
@endsection
