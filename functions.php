<?php
    function Back_Button(){
        echo '<a href="index.php">';
            echo '<button type="button">';
                echo 'Back';
            echo '</button>';
        echo '</a>';
    }
    function Students_page_Button(){
        echo '<a href="courses.php">';
            echo '<button type="button"> Courses</button>';
        echo '</a>';
    }
    function Courses_page_Button(){
        echo '<a href="students.php">';
            echo  '<button type="button"> Students</button>';
        echo '</a>';
    }
?>