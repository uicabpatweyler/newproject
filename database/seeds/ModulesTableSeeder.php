<?php

use App\Models\Admin\Module;
use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = [
            [
                'position' => 1,
                'name' => 'Administración',
                'type' => 'menu_header',
                'permission' => 'access.administration.module'
            ]
        ];

        foreach ($modules as $key => $value)
        {
            Module::create($value);
        }
    }
}
