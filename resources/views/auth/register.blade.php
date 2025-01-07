@extends('layouts.app')

@section('content')

<h1 class="text-4xl text-primary-500 mb-6" style="font-family: 'Archivo Black', sans-serif;">
    Register
</h1>

<form method="POST" action="{{ route('register') }}" class="space-y-6 bg-white p-8 rounded-lg shadow-md w-full max-w-md mx-auto">
    @csrf

    <div class="space-y-2">
        <input placeholder="Name" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus class="input input--solid w-full">
        @error('name')
        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="space-y-2">
        <input placeholder="Email" id="email" type="email" name="email" value="{{ old('email') }}" required class="input input--solid w-full">
        @error('email')
        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="space-y-2">
        <input placeholder="Password" id="password" type="password" name="password" required class="input input--solid w-full">
        @error('password')
        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="space-y-2">
        <input placeholder="Password Confirmation" id="password_confirmation" type="password" name="password_confirmation" required class="input input--solid w-full">
        @error('password_confirmation')
        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <button type="submit" class="badge badge--solid badge--md w-full">Register</button>
    </div>

    @if ($errors->any())
    <div class="mt-4">
        @foreach ($errors->all() as $error)
        <p class="text-sm text-red-500 mt-1">{{ $error }}</p>
        @endforeach
    </div>
    @endif
</form>
@endsection