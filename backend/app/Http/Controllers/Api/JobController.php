<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function store(StoreJobRequest $request)
    {
        return $this->createJobService->execute(
            $request->validated()
        );
    }
}
