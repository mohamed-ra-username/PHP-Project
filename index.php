<!DOCTYPE html>
<link rel="stylesheet" href="styles.css">

<html lang="en">

    <?php
        include "database.php";

        function Display_Student($name)
        {
            $student_name = ucfirst($name);
            echo ' Student: ';
            echo '<div class="student" >'. $student_name .'</div>';
            echo '<br>';
        }

        function Show_Students($array){
            foreach($array as $name)
            {
                Display_Student($name);
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
            }?>                                                  hello my nigga

        <h2>Status:</h2>
        
        <?php
            Show_Students($students)
        ?>
    </body>
</html>
