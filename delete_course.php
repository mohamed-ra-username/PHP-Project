<?php
        require_once "database.php";
        
        if($user != "Admin")
        header("location:Courses.php");

        $has_id = isset($_GET["id"]) && strlen($_GET["id"]);
        
        if (!($has_id)){
            $response = array("success" => false,"message" => "No course ID was given");
            echo json_encode($response);
            return;
        }

        $courseId = $_GET["id"];
        $query = "DELETE FROM courses WHERE id = $courseId";
        $found = mysqli_query($conn, $query);
        $result = mysqli_affected_rows($conn);

        if ($result) {
            $response = array("success" => true);
            echo json_encode($response);
        } else {
            
            $response = array("success" => false, "message" => "Failed to delete course","affected_rows"=>"$result");
            echo json_encode($response);
        }
    ?>