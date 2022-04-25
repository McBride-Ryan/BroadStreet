<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\Text;

class SectionSources extends ArticleSectionLayout
{
    /**
    * The layout's unique identifier
    *
    * @var string
    */
    protected $name = 'sources';

    /**
    * The displayed title
    *
    * @var string
    */
    protected $title = 'Section Sources';

    /**
    * Get the fields displayed by the layout.
    *
    * @return array
    */
    public function fields(): array
    {
        return [
            Text::make('Title')
                ->placeholder('Sources'),
            Code::make('Body')
                ->rules('required'),
        ];
    }
}
