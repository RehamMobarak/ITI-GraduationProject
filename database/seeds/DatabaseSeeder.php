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
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            'first_name' => 'admin',
            'last_name' => 'reham',
            'email' => 'admin@admin.com',
            'password' => Hash::make("12345678"),
            'country' => 'Egypt',
            'birthdate' => '1996-08-04', 
            'gender' => 'female',
            'image' => '/image/avatar.png',
            'role'=>'admin',
            'remember_token' => Str::random(10),

        ]);
        // careers
        DB::table('careers')->insert(
            [
                [
                    'id' => '1',
                    'job_name' => 'Web Developer',
                    'created_at'=>now(),
                    
                ],

                // [
                //     'id' => '2',
                //     'job_name' => ''
                // ],

                // [
                //     'id' => '',
                //     'job_name' => ''
                // ],
                
            ]
        );
        // //categories
        DB::table('categories')->insert(
            [
                [
                    'id' => '1',
                    'category_name' => 'Front End',
                    'image' => '/images/Front end.png',

                    'created_at'=>now(),

                ],
                [
                    'id' => '2',
                    'category_name' => 'Back End',
                    'image' => '/images/Back end.png',

                    'created_at'=>now(),

                ],
                [
                    'id' => '3',
                    'category_name' => 'Full Stack',
                    'image' => '/images/Full-stack.png',

                    'created_at'=>now(),

                ],
            ]
        );
        // career_category
        DB::table('career_categories')->insert(
            [
                [
                    'career_id' => '1',
                    'category_id' => '1',
                    'created_at'=>now(),

                ],
                [
                    'career_id' => '1',
                    'category_id' => '2',
                    'created_at'=>now(),

                ],
                [
                    'career_id' => '1',
                    'category_id' => '3',
                    'created_at'=>now(),

                ],
            ]
        );
        //contents
        DB::table('contents')->insert(
            [
                [
                    'id' => '1',
                    'content_name' => 'HTML',
                    'description' => 'used to write the content of web pages',
                    'content_details' => 'Brief 
                    First developed by Tim Berners-Lee in 1990, HTML is short for Hypertext Markup Language. HTML is used to create electronic documents (called pages) that are displayed on the World Wide Web. Each page contains a series of connections to other pages called hyperlinks. Every web page you see on the Internet is written using one version of HTML code or another.
                    ',
                    'image' => '/images/html.png',
                    'links' => 'https://www.w3schools.com/html/default.asp
                    https://www.wikihow.com/Learn-HTML
                    https://www.youtube.com/watch?v=UB1O30fR-EE',
                    'created_at'=>now(),

                ],
        //         [
        //             'id' => '',
        //             'content_name' => '',
        //             'content_details' => '',
        //             'image' => '',
        //             'links' => ''
        //         ],

            ]
        );

        // // category_content
        DB::table('category_contents')->insert(
            [
                [
                    'category_id' => '1',
                    'content_id' => '1',
                    'created_at'=>now(),

                ],
        //         [
        //             'category_id' => '',
        //             'content_id' => ''
        //         ],
            ]
        );
    }
}
