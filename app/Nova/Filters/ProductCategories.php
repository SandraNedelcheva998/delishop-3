<?php

namespace App\Nova\Filters;

use App\Models\Category;
use App\Nova\Product;
use Illuminate\Http\Request;
use Laravel\Nova\Filters\Filter;

class ProductCategories extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';

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
        return $query->whereHas('categories', function($q) use ($value){
            $q->where('category_id', '=', $value);
        })->get();
    }

    /**
     * Get the filter's available options.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function options(Request $request)
    {
      //  return [];
        $categories=Category::all();
        $category_names=[];
        foreach ($categories as $category){
           $category_names[$category->CategoryName]=$category->id;
        }
        return $category_names;
    }
}
