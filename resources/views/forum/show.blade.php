@extends('layouts.app')
@section('content')
<div class="min-h-screen flex flex-col bg-gray-50 text-gray-900">
    <div class="flex-grow flex flex-col items-center pt-12">
        <div class="w-full max-w-xl space-y-4">
            <h1 class="text-4xl text-primary-500 mb-6" style="font-family: 'Archivo Black', sans-serif;">
                {{$thread->title}}
            </h1>

            <div class="space-y-4">
                @foreach ($thread->posts as $post)
                <div class="badge badge--surface w-full">
                    <p>{{ $post->content }}</p>
                </div>
                @endforeach
            </div>

            <form action="{{ route('thread.storePost', $thread->id) }}" method="POST" class="space-y-4 mt-6">
                @csrf
                <textarea name="content" placeholder="Write your post..." class="input input--solid w-full" required></textarea>
                <button type="submit" class="badge badge--solid badge--md w-full">Post Reply</button>
            </form>
        </div>
    </div>
</div>
@endsection