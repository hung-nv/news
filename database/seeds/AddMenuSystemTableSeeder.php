<?php

use Illuminate\Database\Seeder;

class AddMenuSystemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_system')->insert([
            ['label' => 'Advertising', 'icon' => 'icon-globe', 'route' => 'advertising', 'parent_id' => '0', 'sort' => 0, 'show' => '1'],
            ['label' => 'Create Ad Unit', 'icon' => 'icon-plus', 'route' => 'advertising.create', 'parent_id' => '16', 'sort' => 1, 'show' => '1'],
            ['label' => 'All', 'icon' => 'icon-list', 'route' => 'advertising.index', 'parent_id' => '16', 'sort' => 2, 'show' => '1'],
        ]);
    }
}
