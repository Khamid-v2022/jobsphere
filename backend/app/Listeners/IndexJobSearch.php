<?php

namespace App\Listeners;

use App\Events\JobCreated;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class IndexJobSearch
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
        
    }

    /**
     * Handle the event.
     */
    public function handle(JobCreated $event): void
    {
        // later Elasticsearch / OpenSearch
        // For now - replace log
        logger()->info('Indexing job', [
            'job_id' => $event->job->id,
        ]);
    }
}
