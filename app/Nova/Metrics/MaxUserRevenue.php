<?php

namespace App\Nova\Metrics;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Partition;

class MaxUserRevenue extends Partition
{
    /**
     * Calculate the value of the metric.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        $allorders=Order::all();
        $users_array=[];
        foreach ($allorders as $order)
        {
            $username=User::find($order->user_id)->name;
            if(array_key_exists($username,$users_array)){
                $users_array[$username]=$users_array[$username]+$order->amount;
            }
            else{
                $users_array[$username]=$order->amount;
            }
        }
        // dd($products_array);
        arsort($users_array);
        return $this->result($users_array);
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
        return 'max-user-revenue';
    }

    public function name()
    {
        return 'Maximum Revenue by User - Total';
    }
}
