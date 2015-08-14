<?php

    /* OVERALL LEVEL 0 */
    $skills[] = array(
        'name' => 'WEB',
        'description' => 'A full stack web developer with experience in design, front-end code, back-end code and Linux server management.',
        'level' => 0
    );

    /* SKILLS LEVEL 1 */
    $skills[] = array(
        'name' => 'PHP',
        'description' => 'I have used PHP as the backend for nearly all of my projects and have implimented PHP frameworks, plugins, and Content Mangement Systems.',
        'level' => 1
    );
    $skills[] = array(
        'name' => 'HTML',
        'description' => "For 10 years I have turned Photoshop and Illustrator files into HTML/CSS and have even taught it in both South Korea and Thailand.",
        'level' => 1
    );
    $skills[] = array(
        'name' => 'CSS',
        'description' => "For 10 years I have turned Photoshop and Illustrator files into HTML/CSS and have even taught it in both South Korea and Thailand.",
        'level' => 1
    );
    $skills[] = array(
        'name' => 'JS',
        'description' => 'I have used javascript extensively since working on a large project that required it. I have mainly used it within frameworks for the past 4 years.',
        'level' => 1
    );
    $skills[] = array(
        'name' => 'jQuery',
        'description' => 'In all of my projects in the past years jQuery has been my go-to framework choice when a website requires javascript.',
        'level' => 1
    );
    $skills[] = array(
        'name' => 'CodeIgniter',
        'description' => 'I used this PHP framework for quite a few projects and am very familiar with its capabilities and limitations.',
        'level' => 1
    );
    $skills[] = array(
        'name' => 'Photoshop',
        'description' => 'I first studied graphic design in high school and have used Photoshop to create websites, logos, ads, etc. ever since.',
        'level' => 1
    );


    /* SKILLS LEVEL 2 */
    $skills[] = array(
        'name' => 'HTML 5',
        'description' => 'I have used HTML 5 in a few projects and have researched and played with SVG and Canvas very briefly to know what it is capable of.',
        'level' => 2
    );
    $skills[] = array(
        'name' => 'CSS 3',
        'description' => 'Though I have not used all of the latest CSS 3 possibilities, I typically ask myself before doing something "Can it be done in CSS now?"',
        'level' => 2
    );
    $skills[] = array(
        'name' => 'Bootstrap',
        'description' => 'I have used nearly all of the Bootstrap CSS features but have yet to really dig into the JS features.',
        'level' => 2
    );
    $skills[] = array(
        'name' => 'Linux',
        'description' => 'I host all of my websites using Linux, specifically Ubuntu and have dealt with things from webmail to hacking attempts. I typically use Amazon AWS these days.',
        'level' => 2
    );
    $skills[] = array(
        'name' => 'MySql',
        'description' => 'This has been my database of choice for the past 10 years, though I have used others such as MSSql, I have always preferred MySql.',
        'level' => 2
    );
    $skills[] = array(
        'name' => 'Wordpress',
        'description' => 'I have built both plugins and themes in Wordpress for clients. This is the CMS I typically use when building a website, because of its simple admin panel.',
        'level' => 2
    );

    /* SKILLS LEVEL 3 */
    $skills[] = array(
        'name' => 'AngularJS',
        'description' => 'Through research I am aware of the capabilities of AngularJS and have used it in a few small projects.',
        'level' => 3
    );
    $skills[] = array(
        'name' => 'ExtJS',
        'description' => 'I used this extensively in a project a while back but have not used it in quite a while after I started using jQuery more.',
        'level' => 3
    );
    $skills[] = array(
        'name' => 'Java',
        'description' => 'I took a class in Java for a Bachelors with Liberty University in Application and Database Development.',
        'level' => 3
    );
    $skills[] = array(
        'name' => 'C#',
        'description' => 'I took a class in C# for a Bachelors with Liberty University in Application and Database Development.',
        'level' => 3
    );
    $skills[] = array(
        'name' => 'MSSql',
        'description' => 'I have worked using MSSql a few times and for the most part it was the same as MySql.',
        'level' => 3
    );

    /* SKILLS LEVEL 4 */
    $skills[] = array(
        'name' => 'Drupal',
        'description' => 'I have setup a basic Drupal website and done a bit of research into it.',
        'level' => 4
    );
    $skills[] = array(
        'name' => 'NodeJS',
        'description' => 'I have messed around with Node.js and Socket.io as well as Express and a few Node.js addons to get an idea of the capability of Node.js.',
        'level' => 4
    );
    $skills[] = array(
        'name' => 'Ruby',
        'description' => 'I have only had a chance to start looking at it and take a few tutorials on Code Academy.',
        'level' => 4
    );
    $skills[] = array(
        'name' => 'Python',
        'description' => 'I have only had a chance to start looking at it and take a few tutorials on Code Academy.',
        'level' => 4
    );





    header('Content-Type: application/json');
    echo ")]}',\n". json_encode($skills);

?>
