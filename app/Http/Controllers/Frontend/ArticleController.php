<?php

namespace App\Http\Controllers\Frontend;

use App\Services\ArticleServices;
use App\Services\CategoryServices;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class ArticleController extends Controller
{
    protected $articleServices;
    protected $categoryServices;
    protected $agent;

    public function __construct(ArticleServices $articleServices, CategoryServices $categoryServices, Agent $agent)
    {
        parent::__construct();
        $this->articleServices = $articleServices;
        $this->categoryServices = $categoryServices;
        $this->agent = $agent;
    }


    public function download($slug)
    {
        $article = $this->articleServices->getArticleBySlug($slug);

        $this->setIdsExcept($article->id);

        $this->articleServices->updateViewArticle($article->id);

        $relatedArticles = $this->articleServices->getRelatedArticle(
          $article->category->pluck('id')->all(),
          $article->id
        );

        return view('news.download', [
          'article' => $article,
          'relatedArticles' => $relatedArticles
        ]);
    }
}
