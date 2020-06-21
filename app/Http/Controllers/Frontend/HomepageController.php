<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Article;
use App\Services\ArticleServices;
use Jenssegers\Agent\Agent;

class HomepageController extends Controller
{
    protected $articleServices;
    protected $agent;

    public function __construct(ArticleServices $articleServices, Agent $agent)
    {
        parent::__construct();

        $this->articleServices = $articleServices;
        $this->agent = $agent;
    }

    public function index()
    {
        $article = Article::inRandomOrder()->first();

        return redirect()->route('article.download', ['slug' => $article->slug]);
    }
}
