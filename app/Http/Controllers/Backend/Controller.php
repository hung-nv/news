<?php

namespace App\Http\Controllers\Backend;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;

class Controller extends \App\Http\Controllers\Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Define type.
     * @var
     */
    protected $articleType = Article::POST_TYPE;
    protected $categoryType = Category::CATEGORY_TYPE;
    protected $pageType = Article::PAGE_TYPE;
    protected $serviceType = Article::SERVICE_TYPE;

    public function __construct()
    {
        parent::__construct();

        $this->setType();
    }


    public function setType()
    {
        View::share('pageType', $this->pageType);
    }
}
