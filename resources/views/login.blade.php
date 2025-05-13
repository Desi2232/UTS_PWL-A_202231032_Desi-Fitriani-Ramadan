@extends('layouts.main')

@section('content')
<section style="background-color: #D2D0A0;">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
            <img src="{{ asset('/assets/login.png') }}" width="60" alt="logo">
            <span class="font-bold text-xl tracking-wide ml-3 text-gray-800">E-Perpus</span>
        </a>
        <div class="w-full rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0" style="background-color: #9EBC8A;">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-800 md:text-2xl text-center">
                    Sign in to your account
                </h1>
                <form class="space-y-4 md:space-y-6" method="POST" action="/login">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="name@gmail.com" required value="{{ old('email') }}">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            required>
                    </div>
                    <button type="submit"
                        class="w-full text-white"
                        style="background-color: #2A4759; border-radius: 0.5rem; padding: 0.625rem 1.25rem; font-size: 0.875rem; font-weight: 500;">                        
                        Sign in
                    </button>
                    <p class="text-sm font-light text-black">
                        Don’t have an account yet? 
                        <a href="/register" style="color: #2A4759; padding: 2px 4px; border-radius: 4px;" class="font-medium hover:underline">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection