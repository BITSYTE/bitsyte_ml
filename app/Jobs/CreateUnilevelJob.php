<?php

namespace App\Jobs;

use App\Models\UnilevelTree;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateUnilevelJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    protected $sponsor;

    /**
     * Create a new job instance.
     *
     * @param User $user
     * @param User $sponsor
     */
    public function __construct(User $user, User $sponsor)
    {
        $this->user = $user;
        $this->sponsor = $sponsor;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if (UnilevelTree::whereUserId($this->user->id)->count() == 0) {
            $this->user->unilevelNode()->create([
                'parent_id' => $this->sponsor->id,
                'status' => 'active'
            ]);
        }
    }
}
