<?php
namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function show(Thread $thread)
    {
        return view('forum.show', compact('thread'));
    }

    public function storePost(Request $request, Thread $thread)
    {
        $request->validate([
            'content' => 'required|string|max:5000',
        ]);

        $thread->posts()->create([
            'content' => $request->content,
        ]);

        return redirect()->route('forum.show', $thread->id);
    }
}
