<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGatewayContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGatewayContract::class, function($app) {
            return new BankPaymentGateway('usd');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
