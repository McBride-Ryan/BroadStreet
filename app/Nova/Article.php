<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\Text;
use App\Nova\Flexible\Layouts\BannerHero;
use App\Nova\Flexible\Layouts\VideoVimeo;
use Whitecube\NovaFlexibleContent\Flexible;
use App\Nova\Flexible\Layouts\SectionHeader;
use App\Nova\Flexible\Layouts\TextWithImage;
use App\Nova\Flexible\Layouts\BannerThumbnail;
use App\Nova\Flexible\Layouts\TextWithSubheading;

class Article extends \LeadMarvels\Leadgen\Nova\SiteResource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Article::class;

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

    public static function label()
    {
        return 'Articles';
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
                ->addLayout(SectionHeader::class)
                ->addLayout(TextWithImage::class)
                ->addLayout(TextWithSubheading::class)
                ->addLayout('Text Block', 'text-simple', [
                    Code::make('Body'),
                ])
                ->addLayout(BannerThumbnail::class)
                ->addLayout(BannerHero::class)
                ->addLayout(VideoVimeo::class)
                ->button('New Article Section')
                ->fullWidth()
                ->confirmRemove();

        $collection = collect($fields)->filter(function ($field, $key) {
            return ! in_array($field->name, ['Advanced Configuration', 'Pattern', 'Redirect To', 'Web Hook', 'Response Pattern', 'Form', 'Mark Form Responses as Surplus']);
        });

        $fields = $collection->toArray();

        return $fields;
    }
}
