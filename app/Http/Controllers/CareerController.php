<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career::where('status', 'active')->select('id', 'category', 'position', 'location', 'description', 'status', 'created_at')->get();

        return view('careers.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('careers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'experience' => 'nullable|string|max:255',
            'skills' => 'nullable|string|max:255',
            'location' => 'required|string|max:255',
            'salary' => 'nullable|string|max:255',
            'description' => 'required|string',
            'status' => 'required|string|max:10',
        ]);

        Career::create([
            'category' => $request->input('category'),
            'position' => $request->input('position'),
            'experience' => $request->input('experience'),
            'skills' => $request->input('skills'),
            'location' => $request->input('location'),
            'salary' => $request->input('salary'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('careers.index')->with('success', 'Career created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $career = Career::findOrFail($id);

        return view('careers.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $career = Career::findOrFail($id);

        $request->validate([
            'category' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'experience' => 'nullable|string|max:255',
            'skills' => 'nullable|string|max:255',
            'location' => 'required|string|max:255',
            'salary' => 'nullable|string|max:255',
            'description' => 'required|string',
            'status' => 'required|string|max:10',
        ]);

        $career->update([
            'category' => $request->input('category'),
            'position' => $request->input('position'),
            'experience' => $request->input('experience'),
            'skills' => $request->input('skills'),
            'location' => $request->input('location'),
            'salary' => $request->input('salary'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('careers.index')->with('success', 'Career updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $career = Career::findOrFail($id);
        $career->delete();

        return redirect()->route('careers.index')->with('success', 'Career deleted successfully!');
    }
}
