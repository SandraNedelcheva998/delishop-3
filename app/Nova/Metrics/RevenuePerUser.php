<?php

namespace App\Nova\Metrics;

use App\Models\Order;
use App\Models\User;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Partition;

class RevenuePerUser extends Partition
{
    /**
     * Calculate the value of the metric.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        return $this->sum($request, Order::class, 'amount','user_id')->label(function ($value) {
            $user=User::find($value);
            return $user->name;
        })->colors([
            User::find(1)->name => '#6ab04c',
            User::find(2)->name => 'rgb(72,52,212)',
        ]);
    }

    /**
     * Determine for how many minutes the metric should be cached.
     *
     * @return  \DateTimeInterface|\DateInterval|float|int
     */
    public function cacheFor()
    {
        // return now()->addMinutes(5);
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'revenue-per-user';
    }
}
