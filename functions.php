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
        // hello
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