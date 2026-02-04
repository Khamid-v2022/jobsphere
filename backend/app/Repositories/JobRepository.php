<?php

namespace App\Repositories;
use App\Models\Job;

class JobRepository
{
    public function create(array $data): Job
    {
        return Job::create($data);
    }

    public function find(int $id): Job
    {
        return Job::findOrFail($id);
    }

    public function search(array $filters)
    {
        return Job::query()
            ->when($filters['keyword'] ?? null, function ($q, $keyword) {
                $q->where('title', 'like', "%{$keyword}%");
            })
            ->where('status', 'open')
            ->latest()
            ->paginate(20);
    }
}
