<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin  Eloquent
 * @method static withOtherSizeImages(Image|Image[]|\Illuminate\Database\Eloquent\Collection|Model $image)
 */
class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'base_path',
        'type',
        'size',
        'size_identifier',
        'imageable_id',
        'imageable_type',
    ];

    /**
     * Get the parent imageable model (user or post).
     */
    public function imageable()
    {
        return $this->morphTo();
    }

    public function scopeWithOtherSizeImages($query, $image)
    {
        return $query->where('size_identifier', $image->size_identifier);
    }

    public function scopeThumbnails($query)
    {
        return $query->where('type', 'thumbnail');
    }
}
