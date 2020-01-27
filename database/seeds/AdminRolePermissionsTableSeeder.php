<?php

use Illuminate\Database\Seeder;

class AdminRolePermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admin_role_permissions')->delete();

        \DB::table('admin_role_permissions')->insert(
            [
                0 =>
                    [
                        'role_id' => 1,
                        'permission_id' => 1,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
            ]
        );
    }
}