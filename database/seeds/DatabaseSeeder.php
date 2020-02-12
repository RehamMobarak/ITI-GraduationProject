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
                [
                    'id' => '2',
                    'content_name' => 'CSS',
                    'description' => 'used to Design web pages',
                    'content_details' => 'Stands for "Cascading Style Sheet." Cascading style sheets are used to format the layout of Web pages. They can be used to define text styles, table sizes, and other aspects of Web pages that previously could only be defined in a pages HTML.',
                    'image' => '/images/css.png',
                    'links' => 'https://www.w3schools.com/css/default.asp
                    https://www.youtube.com/watch?v=yfoY53QXEnI
                    https://www.youtube.com/watch?v=1Rs2ND1ryYc' ,
                    'created_at'=>now(),

                ],
                [
                    'id' => '3',
                    'content_name' => 'Javascript',
                    'description' => 'used to manipulat web pages',
                    'content_details' => 'JavaScript is a dynamic computer programming language. It is lightweight and most commonly used as a part of web pages, whose implementations allow client-side script to interact with the user and make dynamic pages. It is an interpreted programming language with object-oriented capabilities.
                    JavaScript was first known as LiveScript, but Netscape changed its name to JavaScript, possibly because of the excitement being generated by Java. JavaScript made its first appearance in Netscape 2.0 in 1995 with the name LiveScript. The general-purpose core of the language has been embedded in Netscape, Internet Explorer, and other web browsers.
                    The ECMA-262 Specification defined a standard version of the core JavaScript language.
                    JavaScript is a lightweight, interpreted programming language.
                    Designed for creating network-centric applications.
                    Complementary to and integrated with Java.
                    Complementary to and integrated with HTML.
                    Open and cross-platform
                    ',
                    'image' => '/images/css.png',
                    'links' => 'https://www.w3schools.com/js/default.asp
                    https://www.youtube.com/watch?v=W6NZfCO5SIk
                    https://www.youtube.com/watch?v=PkZNo7MFNFg' ,
                    'created_at'=>now(),

                ],

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
                [
                    'category_id' => '1',
                    'content_id' => '2',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '1',
                    'content_id' => '3',
                    'created_at'=>now(),

                ],
            ]
        );
    }
}
