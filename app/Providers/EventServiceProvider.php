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
use App\Observers\UuidObserver;
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
    }

    public function registerUuidObservers()
    {
        User::observe(app(UuidObserver::class));
        UserAddresses::observe(app(UuidObserver::class));
        Category::observe(app(UuidObserver::class));
        Country::observe(app(UuidObserver::class));
        State::observe(app(UuidObserver::class));
        City::observe(app(UuidObserver::class));
        Product::observe(app(UuidObserver::class));
        SystemSettings::observe(app(UuidObserver::class));
        UserSettings::observe(app(UuidObserver::class));
    }
}
