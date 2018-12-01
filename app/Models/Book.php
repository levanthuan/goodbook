<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Book extends Model
{
    use Notifiable, SoftDeletes;
    protected $table = 'books';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'author',
        'category_id',
        'publisher',
        'title_orig',
        'translator',
        'country',
        'language',
        'subject',
        'pub_date',
        'type',
        'page',
    ];
}
