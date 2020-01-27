<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admin_users')->delete();

        \DB::table('admin_users')->insert(
            [
                0 =>
                    [
                        'id' => 1,
                        'username' => 'admin',
                        'password' => '$2y$10$QyrZGpQxU23LRycabI1L9OAsI0x.RkBKseK94TymzzA5xZ0/vSxrS',
                        'name' => 'Administrator',
                        'avatar' => null,
                        'remember_token' => '7UxJQrNbLHl9O5PKaqjQ28JVE1wjeiJmUOVmSAkP5gE0ZRDitdxuq3BubuWk',
                        'created_at' => '2020-01-27 02:36:02',
                        'updated_at' => '2020-01-27 02:36:02',
                    ],
            ]
        );
    }
}