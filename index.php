<!DOCTYPE html>
<link rel="stylesheet" href="styles.css">
<html lang="en">
    
    
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    
    <body>
        <h1>-My website-</h1>
        hello and welcome 
        <?php
            require 'database.php';
            require "functions.php";
            // $user ="Admin";
            if ($user == "Admin") {
                echo "Mr admin";
            } else {
                echo "Student";
            
            Students_page_Button();
            Courses_page_Button();
        }?>

    </body>
</html>
