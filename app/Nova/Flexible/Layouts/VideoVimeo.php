<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;

class VideoVimeo extends ArticleSectionLayout
{
    /**
    * The layout's unique identifier
    *
    * @var string
    */
    protected $name = 'video-vimeo';

    /**
    * The displayed title
    *
    * @var string
    */
    protected $title = 'Video Vimeo';

    /**
    * Get the fields displayed by the layout.
    *
    * @return array
    */
    public function fields()
    {
        return [
            Text::make('Title'),
            Text::make('Vimeo ID')
                ->rules('required'),
            Text::make('Caption'),
            Boolean::make('Include In Toc'),
        ];
    }
}
