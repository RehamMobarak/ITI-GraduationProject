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
       
        DB::table('users')->insert(
            
        [
            [
                'first_name' => 'Admin',
                'last_name' => 'careery',
                'email' => 'admin@admin.com',
                'password' => Hash::make("12345678"),
                'country' => 'Egypt',
                'birthdate' => '1996-08-04', 
                'gender' => 'male',
                'image' => '/images/avatar.png',
                'role' =>'admin',
                'background_img'=>'/images/logo.png',
                'remember_token' => Str::random(10),
            ],

            [
                'first_name' => 'shaimaa',
                'last_name' => 'maher',
                'email' => 'shaimaa.maher1996@gmail.com',
                'password' => Hash::make("12345678"),
                'country' => 'USA',
                'birthdate' => '1996-12-28', 
                'gender' => 'female',
                'image' => '/images/avatar.png',
                'role' =>NULL,
                'background_img'=>'/images/logo.png',
                'remember_token' => Str::random(10),
             ],

             [
                'first_name' => 'reham',
                'last_name' => 'mobarak',
                'email' => 'reham.a.mobarak@gmail.com',
                'password' => Hash::make("12345678"),
                'country' => 'London',
                'birthdate' => '1996-08-04', 
                'gender' => 'female',
                'image' => '/images/avatar.png',
                'role' =>NULL,
                'background_img'=>'/images/logo.png',
                'remember_token' => Str::random(10),
             ],

             [
                'first_name' => 'aya',
                'last_name' => 'gaber',
                'email' => 'aya.gaber@gmail.com',
                'password' => Hash::make("12345678"),
                'country' => 'America',
                'birthdate' => '1996-08-04', 
                'gender' => 'female',
                'image' => '/images/avatar.png',
                'role' =>NULL,
                'background_img'=>'/images/logo.png',
                'remember_token' => Str::random(10),
             ],
    
             [
                'first_name' => 'abdalrahman',
                'last_name' => 'adel',
                'email' => 'abdalrahman.adel@gmail.com',
                'password' => Hash::make("12345678"),
                'country' => 'Egypt',
                'birthdate' => '1996-08-04', 
                'gender' => 'male',
                'image' => '/images/avatar.png',
                'role' =>NULL,
                'background_img'=>'/images/logo.png',
                'remember_token' => Str::random(10),
             ],


        ]);


        DB::table('careers')->insert(
            [
                [
                    'id' => '1',
                    'job_name' => 'Web Developer',
                    'created_at'=>now(),
                    
                ],

                [
                    'id' => '2',
                    'job_name' => 'Mobile Applications',
                    'created_at'=>now(),
                ],

                [
                    'id' => '3',
                    'job_name' => 'Cloud Computing Engineering',
                    'created_at'=>now(),
                ],
                [
                    'id' => '4',
                    'job_name' => 'Cloud Services Developer',
                    'created_at'=>now(),
                ],
                [
                    'id' => '5',
                    'job_name' => 'Cloud System Engineer',
                    'created_at'=>now(),
                ],
                [
                    'id' => '6',
                    'job_name' => 'Computer Network Engineering',
                    'created_at'=>now(),
                ],
                [
                    'id' => '7',
                    'job_name' => 'Computer Support Specialist',
                    'created_at'=>now(),
                ],
                [
                    'id' => '8',
                    'job_name' => 'International Technology Analyst',
                    'created_at'=>now(),
                ],
                [
                    'id' => '9',
                    'job_name' => 'International Technology Leadership',
                    'created_at'=>now(),
                ],
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

                [
                    'id' => '4',
                    'category_name' => 'IOS',
                    'image' => '/images/ios.png',

                    'created_at'=>now(),

                ],
                [
                    'id' => '5',
                    'category_name' => 'Android',
                    'image' => '/images/android.png',

                    'created_at'=>now(),

                ],
                [
                    'id' => '6',
                    'category_name' => 'Windows Phone',
                    'image' => '/images/windows_phone.png',

                    'created_at'=>now(),

                ],

                [
                    'id' => '7',
                    'category_name' => 'Cloud Architect',
                    'image' => '/images/logo_slogan.png',

                    'created_at'=>now(),

                ],

                [
                    'id' => '8',
                    'category_name' => 'Cloud Consultant',
                    'image' => '/images/logo_slogan.png',

                    'created_at'=>now(),

                ],

                [
                    'id' => '9',
                    'category_name' => 'Cloud Services Developer',
                    'image' => '/images/logo_slogan.png',

                    'created_at'=>now(),

                ],
                [
                    'id' => '10',
                    'category_name' => 'Cloud System Engineer',
                    'image' => '/images/logo_slogan.png',

                    'created_at'=>now(),

                ],
                [
                    'id' => '11',
                    'category_name' => 'Network Administrator ',
                    'image' => '/images/logo_slogan.png',

                    'created_at'=>now(),

                ],
                [
                    'id' => '12',
                    'category_name' => 'IT Analyst ',
                    'image' => '/images/logo_slogan.png',

                    'created_at'=>now(),

                ],
                [
                    'id' => '13',
                    'category_name' => 'IT Coordinator ',
                    'image' => '/images/logo_slogan.png',

                    'created_at'=>now(),

                ],
                
                [
                    'id' => '14',
                    'category_name' => 'Data Administrator ',
                    'image' => '/images/logo_slogan.png',

                    'created_at'=>now(),

                ],
                [
                    'id' => '15',
                    'category_name' => 'International Technology Analyst ',
                    'image' => '/images/logo_slogan.png',

                    'created_at'=>now(),

                ],
                [
                    'id' => '16',
                    'category_name' => 'International Technology Leadership ',
                    'image' => '/images/logo_slogan.png',

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
                [
                    'career_id' => '2',
                    'category_id' => '4',
                    'created_at'=>now(),

                ],
                [
                    'career_id' => '2',
                    'category_id' => '5',
                    'created_at'=>now(),

                ],
                [
                    'career_id' => '2',
                    'category_id' => '6',
                    'created_at'=>now(),

                ],
                [
                    'career_id' => '3',
                    'category_id' => '7',
                    'created_at'=>now(),

                ],
                [
                    'career_id' => '3',
                    'category_id' => '8',
                    'created_at'=>now(),

                ],

                [
                    'career_id' => '4',
                    'category_id' => '9',
                    'created_at'=>now(),

                ],
                [
                    'career_id' => '5',
                    'category_id' => '10',
                    'created_at'=>now(),

                ],
                [
                    'career_id' => '6',
                    'category_id' => '11',
                    'created_at'=>now(),

                ],
                [
                    'career_id' => '6',
                    'category_id' => '12',
                    'created_at'=>now(),

                ],
                [
                    'career_id' => '6',
                    'category_id' => '13',
                    'created_at'=>now(),

                ],

                [
                    'career_id' => '7',
                    'category_id' => '14',
                    'created_at'=>now(),

                ],
                [
                    'career_id' => '8',
                    'category_id' => '15',
                    'created_at'=>now(),

                ],
                [
                    'career_id' => '9',
                    'category_id' => '16',
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
                    'links' => 'https://www.w3schools.com/html/default.asp,
                    https://www.wikihow.com/Learn-HTML,
                    https://www.youtube.com/watch?v=UB1O30fR-EE',
                    'created_at'=>now(),

                ],
                [
                    'id' => '2',
                    'content_name' => 'CSS',
                    'description' => 'used to Design web pages',
                    'content_details' => 'Stands for "Cascading Style Sheet." Cascading style sheets are used to format the layout of Web pages. They can be used to define text styles, table sizes, and other aspects of Web pages that previously could only be defined in a pages HTML.',
                    'image' => '/images/css.png',
                    'links' => 'https://www.w3schools.com/css/default.asp,
                    https://www.youtube.com/watch?v=yfoY53QXEnI,
                    https://www.youtube.com/watch?v=1Rs2ND1ryYc' ,
                    'created_at'=>now(),

                ],
                [
                    'id' => '3',
                    'content_name' => 'Javascript',
                    'description' => 'used to manipulate web pages',
                    'content_details' => 'JavaScript is a dynamic computer programming language. It is lightweight and most commonly used as a part of web pages, whose implementations allow client-side script to interact with the user and make dynamic pages. It is an interpreted programming language with object-oriented capabilities.
                    JavaScript was first known as LiveScript, but Netscape changed its name to JavaScript, possibly because of the excitement being generated by Java. JavaScript made its first appearance in Netscape 2.0 in 1995 with the name LiveScript. The general-purpose core of the language has been embedded in Netscape, Internet Explorer, and other web browsers.
                    The ECMA-262 Specification defined a standard version of the core JavaScript language.
                    JavaScript is a lightweight, interpreted programming language.
                    Designed for creating network-centric applications.
                    Complementary to and integrated with Java.
                    Complementary to and integrated with HTML.
                    Open and cross-platform
                    ',
                    'image' => '/images/js.png',
                    'links' => 'https://www.w3schools.com/js/default.asp ,
                    https://www.youtube.com/watch?v=W6NZfCO5SIk,
                    https://www.youtube.com/watch?v=PkZNo7MFNFg' ,
                    'created_at'=>now(),

                ],

                [
                    'id' => '4',
                    'content_name' => 'PHP',
                    'description' => 'used with the back end with the server side',
                    'content_details' => 'Brief 
                    PHP is a script language and interpreter that is freely available and used primarily on Linux Web servers. PHP, originally derived from Personal Home Page Tools, now stands for PHP: Hypertext Preprocessor, which the PHP FAQ describes as a "recursive acronym."
                    ',
                    'image' => '/images/php.png',
                    'links' => 'https://www.youtube.com/watch?v=OK_JCtrrv-c,
                    https://www.wikihow.com/Write-PHP-Scripts,
                    https://www.php.net/manual/en/index.php,
                    https://www.w3schools.com/php/default.asp',
                    'created_at'=>now(),

                ],
                [
                    'id' => '5',
                    'content_name' => 'Laravel',
                    'description' => 'used as a framwork with php ',
                    'content_details' => 'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern and based on Symfony. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar.',
                    'image' => '/images/laravel.png',
                    'links' => 'https://laravel.com/,
                    https://www.youtube.com/watch?v=ImtZ5yENzgE,
                    https://www.youtube.com/watch?v=bkyjiXSx6WE,
                    https://laracasts.com' ,
                    'created_at'=>now(),

                ],
                [
                    'id' => '6',
                    'content_name' => 'SQL',
                    'description' => 'used with the database',
                    'content_details' => 'Structured Query Language (SQL) is a standard computer language for relational database management and data manipulation. SQL is used to query, insert, update and modify data. Most relational databases support SQL, which is an added benefit for database administrators (DBAs), as they are often required to support databases across several different platforms.
                    ',
                    'image' => '/images/mysql.png',
                    'links' => 'https://www.w3schools.com/sql/,
                    https://www.youtube.com/watch?v=HXV3zeQKqGY,
                    https://www.youtube.com/watch?v=7S_tz1z_5bA' ,
                    'created_at'=>now(),

                ],

                
                [
                    'id' => '7',
                    'content_name' => 'SWift',
                    'description' => 'Swift is designed to work with Apples Cocoa and Cocoa Touch frameworks and the large body of existing Objective-C code written for Apple products',
                    'content_details' => 'Brief 
                    wift is a general-purpose, multi-paradigm, compiled programming language developed by Apple Inc. for iOS, iPadOS, macOS, watchOS, tvOS, Linux, and z/OS. "
                    ',
                    'image' => '/images/swift.png',
                    'links' => 'https://codewithchris.com/learn-swift/,
                    https://www.youtube.com/watch?v=Ulp1Kimblg0,
                    https://www.youtube.com/watch?v=comQ1-x2a1Q',
                    'created_at'=>now(),

                ],

                [
                    'id' => '8',
                    'content_name' => 'XCODE',
                    'description' => 'contains a bunch of tools, the simulators and the organizer which is good for deployments in tandem with Configurator.',
                    'content_details' => 'The integrated development environment (IDE) from Apple that is used to create, compile and test Mac OS X and iOS (iPhone/iPad/iPod) applications. Introduced with OS X Version 10.3 (Panther) and evolving from Apples Project Builder, Xcode supports writing in C, C++, Objective-C, Swift, AppleScript, Java and Cocoa. See Mac OS X, Objective-C and Cocoa.',
                    'image' => '/images/Xcode.png',
                    'links' => 'https://codewithchris.com/xcode-tutorial/,
                    https://developer.apple.com/xcode/,
                    https://www.youtube.com/watch?v=lOZSQzsrNVQ&list=PLomLuS7LD16dIRNankzo6XoP6SKMicZi2' ,
                    'created_at'=>now(),

                ],
                [
                    'id' => '9',
                    'content_name' => 'Cocoao touch',
                    'description' => 'high-level application programming interfaces available in Cocoa Touch ',
                    'content_details' => 'Cocoa Touch is a user interface framework provided by Apple for building software applications for products like iPhone, iPad and iPod Touch. It is primarily written in Objective C language and is based on Mac OS X. Cocoa Touch was developed based on model view controller software architecture. The high-level application programming interfaces available in Cocoa Touch help to make animation, networking, and adding the appearance and behavior of the native platform to the developed applications possible with less code development.',
                    'image' => '/images/cocoao touch.png',
                    'links' => 'https://www.techopedia.com/definition/27562/cocoa-touch-ios,
                    https://www.youtube.com/watch?v=X_MJd8wqTBM&list=PLE83F832121568D36,
                    https://www.youtube.com/watch?v=oesNwgHn1ws&list=PL78146AD7DE9EE909' ,
                    'created_at'=>now(),


                ],

                [
                    'id' => '10',
                    'content_name' => 'JAVA',
                    'description' => 'used to create complete applications that may run on a single computer or be distributed among servers and clients in a network.',
                    'content_details' => 'Java is a high-level programming language developed by Sun Microsystems. It was originally designed for developing programs for set-top boxes and handheld devices, but later became a popular choice for creating web applications.
                    ',
                    'image' => '/images/java.png',
                    'links' => 'https://www.youtube.com/watch?v=Hl-zzrqQoSE&list=PLFE2CE09D83EE3E28,
                    https://www.youtube.com/watch?v=TBWX97e1E9g&list=PLE7E8B7F4856C9B19,
                    https://www.java.com/en/' ,
                    'created_at'=>now(),


                ],

                [
                    'id' => '11',
                    'content_name' => 'SDK',
                    'description' => 'SDKs contain sample code, which provides developers with example programs and libraries.',
                    'content_details' => 'Jtands for "Software Development Kit." An SDK is a collection of software used for developing applications for a specific device or operating system. Examples of SDKs include the Windows 7 SDK, the Mac OS X SDK, and the iPhone SDK.
                    ',
                    'image' => '/images/SDK.png',
                    'links' => 'https://www.youtube.com/watch?v=7hgmTnxgpdo,
                    https://developer.android.com/sdk/older_releases.html,
                    https://www.webopedia.com/TERM/S/SDK.html' ,
                    'created_at'=>now(),
                    

                ],

                [
                    'id' => '12',
                    'content_name' => 'XML',
                    'description' => 'It is a "metalanguage" that can be used to create markup languages for specific applications.',
                    'content_details' => 'Stands for "Extensible Markup Language." (Yes, technically it should be EML). XML is used to define documents with a standard format that can be read by any XML-compatible application. The language can be used with HTML pages, but XML itself is not a markup language.
                    ',
                    'image' => '/images/XML.png',
                    'links' => 'https://www.w3schools.com/xml/xml_whatis.asp,
                    https://www.w3.org/XML/,
                    https://www.youtube.com/watch?v=n-y-YHVZSwk&list=PLmdFG1KSZhosqwkP-BCtcMq0KubZ4v1Cm' ,
                    'created_at'=>now(),
                    

                ],

                [
                    'id' => '13',
                    'content_name' => 'Windows phone',
                    'description' => 'Microsoft reorganized the Windows Mobile group and started work on a new mobile operating system.',
                    'content_details' => 'the replacement successor to Windows Mobile and Zune. Windows Phone featured a new user interface derived from Metro design language. Unlike Windows Mobile, it was primarily aimed at the consumer market rather than the enterprise market. It was first launched in October 2010 with Windows Phone 7. Windows Phone 8.1 is the latest public release of the operating system, released to manufacturing on April 14, 2014.
                    ',
                    'image' => '/images/windows_phone.png',
                    'links' => 'https://www.w3schools.com/xml/xml_whatis.asp,
                    https://www.w3.org/XML/
                   ' ,
                    'created_at'=>now(),
                    

                ],

                [
                    'id' => '14',
                    'content_name' => 'Cloud Architect',
                    'description' => 'Cloud architects are responsible for managing the cloud computing architecture in an organization.',
                    'content_details' => 'Cloud computing is believed to have been invented by Joseph Carl Robnett Licklider in the 1960s with his work on ARPANET to connect people and data from anywhere at any time. In 1983, CompuServe offered its consumer users a small amount of disk space that could be used to store any files they chose to upload.
                    Cloud storage services may be accessed through a colocated cloud computing service, a web service application programming interface (API) or by applications that utilize the API, such as cloud desktop storage, a cloud storage gateway or Web-based content management systems.
                    ',
                    'image' => '/images/logo.png',
                    'links' => 'https://www.guru99.com/cloud-computing-for-beginners.html,
                    https://www.javatpoint.com/cloud-computing-tutorial/,
                    https://www.udemy.com/course/introduction-to-cloud-computing/
                   ' ,
                    'created_at'=>now(),
                    

                ],

                [
                    'id' => '15',
                    'content_name' => 'Cloud Consultant',
                    'description' => 'Cloud consultants start out by examining the typical duties performed by their clients.',
                    'content_details' => 'Cloud consultants combine investigative and analytical skills in their work. They use cloud-based computer programs and systems to address the specific business needs of their clients.
                    ',
                    'image' => '/images/logo.png',
                    'links' => 'https://cloud.google.com/training/courses/core-fundamentals,
                    https://www.ibm.com/cloud/learn/cloud,
                    https://www.coursera.org/learn/cloud-computing
                   ' ,
                    'created_at'=>now(),
                    

                ],

                [
                    'id' => '16',
                    'content_name' => 'Cloud Services Developer',
                    'description' => 'in addition to the design and implementation of cloud infrastructures, cloud developers also ensure the effective design of business processes in the cloud.',
                    'content_details' => 'A cloud software developer designs and develops secure cloud applications, services, and products. This can include everything from back-end, front-end, web application, full-stack, data and application integration, and cloud application deployment. Similar responsibilities to a traditional software developer’s job, yet with a different focus.
                    ',
                    'image' => '/images/logo.png',
                    'links' => 'https://www.udemy.com/course/learn-cloud-computing-from-scratch/,
                    https://www.lynda.com/learning-paths/Developer/become-a-cloud-developer
                    
                   ' ,
                    'created_at'=>now(),
                    

                ],
                [
                    'id' => '17',
                    'content_name' => 'Cloud System Engineer',
                    'description' => 'The cloud engineer position can be broken into multiple roles, including cloud architect.',
                    'content_details' => 'A cloud engineer is an IT professional responsible for any technological duties associated with cloud computing, including design, planning, management, maintenance and support.
                    The cloud engineer position can be broken into multiple roles, including cloud architect, cloud software engineer, cloud security engineer, cloud systems engineer and cloud network engineer. Each position focuses on a specific type of cloud computing, rather than the technology as a whole. Companies that hire cloud engineers are often looking to deploy cloud services or further their cloud understanding and technology.
                    ',
                    'image' => '/images/logo.png',
                    'links' => 'https://www.coursera.org/professional-certificates/cloud-engineering-gcp,
                    https://www.lynda.com/learning-paths/Developer/become-a-cloud-developer,
                    https://cloud.google.com/training/courses/core-fundamentals,
                    https://www.ibm.com/cloud/learn/cloud
                    
                   ' ,
                    'created_at'=>now(),
                    

                ],

                [
                    'id' => '18',
                    'content_name' => 'Network Administrator',
                    'description' => 'The role of the network administrator can vary significantly depending on an organizations size, location, and socio-economic considerations.',
                    'content_details' => 'A network administrator is the person designated in an organization whose responsibility includes maintaining computer infrastructures with emphasis on networking. Responsibilities may vary between organizations, but on-site servers, software-network interactions as well as network integrity/resilience are the key areas of focus.
                    The role of the network administrator can vary significantly depending on an organizations size, location, and socio-economic considerations. Some organizations work on a user-to-technical support ratio,[1][2] whilst others implement many other strategies.
                    ',
                    'image' => '/images/logo.png',
                    'links' => 'https://www.coursera.org/professional-certificates/cloud-engineering-gcp,
                    https://www.lynda.com/learning-paths/Developer/become-a-cloud-developer,
                    https://cloud.google.com/training/courses/core-fundamentals,
                    https://www.ibm.com/cloud/learn/cloud
                    
                   ' ,
                    'created_at'=>now(),
                    

                ],

                [
                    'id' => '19',
                    'content_name' => 'IT Analyst',
                    'description' => 'The process begins with managers, who provide the IT analyst with a broad objective, like capturing marketing research data.',
                    'content_details' => 'An IT analyst, also called a systems analyst, designs and implements information systems that optimize organizational efficiency. The process begins with managers, who provide the IT analyst with a broad objective, like capturing marketing research data. The IT analyst employs modeling, information engineering and cost-based accounting to develop a system that satisfies both management and end-users in the most cost-effective and efficient way possible. Upon approval, the IT analyst oversees its implementation by managing programmers, coders and equipment vendors to ensure the design is properly executed in a timely manner and stays within budget. The IT analyst also debugs the system and ensures that it is error-free.
                    ',
                    'image' => '/images/logo.png',
                    'links' => 'https://www.coursera.org/professional-certificates/cloud-engineering-gcp,
                    https://www.lynda.com/learning-paths/Developer/become-a-cloud-developer,
                    https://cloud.google.com/training/courses/core-fundamentals,
                    https://www.ibm.com/cloud/learn/cloud
                    
                   ' ,
                    'created_at'=>now(),
                    

                ],
                [
                    'id' => '20',
                    'content_name' => 'IT Coordinator',
                    'description' => 'T coordinators may also provide an organization with day-to-day computer support, such as installing basic software and providing updates.',
                    'content_details' => 'IT coordinators, also referred to as managers, are responsible for determining, developing and implementing an organizations information technology goals. Their activities can include reviewing and filling internal help requests and monitoring computer performance for potential problems. Administrative tasks include tracking computer-related orders and bills, maintaining license documentation and renewing upgrades. IT coordinators may also provide an organization with day-to-day computer support, such as installing basic software and providing updates.
                    ',
                    'image' => '/images/logo.png',
                    'links' => 'https://www.coursera.org/professional-certificates/cloud-engineering-gcp,
                    https://www.lynda.com/learning-paths/Developer/become-a-cloud-developer,
                    https://cloud.google.com/training/courses/core-fundamentals,
                    https://www.ibm.com/cloud/learn/cloud
                    
                   ' ,
                    'created_at'=>now(),
                    

                ],

                [
                    'id' => '21',
                    'content_name' => 'IT Adminstrator',
                    'description' => 'to sure that data is available to users and is secure from unauthorized access. Database administrators work in many different types of industries.',
                    'content_details' => 'A database administrator is someone who uses software to store and organize data, such as financial information and customer shipping records. They make sure that data is available to users and is secure from unauthorized access. Database administrators work in many different types of industries, including computer systems design and related services firms, insurance companies, banks, and hospitals.specialists may provide assistance to the organization’s computer users through phone, email, or in-person visits. They often work under network and computer systems administrators, who handle more complex tasks.
                    Database administrators, often called DBAs, make sure that data analysts can easily use the database to find the information they need and that the system performs as it should. DBAs sometimes work with an organization’s management team to understand the company’s data needs and to plan the goals of the database.
                    Database administrators often plan security measures, making sure that data is secure from unauthorized access. Many databases contain personal or financial information, making security important. Database administrators are responsible for backing up systems in case of a power outage or other disaster. They also ensure the integrity of the database, guaranteeing that the data stored in it comes from reliable sources.
                    ',
                    'image' => '/images/logo.png',
                    'links' => 'https://www.coursera.org/professional-certificates/cloud-engineering-gcp,
                    https://www.lynda.com/learning-paths/Developer/become-a-cloud-developer,
                    https://cloud.google.com/training/courses/core-fundamentals,
                    https://www.ibm.com/cloud/learn/cloud
                    
                   ' ,
                    'created_at'=>now(),
                    

                ],
                [
                    'id' => '22',
                    'content_name' => 'International Technology Analyst',
                    'description' => 'They bring business and information technology (IT) together by understanding the needs and limitations of both.',
                    'content_details' => 'Computer systems analysts study an organization’s current computer systems and procedures and design information systems solutions to help the organization operate more efficiently and effectively. They bring business and information technology (IT) together by understanding the needs and limitations of both.
                    Computer systems analysts use a variety of techniques such as data modeling to design computer systems. Data modeling allows analysts to view the processes and data flows even before programs have been written.
                    ',
                    'image' => '/images/logo.png',
                    'links' => 'https://www.coursera.org/professional-certificates/cloud-engineering-gcp,
                    https://www.lynda.com/learning-paths/Developer/become-a-cloud-developer,
                    https://cloud.google.com/training/courses/core-fundamentals,
                    https://www.ibm.com/cloud/learn/cloud
                    
                   ' ,
                    'created_at'=>now(),
                    

                ],
                [
                    'id' => '23',
                    'content_name' => 'International Technology Leadership',
                    'description' => 'Today, more IT leaders are making that move to the top of the business.',
                    'content_details' => 'IT leadership is the group of senior executives in an organization responsible for the information technology (IT) infrastructure and applications that enable and drive the overarching business strategy and goals. The top IT leader is most frequently referred to  as the chief information officer , or CIO, but at some organizations this responsibility is now shared with a variety of "information chiefs," including the chief digital officer, the chief data officer and the chief analytics officer.
                    ',
                    'image' => '/images/logo.png',
                    'links' => 'https://www.coursera.org/professional-certificates/cloud-engineering-gcp,
                    https://www.lynda.com/learning-paths/Developer/become-a-cloud-developer,
                    https://cloud.google.com/training/courses/core-fundamentals,
                    https://www.ibm.com/cloud/learn/cloud
                    
                   ' ,
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

                [
                    'category_id' => '2',
                    'content_id' => '4',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '2',
                    'content_id' => '5',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '2',
                    'content_id' => '6',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '3',
                    'content_id' => '1',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '3',
                    'content_id' => '2',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '3',
                    'content_id' => '3',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '3',
                    'content_id' => '4',
                    'created_at'=>now(),

                ],[
                    'category_id' => '3',
                    'content_id' => '5',
                    'created_at'=>now(),

                ],[
                    'category_id' => '3',
                    'content_id' => '6',
                    'created_at'=>now(),

                ],

                [
                    'category_id' => '4',
                    'content_id' => '7',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '4',
                    'content_id' => '8',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '4',
                    'content_id' => '9',
                    'created_at'=>now(),

                ],

                [
                    'category_id' => '5',
                    'content_id' => '10',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '5',
                    'content_id' => '11',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '5',
                    'content_id' => '12',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '6',
                    'content_id' => '13',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '7',
                    'content_id' => '14',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '8',
                    'content_id' => '15',
                    'created_at'=>now(),

                ],

                [
                    'category_id' => '9',
                    'content_id' => '16',
                    'created_at'=>now(),

                ],

                [
                    'category_id' => '10',
                    'content_id' => '17',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '11',
                    'content_id' => '18',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '12',
                    'content_id' => '19',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '13',
                    'content_id' => '20',
                    'created_at'=>now(),

                ],

                [
                    'category_id' => '14',
                    'content_id' => '21',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '15',
                    'content_id' => '22',
                    'created_at'=>now(),

                ],
                [
                    'category_id' => '16',
                    'content_id' => '23',
                    'created_at'=>now(),

                ],
               
               
                
            ]
        );

         
        DB::table('mindmaps')->insert(

            [
                [

                'id' => '1',
                'name' => 'web development',
                'image' => '/images/web.png',
                'created_at'=>now(),
                
                ],

                [
                    'id' => '2',
                    'name' => 'Back End',
                    'image' => '/images/back.png',
                    'created_at'=>now(),
                
                ],

                [
                    'id' => '3',
                    'name' => 'Front End',
                    'image' => '/images/front_end.png',
                    'created_at'=>now(),
                    
                ],

                [
                    'id' => '4',
                    'name' => 'IOS',
                    'image' => '/images/IOS_mindmap.png',
                    'created_at'=>now(),
                    
                ],

                [
                    'id' => '5',
                    'name' => 'cloud developer',
                    'image' => '/images/cloud developer_mindmap.png',
                    'created_at'=>now(),
                    
                ],

                [
                    'id' => '6',
                    'name' => 'cloud computing',
                    'image' => '/images/Cloud_mindmap.png',
                    'created_at'=>now(),
                     
                ],

                [
                    'id' => '7',
                    'name' => 'android',
                    'image' => '/images/Android_mindmap.png',
                    'created_at'=>now(),
                    
                ],

                [
                    'id' => '8',
                    'name' => 'it analyst',
                    'image' => '/images/It Analyst.png',
                    'created_at'=>now(),
                    
                ],

                [
                    'id' => '9',
                    'name' => 'system admin',
                    'image' => '/images/system admin_mindmap.png',
                    'created_at'=>now(),
                    
                ],


            ]
    
        );

    
    }
}