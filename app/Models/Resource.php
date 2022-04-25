<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;
use LeadMarvels\Leadgen\Models\ResourceAsset;

class Resource extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function resources(): Collection
    {
        return Collect([$this->slotOneResource, $this->slotTwoResource, $this->slotThreeResource]);
    }

    public function getResourceBySlot($slot): BelongsTo
    {
        return $this->belongsTo(
            \LeadMarvels\Leadgen\Models\Resource::class,
            $slot
        )
            ->select('id', 'title', 'sub_title', 'published_at', 'slug', 'visibility_type_id')
            ->with('tags', function ($query) {
                $query->where('type', '=', 'content_type');
            })
            ->addSelect([
                'image' => ResourceAsset::select('name')
                    ->whereColumn('resource_id', 'resources.id')
                    ->whereType('hero')
                    ->take(1),
            ]);
    }

    /**
     * @return BelongsTo
     */
    public function slotOneResource(): BelongsTo
    {
        return $this->getResourceBySlot('slot_1');
    }

    /**
     * @return belongsTo
     */
    public function slotTwoResource(): belongsTo
    {
        return $this->getResourceBySlot('slot_2');
    }

    /**
     * @return belongsTo
     */
    public function slotThreeResource(): belongsTo
    {
        return $this->getResourceBySlot('slot_3');
    }

}
