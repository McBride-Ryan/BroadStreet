<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;

class TextWithImage extends ArticleSectionLayout
{
    /**
    * The layout's unique identifier
    *
    * @var string
    */
    protected $name = 'text-with-image';

    /**
    * The displayed title
    *
    * @var string
    */
    protected $title = 'Text With Image';

    /**
    * Get the fields displayed by the layout.
    *
    * @return array
    */
    public function fields()
    {
        $request = request();

        return [
            Text::make('Title'),
            Code::make('Body'),
            Image::make('Image', 'image', \Storage::getDefaultDriver())
                ->storeOriginalName('attachment_name')
                ->path(getSubDomain($request)),
            Text::make('Alt Text')
                ->rules('required')
                ->hideFromIndex(),
            Select::make('Image Position')
                ->options(['left' => 'Left', 'right' => 'Right', 'none' => 'Above'])
                ->required(),
            Text::make('Caption'),
        ];
    }
}
