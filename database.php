<?php $user = 'Admin';

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "test";
    
    $conn= mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    $all_students = mysqli_query($conn, "SELECT * FROM students;");
    $all_courses = mysqli_query($conn, "SELECT * FROM courses;");

    function CREATE_student($id = null,$name,$gpa,$email,$owned_courses){
        global $conn;
        $query = "INSERT INTO `students`(`id`, `name`, `gpa`, `email`, `owned_courses`) VALUES ('$id','$name','$gpa','$email','$owned_courses');";
        mysqli_query($conn,$query);
    }
    
    function UPDATE_STUDENT($id, $name,$gpa,$email,$owned_courses){
        global $conn;
        $query = "UPDATE `students` SET `name`='$name',`gpa`='$gpa',`email`='$email',`owned_courses`='$owned_courses' WHERE id=$id;";
        mysqli_query($conn,$query);
    }
    
    function DELETE_STUDENT($id ){
        global $conn;
        $query = "DELETE FROM `students` WHERE id=$id;";
        mysqli_query($conn,$query);
    }
?>
