<!DOCTYPE html>
<link rel="stylesheet" href="styles.css">

<html lang="en">
    <?php
        include "database.php";
        
        function Student_Student()
        {
            foreach($students as $name)
            {
                $name = ucfirst();
                echo ' Student: ';
                echo '<div class="student" >'. $name .'</div>';
                echo '<br>';
            }
        }
        
        function Show_Courses(){

            foreach($students as $name)
            {
                $name = ucfirst();
                echo '<br>';
                $display_tag = "Course: $name";
                echo '<div class="Course" >'. $display_tag .'</div>';
            }
        }
    ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1>-My website-</h1>
        hello and welcome
        <?php
            $user ="Admin";
            if ($user == "Admin") {
                echo "Mr admin";
            } else {
                echo "Student";
        }?>
        <a href="Courses.php">
            <button type="button"> Courses</button>
        </a>
        <a href="Students.php">
            <button type="button"> Students</button>
        </a>
    </body>
</html>
