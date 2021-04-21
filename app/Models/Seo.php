<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;

    protected $fillable = [
        'meta_title',
        'meta_keywords',
        'meta_description',
        'og_title',
        'og_type',
        'og_url',
        'og_description',
        'og_image',
        'twitter_title',
        'twitter_site',
        'twitter_card',
        'twitter_description',
        'twitter_image',
        'page_scripts',
        'seoable_id',
        'seoable_type',
    ];

    /**
     * Get the parent imageable model (user or post).
     */
    public function seoable()
    {
        return $this->morphTo();
    }
}
