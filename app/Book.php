<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;


class Book extends Model implements Searchable
{
    use SoftDeletes;

    public $table = 'books';

   

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

    

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
   /* public function author()
     {
         return $this->belongsTo(App\Model\Author::class, 'author_id');
     }*/


     public function getSearchResult(): SearchResult
    {
        $url = route('ebooks.show', $this->id);

        return new SearchResult(
            $this,
            $this->title,
            $url
        );
    }
}
