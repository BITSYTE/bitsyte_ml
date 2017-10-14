<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Product;
use App\Models\State;
use App\Models\SystemSettings;
use App\Models\User;
use App\Models\UserAddresses;
use App\Models\UserSettings;
use App\Models\Wallet;
use App\Observers\UuidObserver;
use App\Observers\WalletObserver;
use Illuminate\Support\Facades\Event;
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
    }

    public function registerUuidObservers()
    {
        collect($this->models)->each(function($model) {
            /** @var \Illuminate\Database\Eloquent\Model $model */
            $model::observe(app(UuidObserver::class));
        })->only('wallet')->each(function($model){
            /** @var \Illuminate\Database\Eloquent\Model $model */
            $model::observe(app(WalletObserver::class));
        });
    }
}
