<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return Job::latest()->paginate(10);
    }

    public function show($id)
    {
        return Job::findOrFail($id);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $job = Job::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => 1,
        ]);

        return response()->json($job, 201);
    }
}
