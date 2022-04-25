<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\DateTime;
use Whitecube\NovaFlexibleContent\Flexible;

class MonthlyUpdate extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\MonthlyUpdate::class;

    public static $group = 'Admin Tools';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make('Title')->sortable(),
            Text::make('Slug')
                ->hideFromIndex()
                ->sortable()
                ->readonly(),
            DateTime::make('Published At'),
            Flexible::make('Sections')
                ->addLayout('Monthly Update', 'simple-text', [
                    Text::make('Title'),
                    Code::make('Body'),
                ])
                ->addLayout('Spotlight section', 'text-with-image', [
                    Text::make('Title'),
                    Image::make('Image', 'image', \Storage::getDefaultDriver())
                        //->rules('mimes:gif,jpeg,png,svg')
                        ->storeOriginalName('attachment_name')
                        ->path(getSubDomain($request)),
                    Text::make('Caption'),
                    Code::make('Body'),
                ]),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     *
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
     *
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     *
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
     *
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
