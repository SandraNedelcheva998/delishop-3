<?php

namespace App\Nova\Filters;

use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

class ProductStock extends Filter
{

    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';
    protected $threshold=5;
        /**
     * Apply the filter to the given query.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(Request $request, $query, $value)
    {
        if($value==$this->threshold)
        {
            return $query->where('ProductStock','<=',$value);
        }
        else{
            return $query->where('ProductStock','>=',$value);

        }
        return $query;
    }

    /**
     * Get the filter's available options.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function options(Request $request)
    {
        return [
            'Low Stock'=>$this->threshold,
            'In Stock'=>$this->threshold+1
        ];
    }
}
