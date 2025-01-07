<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $threads = Thread::all();
        return view('forum.index', compact('threads'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Thread::create([
            'title' => $request->title,
        ]);

        return redirect()->route('forum.index');
    }
}
