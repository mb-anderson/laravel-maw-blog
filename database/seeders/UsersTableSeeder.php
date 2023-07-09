<?php

namespace Database\Seeders;

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
                'created_at' => '2023-04-09 00:30:39',
                'email' => 'mburakyucel38@gmail.com',
                'id' => 1,
                'name' => 'Mustafa Burak',
                'password' => '$2y$10$FSrQ0etD6u5zg4itGIpXTOc2hT/Jm7FyvVGfMu27Rq4czx8q1xwmq',
                'remember_token' => NULL,
                'surname' => 'Yücel',
                'type' => 'admin',
                'updated_at' => '2023-04-09 02:57:31',
            ),
            1 => 
            array (
                'created_at' => '2023-04-09 00:30:40',
                'email' => 'bakiyucel38@gmail.com',
                'id' => 2,
                'name' => 'Murat Baki',
                'password' => '$2y$10$PpIO6TRa/v48hdYWjtOfoe1pJSiGTJxXl6rRfVJtEWn0LdJpX.6lK',
                'remember_token' => NULL,
                'surname' => 'Yücel',
                'type' => 'admin',
                'updated_at' => '2023-04-13 15:51:45',
            ),
            2 => 
            array (
                'created_at' => '2023-04-09 23:40:44',
                'email' => 'mburakyucel@hotmail.com',
                'id' => 23,
                'name' => 'Thomas Anderson',
                'password' => '$2y$10$xknNsy27J5gwC1X6GS1dAuWTW.y13QV2G3cIdKB3dvWYXutu5.JAq',
                'remember_token' => NULL,
                'surname' => 'Yücel',
                'type' => 'admin',
                'updated_at' => '2023-04-13 15:52:21',
            ),
        ));
        
        
    }
}