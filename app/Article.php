<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'writer', 'topic', 'header_url', 'url', 'header_url', 'approved_at', 'corrected_at', 'date'
    ];
}
