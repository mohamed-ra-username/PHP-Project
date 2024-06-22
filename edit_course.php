<?php
    include "database.php";
    $id = $_GET;
    $sql = "UPDATE `students` SET `id`='[value-1]',`name`='[value-2]',`gpa`='[value-3]',`email`='[value-4]',`owned_courses`='[value-5]' WHERE 1";
?>
<form class="create-student-form">
    <label for="student-name">Name:</label>
        <input class="forminput" type="text" id="student-name" name="name" required="">
                <br>
            <label for="gpa">GPA:</label>
                <input class="forminput" type="number" step="0.01" id="gpa" name="gpa" required="">
                <br>
            <label for="email">email:</label>
        <input class="forminput" type="email" id="email" name="email" required="">
                <br>
    <button type="submit">Add Student</button>
</form>