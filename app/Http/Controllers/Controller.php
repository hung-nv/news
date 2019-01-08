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
    protected $articleType = 'category',
        $categoryType = 'article',
        $pageType = 'page';

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
        View::share('pageType', $this->pageType);

        View::share('categoryType', $this->categoryType);
    }

    /**
     * Setting site.
     */
    public function getSettingSite()
    {
        $this->option = Option::all()->pluck('value', 'key');

        View::share('option', $this->option);
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
            // set url.
            $item['url'] = $this->setUrlForMenu($item);

            $child = [];

            foreach ($data as $n => $i) {
                $grand = [];

                if ($i['parent_id'] == $item['id']) {
                    // set url.
                    $i['url'] = $this->setUrlForMenu($i);
                    // unset from all data.
                    unset($data[$n]);

                    foreach ($data as $m => $j) {
                        if ($j['parent_id'] == $i['id']) {
                            // set url.
                            $j['url'] = $this->setUrlForMenu($j);

                            $grand[] = $j;
                            // unset from all data.
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

    /**
     * Set url for menu.
     * @param array $option
     * @return string
     */
    private function setUrlForMenu($option)
    {
        if ($option['direct']) {
            $url = $option['direct'];
        } else {
            if ($option['type']) {
                $prefix = '/' . config('const.prefix.' . $option['type']);
            }

            $url = $prefix . '/' . $option['slug'];
        }

        return $url;
    }
}
