<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey='post_id';

    protected $fillable = ['title', 'content'];

    protected $table = 'posts';

    public $timestamps = false;
}
