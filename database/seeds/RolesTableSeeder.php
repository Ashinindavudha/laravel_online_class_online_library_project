<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id'         => 1,
                'title'      => 'Admin',
                'created_at' => '2019-09-10 14:00:26',
                'updated_at' => '2019-09-10 14:00:26',
            ],
            [
                'id'         => 2,
                'title'      => 'User',
                'created_at' => '2019-09-10 14:00:26',
                'updated_at' => '2019-09-10 14:00:26',
            ],
        ];

        Role::insert($roles);

    }
}
