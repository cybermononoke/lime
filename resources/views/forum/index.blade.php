@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col bg-gray-50 text-gray-900">

    <div class="flex-grow flex flex-col items-center pt-12">
        <div class="w-full max-w-xl space-y-4">
            <h1 class="text-4xl text-primary-500 mb-6" style="font-family: 'Archivo Black', sans-serif;">
                Forums
            </h1>

            <form action="{{ route('forum.store') }}" method="POST" class="space-y-4">
                @csrf
                <input type="text" name="title" placeholder="New Thread Title" class="input input--solid w-full" required>
                <button class="badge badge--surface w-full p-4">Create Thread</button>
            </form>

            @foreach ($threads as $thread)
            <div class="badge badge--outline badge--md w-full">
                <a href="{{ route('forum.show', $thread->id) }}">{{ $thread->title }}</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection