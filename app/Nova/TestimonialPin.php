<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\BelongsTo;
use Illuminate\Support\Facades\Storage;

class TestimonialPin extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\TestimonialPin::class;

    /**
     * @var string
     */
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
        'id', 'page',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param Request $request
     *
     * @return array
     */
    public function fields(Request $request): array
    {
        $pages = collect(Storage::disk('views')->files('pages'))
            ->map(fn ($page) => (string) str($page)->between('pages/', '.blade'))
            ->mapWithKeys(fn ($page) => [$page => (string) str($page)->title()])
            ->sort()
            ->toArray();

        return [
            ID::make()->showOnIndex(false),
            Select::make('Page')
                ->options($pages)
                ->sortable()
                ->rules('required')
                ->creationRules('unique:App\Models\TestimonialPin,page')
                ->updateRules('unique:App\Models\TestimonialPin,page,{{resourceId}}')
                ->displayUsingLabels(),

            BelongsTo::make('Slot One', 'slotOneTestimonial', Testimonial::class)
                ->withoutTrashed(),
            BelongsTo::make('Slot Two', 'slotTwoTestimonial', Testimonial::class)
                ->withoutTrashed()
                ->nullable(),
            BelongsTo::make('Slot Three', 'slotThreeTestimonial', Testimonial::class)
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
    public function cards(Request $request): array
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
    public function filters(Request $request): array
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
    public function lenses(Request $request): array
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
    public function actions(Request $request): array
    {
        return [];
    }
}
