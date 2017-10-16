<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Wallet;
use App\Models\Product;
use App\Models\BinaryTree;
use App\Observers\UserObserver;
use App\Observers\UuidObserver;
use App\Observers\WalletObserver;
use Illuminate\Support\Facades\Event;
use App\Observers\BinaryTreeObserver;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array[Illuminate\Database\Eloquent\Model]
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * @var $models \Illuminate\Database\Eloquent\Model[]
     */
    protected $models = [
        'user' => User::class,
        'product' => Product:: class,
        'wallet' => Wallet::class,
        'binary' => BinaryTree::class,
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        $this->registerUuidObservers();
        $this->registerBinaryTreeObservers();

        User::observe(UserObserver::class);
        Wallet::observe(WalletObserver::class);
    }

    public function registerUuidObservers()
    {
        collect($this->models)->except('binary')->each(function($model) {
            /** @var \Illuminate\Database\Eloquent\Model $model */
            $model::observe(app(UuidObserver::class));
        });
    }

    public function registerBinaryTreeObservers()
    {
        collect($this->models)->only('binary')->each(function($model){
            /** @var \Illuminate\Database\Eloquent\Model $model */
            $model::observe(app(BinaryTreeObserver::class));
        });
    }
}
