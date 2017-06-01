<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => 'tester',
                'email' => 'tester@a.a',
                'password' => '$2y$10$UjLMLgI/6QL4IGKTsKKGZuoGQQMRZn6I8cDw0ElXNfMdRJhrh9EHu',
                'remember_token' => 'XE3fSd34BDpsOycG8sffMFqea7R5LdCAtZb20k6m6FIGD8anO4uWHc6MVVuX',
                'created_at' => '2017-03-21 03:20:08',
                'updated_at' => '2017-03-21 03:20:08',
            ),
        ));
        
        
    }
}