<?php

namespace App\Services;

class CreateJobService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function execute(array $data)
    {
        return DB::transaction(function () use ($data) {

            $job = Job::create($data);

            event(new JobCreated($job));

            return $job;
        });
    }
}
