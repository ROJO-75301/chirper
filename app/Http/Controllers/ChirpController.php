<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = Chirp::with('user')
            ->latest()
            ->take(50)
            ->get();

        return view('home', ['chirps' => $chirps]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
        'message' => 'required|string|max:255',
        ]);

    // Create the chirp (no user for now - we'll add auth later)
        \App\Models\Chirp::create([
            'message' => $validated['message'],
            'user_id' => null, // We'll add authentication in lesson 11
        ]);

        // Redirect back to the feed
        return redirect('/')->with('success', 'Chirp created!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}