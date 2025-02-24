<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class CopyGroup extends Model
{
    /** @use HasFactory<\Database\Factories\CopyGroupFactory> */
    use HasFactory;
    use SoftDeletes;
    use LogsActivity;
    use HasSlug;

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = ['name', 'campaign_id', 'channel_id', 'status', 'created_by_id'];
    protected $appends = ['statusCount'];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }

    public function copyVariations()
    {
        return $this->hasMany(CopyVariation::class);
    }

    public function statusCount()
    {
        $items = $this->copyVariations->groupBy('status');

        $counts = [];

        foreach ($items as $key => $value) {
            $counts[$key] = $value->count();
        }
        return $counts;
    }
}
