<?php

namespace App\Providers;

use App\Service\PaymentGatewaySettingService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class PaymentGatewaySettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(PaymentGatewaySettingService::class, function() {
            return new PaymentGatewaySettingService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if (!app()->runningInConsole() || Schema::hasTable('payment_settings')) {
            $paymentGatewaySetting = $this->app->make(PaymentGatewaySettingService::class);
            $paymentGatewaySetting->setGlobalSettings();
        }
    }
}
