<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends \Eloquent
{
    protected $table = 'articles';

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'name',
        'slug',
        'image',
        'url_video',
        'description',
        'content',
        'user_id',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'type'
    ];

    public function category()
    {
        return $this->belongsToMany(
            'App\Models\Category',
            'article_category',
            'article_id',
            'category_id'
        );
    }

    public function fields()
    {
        return $this->hasMany('App\Models\MetaField', 'article_id');
    }

    public function groups()
    {
        return $this->belongsToMany(
            'App\Models\Group',
            'article_group',
            'article_id',
            'group_id'
        );
    }

    public function getCreatedAtAttribute($value)
    {
        return date('d/m/Y H.i', strtotime($value));
    }

    /**
     * Get all posts by name.
     * @param string $name
     * @param int $pageSize
     * @param string $postType
     * @return $this|\Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function getPostsByName(string $name, int $pageSize, string $postType)
    {
        $posts = self::where('type', $postType)->orderByDesc('created_at');

        if ($name !== '-1') {
            $posts = $posts->where('name', $name);
        }

        $posts = $posts->paginate($pageSize);

        return $posts;
    }

    /**
     * Get all pages.
     * @param array $type
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getAllPages(array $type)
    {
        return self::whereIn('type', $type)->orderByDesc('created_at')->get();
    }

    /**
     * @param $idsCategory
     * @param $limit
     * @return Article[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function getArticlesByIdsCategory($idsCategory, $limit = null)
    {
        return self::from('articles')
            ->select([
                'articles.id',
                'articles.name',
                'articles.slug',
                'articles.image',
                'articles.description',
                'articles.created_at'
            ])
            ->join('article_category', function ($join) {
                $join->on('articles.id', '=', 'article_category.article_id');
            })
            ->where(function ($query) use ($idsCategory) {
                foreach ($idsCategory as $id) {
                    $query->orWhere('article_category.category_id', '=', $id);
                }
            })
            ->orderByDesc('articles.updated_at')
            ->where('articles.status', 1)
            ->groupBy('articles.id')
            ->limit($limit)
            ->get();
    }

    /**
     * @param $idsCategory
     * @param null $pageSize
     * @return Article
     */
    public static function paginateArticlesByIdsCategory($idsCategory, $articleType, $pageSize = null)
    {
        $model = self::from('articles')
            ->select([
                'articles.id',
                'articles.name',
                'articles.slug',
                'articles.image',
                'articles.description',
                'articles.created_at',
                'type'
            ])
            ->join('article_category', function ($join) {
                $join->on('articles.id', '=', 'article_category.article_id');
            })
            ->where(function ($query) use ($idsCategory) {
                foreach ($idsCategory as $id) {
                    $query->orWhere('article_category.category_id', '=', $id);
                }
            })
            ->where('articles.status', 1)
            ->where('articles.type', $articleType)
            ->orderByDesc('articles.updated_at')
            ->groupBy('articles.id')
            ->paginate($pageSize);

        return $model;
    }
}
