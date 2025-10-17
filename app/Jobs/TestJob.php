<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
class TestJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public $logMessage)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Log::critical('Queue Job: Hello2', ['message' => $this->logMessage, 'date' => now()]);
    }
}
