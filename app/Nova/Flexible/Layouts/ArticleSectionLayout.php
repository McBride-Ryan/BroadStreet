<?php

namespace App\Nova\Flexible\Layouts;

use Str;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

abstract class ArticleSectionLayout extends Layout
{
    public function getSlugAttribute()
    {
        return Str::of($this->attributes['title'])->slug() ?? null;
    }
}
