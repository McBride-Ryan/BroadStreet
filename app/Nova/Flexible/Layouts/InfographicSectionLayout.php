<?php

namespace App\Nova\Flexible\Layouts;

use Str;
use Illuminate\Support\Stringable;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

abstract class InfographicSectionLayout extends Layout
{
    /**
     * @return Stringable|null
     */
    public function getSlugAttribute(): ?Stringable
    {
        return Str::of($this->attributes['title'])->slug() ?? null;
    }
}
