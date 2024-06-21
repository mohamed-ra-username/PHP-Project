<?php $user = 'Admin';

    // $students = [
    //     [
    //         "name" => "Mohammed Elsaeed",
    //         "gpa" => 3.5,
    //         "email" => "gibberesh@gmail.com",
    //         "enrolled_courses" => [0,1]
    //     ],
    //     [
    //         "name" => "ahmed",
    //         "gpa" => 5,
    //         "email" => "shinycapybara@gmail.com",
    //         "enrolled_courses" => [0]
    //     ],
    //     [
    //         "name" => "amr nader",
    //         "gpa" => 2.0,
    //         "email" => "lolatnight@gmail.com",
    //         "enrolled_courses" => [1]
    //     ],
    //     [
    //         "name" => "mahmoud abdelgawad",
    //         "gpa" => 3,
    //         "email" => "gagag@gmail.com",
    //         "enrolled_courses" => []
    //     ]
    // ];
    // $courses = [
    //     [
    //         "title" => "English",
    //         "instructor" => "Mohamed Ragab",
    //         "description" => "A pro teatcher."
    //     ],
    //     [
    //         "title" => "Arabic",
    //         "instructor" =>"Amr Nader",
    //         "description" => "Thrilling experience of learning baby material."
    //     ],
    //     [
    //         "title" => "Brainrot",
    //         "instructor" => "Mohamed Elsaeed",
    //         "description" => "Enjoy your 24 hours with a stream of tiktok and youtube mixed. "
    //     ]
    // ];
    // function add_course($title, $instructor, $description){
    //     global $courses;
    //     $courses[] = [
    //         "title" => $title,
    //         "instructor" =>$instructor,
    //         "description" => $description
    //     ];
    // }
    // function add_student($name, $gpa, $email,$enrolled_courses){
    //     global $students;
    //     $students[] = [
    //         "name" => $name,
    //         "gpa" =>$gpa,
    //         "email" => $email,
    //         "enrolled_courses" => $enrolled_courses
    //     ];
    // }

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "students";
    
    $conn= mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    $all_students = mysqli_query($conn, "SELECT * FROM students;");
    $all_courses = mysqli_query($conn, "SELECT * FROM courses;");

    function create($id,$data){
        $sql = "INSERT INTO `students`(`id`, `name`, `gpa`, `email`, `owned_courses`) VALUES ('$id','$name','$gpa','$email','$owned_courses')";
    }
    function update($id){
        $sql = "UPDATE `students` SET `id`='[value-1]',`name`='[value-2]',`gpa`='[value-3]',`email`='[value-4]',`owned_courses`='[value-5]' WHERE 1";
    }
    function delete($id){
        $sql = "DELETE FROM `students` WHERE $id";
    }
?>
