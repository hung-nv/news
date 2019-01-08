<?php
namespace App\Http\ViewComposers;

use App\Services\ArticleServices;
use Illuminate\View\View;

class GeneralPostsComposer
{
    protected $articleServices;

    public function __construct(ArticleServices $articleServices)
    {
        $this->articleServices = $articleServices;
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */

    public function compose(View $view)
    {
        $newArticles = $this->articleServices->getNewArticles(5);

        $topInWeek = $this->articleServices->getTopArticlesInWeek(5);

        $view->with('newArticles', $newArticles);

        $view->with('topInWeek', $topInWeek);
    }
}