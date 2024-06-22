<?php
    include "database.php";


    $courseId = $_GET["id"];
    $query = "DELETE FROM courses WHERE id = $courseId";
    $result = mysqli_query($conn, $query);
    

    if ($result) {
        
        $response = array("success" => true);
        echo json_encode($response);

    } else {
        
        $response = array("success" => false, "message" => "Failed to delete student");
        echo json_encode($response);
    }


?>