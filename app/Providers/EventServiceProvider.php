<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use App\Models\UserAddresses;
use app\Observers\UuidOserver;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
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
        //
    }

    public function registerUuidObservers()
    {
        User::observe(UuidOserver::class);
        UserAddresses::observe(UuidOserver::class);
        Category::observe(UuidOserver::class);
        Country::observe(UuidOserver::class);
        State::observe(UuidOserver::class);
        City::observe(UuidOserver::class);
    }
}
