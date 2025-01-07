@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col bg-gray-50 text-gray-900">
    <div class="flex-grow flex flex-col justify-start items-center pt-12">
        <div class="w-full max-w-md space-y-6">
            <div class="text-center mb-8">
                <h1 class="text-4xl text-primary-500 mb-6" style="font-family: 'Archivo Black', sans-serif;">
                    Login
                </h1>
            </div>



            <form method="POST" action="{{ route('login') }}" class="space-y-6 bg-white p-8 rounded-lg shadow-md">
                @csrf

                <div class="space-y-2">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required class="input input--solid w-full">
                    @error('email')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <input id="password" type="password" name="password" placeholder="Password" required class="input input--solid w-full">
                    @error('password')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="badge badge--solid badge--md w-full">Login</button>
                </div>
            </form>

            <div>
                <h1 class="text-4xl text-primary-500 mb-6" style="font-family: 'Archivo Black', sans-serif;">
                    New here?
                </h1>
                <a href="{{ route('register') }}">
                    <button class="badge badge--solid badge--lg w-1/3">Register</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection