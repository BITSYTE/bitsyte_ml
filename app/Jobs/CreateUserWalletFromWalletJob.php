<?php

namespace App\Jobs;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateUserWalletFromWalletJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $wallet;

    /**
     * Create a new job instance.
     *
     * @param Wallet $wallet
     */
    public function __construct(Wallet $wallet)
    {
        $this->wallet = $wallet;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $wallet = $this->wallet;
        User::orderBy('id')->chunk(100, function ($users) use ($wallet) {
            foreach ($users as $user) {
                if ($user->wallets()->where('wallet_id', $wallet->id)->count() == 0) {
                    $user->wallets()->attach($wallet->id, [
                        'balance' => 0,
                        'status' => 'active'
                    ]);
                }
            }
        });
    }
}
