<?php

namespace App\Nova;

use Chaseconey\ExternalImage\ExternalImage;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Product::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
//    public static $title = 'id';
    public static $title = 'ProductName';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'ProductName'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            ExternalImage::make('Product Image','ProductImageURL')->width(32)->height(32)->rules('required'),
            Text::make('Product Name', 'ProductName')->sortable()->rules('required'),
            Number::make('Product Price', 'ProductPrice')->sortable()->onlyOnForms()->rules('required'),
            Text::make('Product Price', 'ProductPrice')->resolveUsing(function ($ProductPrice){
                return '€'.$ProductPrice;
            })->sortable()->exceptOnForms(),
            Number::make('Product Stock','ProductStock')->sortable()->rules('required'),

            Textarea::make('Product Description','ProductDescription')->hideFromIndex()->rules('required'),
            Textarea::make('Product Ingredients','ProductIngredients')->hideFromIndex()->rules('required'),

            BelongsToMany::make('categories'),
            HasMany::make('comments'),
            ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new Filters\ProductStock,
            new Filters\ProductCategories
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
