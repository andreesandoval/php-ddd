<?php

namespace App\Providers;

use App\Application\CartService;
use App\Application\OrderService;
use App\Application\Ports\ICartService;
use App\Application\Ports\IOrderService;
use App\Domain\Ports\ICartRepository;
use App\Domain\Ports\IOrderRepository;
use App\Infrastructure\CartRepository;
use App\Infrastructure\OrderRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;

class AdaptersServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ICartRepository::class, CartRepository::class);

        $this->app->bind(IOrderRepository::class, OrderRepository::class);

        $this->app->bind(ICartService::class, function (Application $app) {
            return new CartService($app->make(ICartRepository::class));
        });        

        $this->app->bind(IOrderService::class, function (Application $app) {
            return new OrderService($app->make(IOrderRepository::class));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
