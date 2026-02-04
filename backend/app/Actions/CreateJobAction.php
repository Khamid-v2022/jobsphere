<?php
namespace App\Actions;

use App\Repositories\JobRepository;
use App\Events\JobCreated;
use App\Models\Job;
use Illuminate\Support\Facades\DB;

class CreateJobAction
{
    public function __construct(
        private JobRepository $repository
    ) {}

    public function execute(array $data): Job
    {
        return DB::transaction(function () use ($data) {
            $job = $this->repository->create($data);

            event(new JobCreated($job));

            return $job;
        });
    }
}