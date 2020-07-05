<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use \DateTimeInterface;

class Category extends Model implements Searchable
{
    use SoftDeletes;

    public $table = 'categories';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function categoryBooks()
    {
        return $this->hasMany(Book::class, 'category_id', 'id');
    }


    public function getSearchResult(): SearchResult
    {
        $url = route('ecategory.show', $this->id);

        return new SearchResult(
            $this,
            $this->name,
            $url
         );
    }
}

