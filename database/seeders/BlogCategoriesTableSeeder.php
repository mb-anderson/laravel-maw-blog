<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blog_categories')->delete();
        
        \DB::table('blog_categories')->insert(array (
            0 => 
            array (
                'created_at' => '2023-04-09 00:30:39',
                'id' => 1,
                'name' => 'Teknoloji',
                'updated_at' => '2023-04-09 00:30:39',
            ),
            1 => 
            array (
                'created_at' => '2023-04-09 00:30:39',
                'id' => 2,
                'name' => 'Oyun',
                'updated_at' => '2023-04-09 00:30:39',
            ),
            2 => 
            array (
                'created_at' => '2023-04-09 00:30:39',
                'id' => 3,
                'name' => 'Araba',
                'updated_at' => '2023-04-09 00:30:39',
            ),
            3 => 
            array (
                'created_at' => '2023-04-09 00:30:39',
                'id' => 4,
                'name' => 'Eğlece',
                'updated_at' => '2023-04-09 00:30:39',
            ),
            4 => 
            array (
                'created_at' => '2023-04-09 00:30:39',
                'id' => 5,
                'name' => 'Kitap',
                'updated_at' => '2023-04-09 00:30:39',
            ),
        ));
        
        
    }
}