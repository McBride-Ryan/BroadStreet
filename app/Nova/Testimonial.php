<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Textarea;

class Testimonial extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = \App\Models\Testimonial::class;

    public static $group = 'Admin Tools';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'first_name', 'last_name', 'title', 'type', 'company_name', 'image_type',
    ];

    public function title(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param Request $request
     *
     * @return array
     */
    public function fields(Request $request): array
    {
        return [
            Text::make('First Name')->required()->sortable(),
            Text::make('Last Name')->required()->sortable(),
            Text::make('Title')->required()->sortable(),
            Select::make('Type')
                ->options(['associations' => 'Associations', 'marketers' => 'B2B Marketers'])
                ->sortable()
                ->rules('required')
                ->displayUsingLabels(),

            Text::make('Company Name')->sortable(),
            Textarea::make('Description')->required()->sortable(),

            Image::make('Image', 'headshot', \Storage::getDefaultDriver())
                ->rules('mimes:gif,jpeg,png,svg')
                ->storeOriginalName('attachment_name')
                ->path(getSubDomain($request)),

            Text::make('Attachment Name')->exceptOnForms()->hideFromIndex(),

            Select::make('Image Type', 'image_type')->options([
                'headshot' => 'Headshot',
                'logo' => 'Logo',
            ])
                ->hideFromIndex()
                ->displayUsingLabels()
                ->sortable()
                ->rules('required'),
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
