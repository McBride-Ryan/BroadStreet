<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;

class SectionHeader extends ArticleSectionLayout
{
    /**
    * The layout's unique identifier
    *
    * @var string
    */
    protected $name = 'headline';

    /**
    * The displayed title
    *
    * @var string
    */
    protected $title = 'Section Header';

    /**
    * Get the fields displayed by the layout.
    *
    * @return array
    */
    public function fields()
    {
        return [
            Text::make('Title'),
            Boolean::make('Include In Toc'),
        ];
    }
}
