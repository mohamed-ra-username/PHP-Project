<?php
require_once "database.php";

if ($_SERVER["REQUEST_METHOD"] === "DELETE") {
  
    $studentId = $_GET["id"];

  
    $query = "DELETE FROM students WHERE id = $studentId";
    $result = mysqli_query($conn, $query);

    if ($result) {
        
        $response = array("success" => true);
        echo json_encode($response);
    } else {
        
        $response = array("success" => false, "message" => "Failed to delete student");
        echo json_encode($response);
    }
} else {
   
    $response = array("success" => false, "message" => "Invalid request method");
    echo json_encode($response);
}
?>