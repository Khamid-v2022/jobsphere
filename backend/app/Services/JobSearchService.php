<?php

namespace App\Services;
use App\Repositories\JobRepository;

class JobSearchService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        private JobRepository $repository
    ) {}

    public function search(array $filters)
    {
        return $this->repository->search($filters);
    }
}
