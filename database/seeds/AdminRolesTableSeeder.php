<?php

use Illuminate\Database\Seeder;

class AdminRolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admin_roles')->delete();

        \DB::table('admin_roles')->insert(
            [
                0 =>
                    [
                        'id' => 1,
                        'name' => 'Administrator',
                        'slug' => 'administrator',
                        'created_at' => '2020-01-27 02:36:02',
                        'updated_at' => '2020-01-27 02:36:02',
                    ],
            ]
        );
    }
}