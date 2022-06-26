<?php

namespace App\Nova\Metrics;

use App\Models\Order;
use App\Models\Product;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Partition;

class MaxProduct extends Partition
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
        $products_array=[];
        foreach ($allorders as $order)
        {
            $cartitems=$order->cartitems;
            foreach ($cartitems as $cartitem)
            {
                $product_name=Product::find($cartitem->product_id)->ProductName;
                if(array_key_exists($product_name,$products_array)){
                    $products_array[$product_name]=$products_array[$product_name]+$cartitem->quantity;
                }
                else{
                    $products_array[$product_name]=$cartitem->quantity;
                }
            }
        }
        arsort($products_array);
        return $this->result($products_array);
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
        return 'max-product';
    }
}
