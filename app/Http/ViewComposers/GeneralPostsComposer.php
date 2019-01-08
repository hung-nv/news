<?php
namespace App\Http\ViewComposers;

use App\Models\Article;
use Illuminate\View\View;

class GeneralPostsComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */

    public function compose(View $view)
    {
        $generalPosts = Article::ofType(1)->orderByDesc('created_at')->limit(2)->get();
        $view->with('generalPosts', $generalPosts);
    }
}