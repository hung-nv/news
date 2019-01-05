<?php

namespace App\Http\Controllers\Frontend;

use App\Services\PostServices;
use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;

class HomepageController extends Controller
{
    protected $postServices;
    protected $agent;

    public function __construct(PostServices $postServices, Agent $agent)
    {
        parent::__construct();

        $this->postServices = $postServices;
        $this->agent = $agent;
    }

    public function index()
    {
        $widgetCategory = [];
        if (!empty($this->option['mainCategory'])) {
            $widgetCategory = $this->postServices->getWidgetCategoryWithArticles($this->option['mainCategory'], 12);
        }

        $layouts = 'homepage.index';
        if ($this->agent->isMobile()) {
            $layouts = 'mobile.homepage.index';
        }

        return view($layouts, [
            'widgetCategory' => $widgetCategory
        ]);
    }
}
