<?php

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admin_menu')->delete();

        \DB::table('admin_menu')->insert(
            [
                0 =>
                    [
                        'id' => 1,
                        'parent_id' => 0,
                        'order' => 1,
                        'title' => '首页',
                        'icon' => 'fa-bar-chart',
                        'uri' => '/',
                        'permission' => null,
                        'created_at' => null,
                        'updated_at' => '2020-01-27 10:49:00',
                    ],
                1 =>
                    [
                        'id' => 2,
                        'parent_id' => 0,
                        'order' => 2,
                        'title' => '系统管理',
                        'icon' => 'fa-tasks',
                        'uri' => null,
                        'permission' => null,
                        'created_at' => null,
                        'updated_at' => '2020-01-27 10:50:06',
                    ],
                2 =>
                    [
                        'id' => 3,
                        'parent_id' => 2,
                        'order' => 3,
                        'title' => '后台用户管理',
                        'icon' => 'fa-users',
                        'uri' => 'auth/users',
                        'permission' => null,
                        'created_at' => null,
                        'updated_at' => '2020-01-27 11:56:29',
                    ],
                3 =>
                    [
                        'id' => 4,
                        'parent_id' => 2,
                        'order' => 4,
                        'title' => '角色管理',
                        'icon' => 'fa-user',
                        'uri' => 'auth/roles',
                        'permission' => null,
                        'created_at' => null,
                        'updated_at' => '2020-01-27 10:50:27',
                    ],
                4 =>
                    [
                        'id' => 5,
                        'parent_id' => 2,
                        'order' => 5,
                        'title' => '权限管理',
                        'icon' => 'fa-ban',
                        'uri' => 'auth/permissions',
                        'permission' => null,
                        'created_at' => null,
                        'updated_at' => '2020-01-27 10:50:39',
                    ],
                5 =>
                    [
                        'id' => 6,
                        'parent_id' => 2,
                        'order' => 6,
                        'title' => '菜单管理',
                        'icon' => 'fa-bars',
                        'uri' => 'auth/menu',
                        'permission' => null,
                        'created_at' => null,
                        'updated_at' => '2020-01-27 10:50:50',
                    ],
                6 =>
                    [
                        'id' => 7,
                        'parent_id' => 2,
                        'order' => 7,
                        'title' => '操作日志',
                        'icon' => 'fa-history',
                        'uri' => 'auth/logs',
                        'permission' => null,
                        'created_at' => null,
                        'updated_at' => '2020-01-27 10:51:00',
                    ],
                7 =>
                    [
                        'id' => 8,
                        'parent_id' => 0,
                        'order' => 0,
                        'title' => '用户管理',
                        'icon' => 'fa-user',
                        'uri' => '/users',
                        'permission' => null,
                        'created_at' => '2020-01-27 11:54:48',
                        'updated_at' => '2020-01-27 11:56:06',
                    ],
            ]
        );
    }
}