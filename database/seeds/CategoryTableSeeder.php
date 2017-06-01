<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category')->delete();
        
        \DB::table('category')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cat_name' => '小编精选',
                'pid' => 0,
                'picture' => '',
                'sort' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'cat_name' => '厨房用品',
                'pid' => 0,
                'picture' => '',
                'sort' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'cat_name' => '卧室舒适',
                'pid' => 0,
                'picture' => '',
                'sort' => 3,
            ),
            3 => 
            array (
                'id' => 5,
                'cat_name' => '电饭锅',
                'pid' => 2,
                'picture' => '/storage/uploads/201705/C07fDZh4U4P3fKoXapjmGE2bsoqA7vtR4pkQZCec.png',
                'sort' => 1,
            ),
            4 => 
            array (
                'id' => 6,
                'cat_name' => '洗碗机',
                'pid' => 2,
                'picture' => '/storage/uploads/201705/8BPpZavia2tZp89QM9Fb54HHHTYDmS2mJRWZdrkW.png',
                'sort' => 2,
            ),
        ));
        
        
    }
}