<?php

use App\Models\Admin\Option;
use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = [
            [
                'module_id' => 1,
                'opt_position' => 0,
                'opt_name' => 'Roles',
                'opt_type' => 'option_mod',
                'opt_resource' => 'roles'
            ],
            [
                'module_id' => 1,
                'opt_position' => 1,
                'opt_name' => 'Usuarios',
                'opt_type' => 'option_mod',
                'opt_resource' => 'users'
            ]
        ];

        foreach ($options as $key => $value)
        {
            Option::create($value);
        }
    }
}
