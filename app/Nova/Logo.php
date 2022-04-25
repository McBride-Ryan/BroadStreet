<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Illuminate\Validation\Rule;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;

class Logo extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Logo::class;

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
            ID::make()->showOnIndex(false),
            Image::make('Name', 'name', \Storage::getDefaultDriver())
                ->rules('mimes:gif,jpeg,png,svg')
                ->storeOriginalName('attachment_name')
                ->path(getSubDomain($request)),

            Text::make('Attachment Name')->exceptOnForms()->hideFromIndex(),
            Text::make('Url')
                ->hideFromIndex()
                ->creationRules(
                    'required',
                    'url'
                ),
            Boolean::make('Show on Index')->sortable(),
            Select::make('Type')
                ->options(['marketers' => 'B2B Marketer', 'association' => 'Association'])
                ->sortable()
                ->creationRules(
                    'required',
                    Rule::unique('resource_assets')
                        ->where(function ($query) use ($request) {
                            return $query->where('resource_id', $request->input('resource'))
                                ->whereNull('deleted_at');
                        }),
                )
                ->updateRules(
                    'required',
                    Rule::unique('resource_assets')
                        ->where(function ($query) use ($request) {
                            return $query->where('resource_id', $request->input('resource'))
                                ->whereNull('deleted_at');
                        })
                        ->ignore($request->resourceId)
                )->displayUsingLabels(),
            Text::make('Title')->sortable()->rules(['required', "regex:/^[\w_\-\s\:\!\.\?']+$/u"]),
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
