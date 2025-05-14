@extends('layouts.main')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-[#D2D0A0] px-4">
    <div class="w-full max-w-md bg-[#9EBC8A] rounded-xl shadow-lg p-6 space-y-6">
        <div class="flex flex-col items-center">
            <a href="#" class="flex items-center mb-4">
                <img src="{{ asset('/assets/login.png') }}" width="60" alt="E-Perpus Logo" class="mr-3">
                <span class="text-2xl font-bold text-gray-800 tracking-wide">E-Perpus</span>
            </a>
            <h1 class="text-2xl font-bold text-gray-800 text-center">Sign Up</h1>
        </div>

        <form action="/register" method="POST" class="space-y-4">
            @csrf

            {{-- Full Name --}}
            <div>
                <label for="fullName" class="block mb-1 text-sm font-medium text-gray-900">Full Name</label>
                <input type="text" name="name" id="fullName"
                    class="w-full p-2.5 text-sm rounded-lg border 
                    @error('name') border-rose-500 @else border-gray-300 @enderror 
                    focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Diana Aldebaran" required value="{{ old('name') }}">
                @error('name')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Username --}}
            <div>
                <label for="username" class="block mb-1 text-sm font-medium text-gray-900">Username</label>
                <input type="text" name="username" id="username"
                    class="w-full p-2.5 text-sm rounded-lg border 
                    @error('username') border-rose-500 @else border-gray-300 @enderror 
                    focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Diana01" required value="{{ old('username') }}">
                @error('username')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div>
                <label for="email" class="block mb-1 text-sm font-medium text-gray-900">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full p-2.5 text-sm rounded-lg border 
                    @error('email') border-rose-500 @else border-gray-300 @enderror 
                    focus:ring-blue-500 focus:border-blue-500"
                    placeholder="name@company.com" required value="{{ old('email') }}">
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label for="password" class="block mb-1 text-sm font-medium text-gray-900">Password</label>
                <input type="password" name="password" id="password"
                    class="w-full p-2.5 text-sm rounded-lg border 
                    @error('password') border-rose-500 @else border-gray-300 @enderror 
                    focus:ring-blue-500 focus:border-blue-500"
                    placeholder="••••••••" required>
                @error('password')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit --}}
            <button type="submit"
                class="w-full bg-[#2A4759] text-white py-2.5 rounded-lg font-medium text-sm hover:bg-[#203847] transition duration-200">
                Sign Up
            </button>

            {{-- Sign In Link --}}
            <p class="text-sm text-center text-gray-800">
                Already have an account?
                <a href="/login" class="text-[#2A4759] font-semibold hover:underline ml-1">Sign In</a>
            </p>
        </form>
    </div>
</section>
@endsection
