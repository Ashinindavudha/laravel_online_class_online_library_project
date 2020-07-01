<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Book extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia;

    public $table = 'books';

    protected $appends = [
        'cover_image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'author_id',
        'series_title',
        'call_number',
        'publisher',
        'collation',
        'language',
        'isbn_issn',
        'classification',
        'content_type',
        'media_type',
        'carrier_type',
        'edition',
        'subject',
        'specific_detail_info',
        'statement_responsibility',
        'description',
        'category_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->width(368)->height(232);
    }

    public function getCoverImageAttribute()
    {
        $files = $this->getMedia('cover_image');
        $files->each(function ($item) {
            $item->url       = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
        });

        return $files;
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function author()
     {
         return $this->belongsTo(Author::class, 'author_id');
     }
}
