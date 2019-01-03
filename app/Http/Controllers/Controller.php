<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Option;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Define type.
     * @var
     */
    protected $postType,
        $categoryType,
        $pageType,
        $catalogType,
        $productType,
        $landingType;

    /**
     * Define option setting.
     * @var
     */
    protected $option;

    protected $mainMenu;

    public function __construct()
    {
        $this->setType();

        $this->getSettingSite();

        $this->getMenu();
    }

    public function setType()
    {
        $this->categoryType = 1;
        $this->postType = 2;
        $this->pageType = 3;
        $this->catalogType = 4;
        $this->productType = 5;
        $this->landingType = 6;

        View::share('pageType', $this->pageType);

        View::share('landingType', $this->landingType);

        View::share('catalogType', $this->catalogType);

        View::share('categoryType', $this->categoryType);
    }

    /**
     * Setting site.
     */
    public function getSettingSite()
    {
        $this->option = Option::all()->pluck('value', 'key');
    }

    /**
     * Get menu.
     */
    public function getMenu()
    {
        if (!empty($this->option['main_menu_id'])) {
            $mainMenu = $this->setMultiMenu(Menu::getMenuByGroup($this->option['main_menu_id'])->toArray());

            View::share('mainMenu', $mainMenu);
        }
    }

    /**
     * Set multi level menu.
     * @param $data
     * @return array
     */
    private function setMultiMenu($data)
    {
        $return = [];
        foreach ($data as $item) {
            $child = [];
            foreach ($data as $n => $i) {
                $grand = [];

                if ($i['parent_id'] == $item['id']) {
                    unset($data[$n]);
                    foreach ($data as $m => $j) {
                        if ($j['parent_id'] == $i['id']) {
                            $grand[] = $j;
                            unset($data[$m]);
                        }
                    }

                    if (isset($grand) && $grand) {
                        $i['grand'] = $grand;
                    }

                    $child[] = $i;
                }
            }

            if (empty($child) && $item['parent_id'] == null) {
                $return[] = $item;
            } else if (!empty($child)) {
                $item['child'] = $child;
                $return[] = $item;
            }

        }
        return $return;
    }
}
