<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use Yna\NovaSwatches\Swatches;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use LeadMarvels\Leadgen\Models\Resource;

class BannerThumbnail extends ArticleSectionLayout
{
    /**
    * The layout's unique identifier
    *
    * @var string
    */
    protected $name = 'banner-thumbnail';

    /**
    * The displayed title
    *
    * @var string
    */
    protected $title = 'Banner Thumbnail';

    /**
    * Get the fields displayed by the layout.
    *
    * @return array
    */
    public function fields(): array
    {
        return [
            Text::make('Title')
                ->rules('required'),

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

            Select::make('Select Resource', 'resource_id')
                ->options(Resource::published()
                ->public()
                ->orderBy('title')
                ->whereHas('images', function ($query) {
                    $query->whereType('thumbnail');
                })
                ->pluck('title', 'id'))
                ->rules('required'),

            Boolean::make('Include In Toc'),
        ];
    }
}
