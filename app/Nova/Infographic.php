<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\Text;
use App\Nova\Flexible\Layouts\SectionCta;
use Whitecube\NovaFlexibleContent\Flexible;
use App\Nova\Flexible\Layouts\SectionSources;

class Infographic extends \LeadMarvels\Leadgen\Nova\SiteResource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Infographic::class;

    public static $group = 'Resource Pages';

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

    public static function label(): string
    {
        return 'Infographics';
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
        $fields = parent::fields($request);
        $fields[] = Text::make('Time To Read', 'config->time_to_read');
        $fields[] =
            Flexible::make('Sections')
                ->addLayout(SectionSources::class)
                ->addLayout('Main Body', 'main-body', [
                    Code::make('Body')
                        ->rules('required'),
                ])
                ->addLayout(SectionCta::class)
                ->button('New Infographic Section')
                ->fullWidth()
                ->confirmRemove();

        $collection = collect($fields)->filter(function ($field, $key) {
            return ! in_array($field->name, ['Advanced Configuration', 'Pattern', 'Redirect To', 'Web Hook', 'Response Pattern', 'Form', 'Mark Form Responses as Surplus']);
        });

        return $collection->toArray();
    }
}
