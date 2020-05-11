<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleDownload extends Model
{
    public $timestamps = false;

    protected $fillable = ['label', 'url', 'article_id'];
}
