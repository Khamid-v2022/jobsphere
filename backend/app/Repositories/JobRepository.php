<?php

namespace App\Repositories;

class JobRepository
{
    /**
     * Create a new class instance.
     */
    // public function __construct()
    // {
    //     //
    // }

    public function create(array $data)
    {
        return Job::create($data);
    }

    public function search(array $filters)
    {
        return Job::query();
    }
}
