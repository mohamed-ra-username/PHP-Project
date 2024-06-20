<?php
    $user = 'Admin';
    $students = [
        [
            "name" => "Mohammed Elsaeed",
            "gpa" => 3.5,
            "email" => "gibberesh@gmail.com"
        ],
        [
            "name" => "ahmed",
            "gpa" => 5,
            "email" => "shinycapybara@gmail.com"
        ],
        [
            "name" => "amr nader",
            "gpa" => 2.0,
            "email" => "lolatnight@gmail.com"
        ],
        [
            "name" => "mahmoud abdelgawad",
            "gpa" => 3,
            "email" => "gagag@gmail.com
            "]
    ];
    $courses = [
        [
            "title" => "English",
            "instructor" => "Mohamed Ragab",
            "description" => "A pro teatcher."
        ],
        [
            "title" => "Arabic",
            "instructor" =>"Amr Nader",
            "description" => "Thrilling experience of learning baby material."
        ],
        [
            "title" => "Mohamed Elsaeed",
            "instructor" => "Brainrot",
            "description" => "Enjoy your 24 hours with a stream of tiktok and youtube mixed. "
        ]
    ];
    function add_course($title, $instructor, $description){
        global $courses;
        $courses[] = [
            "title" => $title,
            "instructor" =>$instructor,
            "description" => $description
        ];
    }
    function add_student($name, $gpa, $email){
        global $students;
        $students[] = [
            "name" => $name,
            "gpa" =>$gpa,
            "email" => $email
        ];
    }

?>
