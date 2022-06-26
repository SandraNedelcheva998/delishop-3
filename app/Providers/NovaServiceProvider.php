<?php

namespace App\Providers;

use App\Nova\Metrics\MaxProduct;
use App\Nova\Metrics\MaxUserRevenue;
use App\Nova\Metrics\NewOrders;
use App\Nova\Metrics\OrdersPerDay;
use App\Nova\Metrics\OrdersPerUser;
use App\Nova\Metrics\Revenue;
use App\Nova\Metrics\RevenuePerDay;
use App\Nova\Metrics\RevenuePerUser;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
                'admin@admin.com'
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            new NewOrders,
            new Revenue,
            new OrdersPerDay,
            new RevenuePerDay,
            new OrdersPerUser,
            new RevenuePerUser,
            (new MaxProduct)->width('1/2'),
            (new MaxUserRevenue)->width('1/2'),
//            new Help
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
