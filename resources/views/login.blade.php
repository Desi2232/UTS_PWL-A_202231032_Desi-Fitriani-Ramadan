@extends('layouts.main')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-[#D2D0A0]">
    <div class="w-full max-w-md bg-[#9EBC8A] rounded-2xl shadow-lg p-8 sm:p-10">
        <div class="flex flex-col items-center mb-6">
            <a href="#" class="flex items-center text-3xl font-bold text-gray-800 mb-2">
                <img src="{{ asset('/assets/login.png') }}" width="60" alt="logo" class="mr-3">
                <span>E-Perpus</span>
            </a>
            <h1 class="text-xl sm:text-2xl font-semibold text-center text-gray-800">Sign in to your account</h1>
        </div>
        <form class="space-y-5" method="POST" action="/login">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-800 mb-1">Email address</label>
                <input type="email" name="email" id="email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2A4759] focus:outline-none bg-white text-gray-800"
                    placeholder="name@gmail.com" required value="{{ old('email') }}">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-800 mb-1">Password</label>
                <input type="password" name="password" id="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2A4759] focus:outline-none bg-white text-gray-800"
                    placeholder="••••••••" required>
            </div>
            <button type="submit"
                class="w-full bg-[#2A4759] text-white py-2 rounded-lg hover:bg-[#1f3542] transition duration-200 font-medium text-sm">
                Sign in
            </button>
            <p class="text-center text-sm text-gray-800">
                Don’t have an account yet? 
                <a href="/register" class="text-[#2A4759] font-medium hover:underline">Sign up</a>
            </p>
        </form>
    </div>
</section>
@endsection
