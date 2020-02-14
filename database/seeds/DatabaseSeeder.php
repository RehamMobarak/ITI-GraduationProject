<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('users')->insert([
            'first_name' => 'admin',
            'last_name' => 'reham',
            'email' => 'admin@admin.com',
            'password' => Hash::make("12345678"),
            'country' => 'Egypt',
            'birthdate' => '1996-08-04', 
            'gender' => 'female',
            'image' => '/images/avatar.png',
            'role'=>'admin',
            'background_img'=>'/images/background2.jpg',
            'remember_token' => Str::random(10),

        ]);
        // careers
        // DB::table('careers')->insert(
        //     [
        //         [
        //             'id' => '',
        //             'job_name' => ''
        //         ],
        //         [
        //             'id' => '',
        //             'job_name' => ''
        //         ],
                
        //     ]
        // );

        // //categories
        // DB::table('categories')->insert(
        //     [
        //         [
        //             'id' => '',
        //             'category_name' => ''
        //         ],
        //         [
        //             'id' => '',
        //             'category_name' => ''
        //         ],
        //     ]
        // );
        // // career_category
    
        // DB::table('career_category')->insert(
        //     [
        //         [
        //             'career_id' => '',
        //             'category_id' => ''
        //         ],
        //         [
        //             'career_id' => '',
        //             'category_id' => ''
        //         ],
        //     ]
        // );
        // //contents
        // DB::table('contents')->insert(
        //     [
        //         [
        //             'id' => '',
        //             'content_name' => '',
        //             'content_details' => '',
        //             'image' => '',
        //             'links' => ''
        //         ],
        //         [
        //             'id' => '',
        //             'content_name' => '',
        //             'content_details' => '',
        //             'image' => '',
        //             'links' => ''
        //         ],

        //     ]
        // );

        // // category_content
        // DB::table('career_category')->insert(
        //     [
        //         [
        //             'category_id' => '',
        //             'content_id' => ''
        //         ],
        //         [
        //             'category_id' => '',
        //             'content_id' => ''
        //         ],
        //     ]
        // );
    }
}
