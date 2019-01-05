<?php

namespace App\Http\Controllers\Frontend;

use App\Services\PostServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;

class ArticleController extends Controller
{
    protected $postServices;
    protected $agent;

    public function __construct(PostServices $postService, Agent $agent)
    {
        parent::__construct();
        $this->postServices = $postService;
        $this->agent = $agent;
    }

    public function page($slug)
    {
//        $page = Post::where('slug', $slug)->first();
//        Post::where('slug', $slug)->update(['view' => DB::raw('view + 1')]);
//        $newArticles = Post::ofType($this->news_details_type)->select('name', 'slug', 'introduction', 'image', 'created_at')->active()->orderByDesc('created_at')->limit(10)->get();
//
//        $layout = 'news.page';
//        if ($this->agent->isMobile()) {
//            $layout = 'mobile.news.page';
//        }
//
//        return view($layout, [
//            'page' => $page,
//            'newArticles' => $newArticles
//        ]);
    }

    public function view($slug)
    {
//        $article = Post::where('slug', $slug)->first();
//        Post::where('slug', $slug)->update(['view' => DB::raw('view + 1')]);
//        $newArticles = Post::ofType($this->news_details_type)->select('name', 'slug', 'introduction', 'image', 'created_at')->active()->orderByDesc('created_at')->limit(10)->get();
//
//        $mostArticles = Post::select('name', 'slug', 'introduction', 'image', 'created_at')->inWeek()->ofType($this->news_details_type)->active()->orderDesc()->limit(10)->get();
//
//        $layout = 'news.view';
//        if ($this->agent->isMobile()) {
//            $layout = 'mobile.news.view';
//        }
//
//        return view($layout, [
//            'article' => $article,
//            'newArticles' => $newArticles,
//            'mostArticles' => $mostArticles
//        ]);
    }

    public function category($slug)
    {
//        $category = Category::where('slug', $slug)->first();
//        $articles = $this->postServices->getAllPostsByParentCategory($category->id, [], $this->news_details_type);
//        $articles = $articles->paginate(10);
//        $mostArticles = Post::select('name', 'slug', 'introduction', 'image', 'created_at')->inWeek()->ofType($this->news_details_type)->active()->orderDesc()->limit(10)->get();
//
//        $layout = 'news.category';
//        if ($this->agent->isMobile()) {
//            $layout = 'mobile.news.category';
//        }
//
//        return view($layout, [
//            'category' => $category,
//            'articles' => $articles,
//            'mostArticles' => $mostArticles
//        ]);
    }

    public function search(Request $request)
    {
//        $search = $request->txtSearch;
//        $articles = $this->postServices->searchPostsByName($search, $this->news_details_type);
//        $articles = $articles->paginate(10);
//
//        return view('news.search', [
//            'search' => $search,
//            'articles' => $articles
//        ]);
    }
}
