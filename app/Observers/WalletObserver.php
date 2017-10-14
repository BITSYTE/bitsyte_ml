<?php
/**
 * Created by PhpStorm.
 * User: polh
 * Date: 12/10/2017
 * Time: 12:39 AM
 */

namespace App\Observers;


use App\Jobs\CreateUserWalletJob;
use App\Models\Wallet;

class WalletObserver
{
    public function created(Wallet $wallet){
        CreateUserWalletJob::dispatch($wallet);
    }
}