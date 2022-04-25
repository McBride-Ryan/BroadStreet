<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\BelongsTo;

class Pin extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Pin::class;

    public static $group = 'Resource Pages';

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
        'id', 'page',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param Request $request
     *
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->showOnIndex(false),
            Select::make('Page')
                ->options(['home' => 'Home', 'associations' => 'Associations', 'marketers' => 'B2B Marketers', 'thankyou' => 'Thank You Pages'])
                ->sortable()
                ->rules('required')
                ->creationRules('unique:App\Models\Pin,page')
                ->updateRules('unique:App\Models\Pin,page,{{resourceId}}')
                ->displayUsingLabels(),

            BelongsTo::make('Slot One', 'slotOneResource', \LeadMarvels\Leadgen\Nova\SiteResource::class)
                ->withoutTrashed(),
            BelongsTo::make('Slot Two', 'slotTwoResource', \LeadMarvels\Leadgen\Nova\SiteResource::class)
                ->withoutTrashed()
                ->nullable(),
            BelongsTo::make('Slot Three', 'slotThreeResource', \LeadMarvels\Leadgen\Nova\SiteResource::class)
                ->withoutTrashed()
                ->nullable(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param Request $request
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
     * @param Request $request
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
     * @param Request $request
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
     * @param Request $request
     *
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
