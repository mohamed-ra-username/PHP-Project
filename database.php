<?php
    $user = 'Admin';
    $students = [
        ["name" => "Mohammed Elsaeed" , "gpa" => 3.5, "email" => "gibberesh@gmail.com"],
        ["name" => "ahmed"   , "gpa" => 5, "email" => "shinycapybara@gmail.com"],
        ["name" => "amr nader"     , "gpa" => 2.0, "email" => "lolatnight@gmail.com"],
        ["name" => "mahmoud abdelgawad"    , "gpa" => 3, "email" => "gagag@gmail.com"]
    ];
    $courses = [
        [
            "title" => "english",
            "instructor" => "Mohamed Ragab",
            "description" => "A pro teatcher"
        ],
        [
            "title" => "",
            "instructor" =>"",
            "description" => ""
        ],
        [
            "title" => "",
            "instructor" =>"",
            "description" => ""
        ]
    ];
    function add_course($title, $instructor, $description){
        global $courses;
        $courses[] = [
            "title" => $title,
            "instructor" =>$instructor,
            "description" => $instructor];
    }
    add_course("mohamed","test","test")
?>
