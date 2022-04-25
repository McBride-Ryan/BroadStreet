<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use Yna\NovaSwatches\Swatches;
use Laravel\Nova\Fields\Boolean;

class SectionCta extends ArticleSectionLayout
{
    /**
    * The layout's unique identifier
    *
    * @var string
    */
    protected $name = 'cta';

    /**
    * The displayed title
    *
    * @var string
    */
    protected $title = 'Section CTA';

    /**
    * Get the fields displayed by the layout.
    *
    * @return array
    */
    public function fields(): array
    {
        return [
            Text::make('Button Text')
                ->suggestions([
                    'Learn More',
                    'Click Now',
                    'Start Exploring',
                ])
                ->rules('required'),

            Boolean::make('Darken Text'),

            Swatches::make('Background Color')->colors(['#c73118', '#767776', '#2CC31F', '#383838', '#ed9015', '#dbe60e', '#17d180', '#17d1cb', '#8c16cc', '#cc1665', '#93ff8f', '#7d0a0a'])
                ->rules('required'),
        ];
    }
}
