@extends('layouts.app')
@section('content')
<div class="min-h-screen flex flex-col bg-gray-50 text-gray-900">
    <div class="flex-grow flex flex-col justify-between pb-20">
        <div class="w-full max-w-3xl mx-auto space-y-6 px-4 pt-12">
            <h1 class="text-4xl text-primary-500 mb-6" style="font-family: 'Archivo Black', sans-serif;">
                {{$thread->title}}
            </h1>

            <div class="space-y-4">
                @foreach ($thread->posts as $post)
                <div class="badge badge--surface w-full p-4 bg-white shadow-md rounded-lg">
                    <div class="flex items-start justify-between mb-2">
                        <div class="text-sm text-gray-500">
                            Posted by {{ $post->user->name }}
                            <span class="mx-1">•</span>
                            {{ $post->created_at->diffForHumans() }}
                        </div>
                    </div>
                    <p class="text-gray-700">{{ $post->content }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="w-full max-w-3xl mx-auto px-4 pb-6 mt-auto">
        <form action="{{ route('thread.storePost', $thread->id) }}" method="POST" class="space-y-4">
            @csrf
            <textarea
                name="content"
                placeholder="Write your post..."
                class="input input--solid w-full h-32 p-4"
                required
                onkeydown="if(event.key === 'Delete' || event.key === 'Backspace') return false;"></textarea>
            <button class="badge badge--surface w-full p-4">Post</button>
        </form>
    </div>
</div>
@endsection