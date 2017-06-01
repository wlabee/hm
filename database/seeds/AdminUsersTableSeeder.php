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
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$66x80Mfjhj4dLCRtmvmSHOPDDtoXoSjJ5zo92nfFqmcPPX7Go/yoW',
                'remember_token' => 'mGMtrJfzDwgJOsgITwBfvWFHp17tmQ1QlmgtFbCyHxckojf9FwJ3RJeiCp6J',
                'created_at' => '2016-05-25 05:56:33',
                'updated_at' => '2016-05-28 07:08:19',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'test2x',
                'email' => 'test@admin.com',
                'password' => '$2y$10$66x80Mfjhj4dLCRtmvmSHOPDDtoXoSjJ5zo92nfFqmcPPX7Go/yoW',
                'remember_token' => '5zYwJbEED3uuKdZh9JXARhEQzl6AISt3BSq2AhdU6ttYHwaqWVuCEQdmL0ZV',
                'created_at' => '2016-05-25 05:56:33',
                'updated_at' => '2017-04-05 05:51:11',
            ),
        ));
        
        
    }
}