<?php
    include "database.php";

    if (!isset($_GET["id"]) || !is_numeric($_GET["id"]) || $_GET["id"] < 1) {
        $response = array("success" => false, "message" => "Invalid course ID");
        echo json_encode($response);
        exit;
    }

    $stmt = $conn->prepare("DELETE FROM courses WHERE id = ?");
    $stmt->bind_param("i", $_GET["id"]);
    $stmt->execute();

    if ($stmt) {
        
        $response = array("success" => true);
        echo json_encode($response);
    } else {
        
        $response = array("success" => false, "message" => "Failed to delete course");
        echo json_encode($response);
    }
    header("Refresh:0");

?>