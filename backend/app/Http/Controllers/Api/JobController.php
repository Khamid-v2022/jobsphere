<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Job;

use Illuminate\Http\Request;
use App\Http\Requests\StoreJobRequest;

use App\Actions\CreateJobAction;
use App\Services\JobSearchService;


class JobController extends Controller
{
    public function index(Request $request, JobSearchService $service)
    {
        return response()->json(
            $service->search($request->all())
        );
    }

    public function show($id)
    {
        return Job::findOrFail($id);
    }

    public function store(StoreJobRequest $request, CreateJobAction $action)
    {
        $job = $action->execute($request->validated());
        return response()->json($job, 201);
    }
}
