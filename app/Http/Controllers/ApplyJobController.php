<?php

namespace App\Http\Controllers;

use App\Models\ApplyJob;
use App\Models\Career;
use Illuminate\Http\Request;

class ApplyJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applyJobs = ApplyJob::with('career:id,category')->select('id', 'careers_id', 'name', 'email', 'phone_no', 'created_at')->get();

        return view('apply-jobs.index', compact('applyJobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $careers = Career::select('id', 'category')->get();

        return view('apply-jobs.create', compact('careers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'careers_id' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_no' => 'required|string|max:20',
            'summary' => 'nullable|string|max:500',
            'resume' => 'required',
        ]);

        $resumePath = $request->file('resume')->store('resumes', 'public');

        ApplyJob::create([
            'careers_id' => $request->input('careers_id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_no' => $request->input('phone_no'),
            'summary' => $request->input('summary'),
            'resume' => $resumePath,
        ]);

        return redirect()->route('apply-jobs.index')->with('success', 'Career created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $applyJobs = ApplyJob::findOrFail($id);
        $careers = Career::select('id', 'category')->get();

        return view('apply-jobs.edit', compact('applyJobs', 'careers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $applyJobs = ApplyJob::findOrFail($id);

        $request->validate([
            'careers_id' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_no' => 'required|string|max:20',
            'summary' => 'nullable|string|max:500',
            'resume' => 'required',
        ]);

        $resumePath = $request->file('resume')->store('resumes', 'public');

        $applyJobs->update([
            'careers_id' => $request->input('careers_id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_no' => $request->input('phone_no'),
            'summary' => $request->input('summary'),
            'resume' => $resumePath,
        ]);

        return redirect()->route('apply-jobs.index')->with('success', 'Career updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $applyJob = ApplyJob::findOrFail($id);
        $applyJob->delete();

        return redirect()->route('apply-jobs.index')->with('success', 'Career deleted successfully!');
    }
}
