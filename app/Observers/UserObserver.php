<?php
/**
 * Created by PhpStorm.
 * User: polh
 * Date: 12/10/2017
 * Time: 01:02 AM
 */

namespace App\Observers;


use App\Jobs\CreateUserWalletFromUserJob;
use App\Jobs\CreateUserWalletFromWalletJob;
use App\Models\User;
use App\Models\Wallet;

class UserObserver
{
    public function created(User $user)
    {
        CreateUserWalletFromUserJob::dispatch($user);
    }
}