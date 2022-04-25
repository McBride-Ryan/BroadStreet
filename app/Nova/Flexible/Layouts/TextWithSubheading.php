<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;

class TextWithSubheading extends ArticleSectionLayout
{
    /**
    * The layout's unique identifier
    *
    * @var string
    */
    protected $name = 'text-with-subheading';

    /**
    * The displayed title
    *
    * @var string
    */
    protected $title = 'Text With Subheading';

    /**
    * Get the fields displayed by the layout.
    *
    * @return array
    */
    public function fields()
    {
        return [
            Text::make('Title'),
            Code::make('Body'),
            Boolean::make('Include In Toc'),
        ];
    }
}
