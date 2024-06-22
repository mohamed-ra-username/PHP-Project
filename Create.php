<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Entries</title>
</head>
<body>
    <div>
    <h1>Add Student</h1>
    <form id="create-student-form">
        <label for="student-name">Name:</label>
        <input type="text" id="student-name" name="name" required>
        <br>
        <label for="gpa">GPA:</label>
        <input type="number" step="0.01" id="gpa" name="gpa" required>
        <br>
        <label for="email">email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="submit">Add Student</button>
    </form>
</div>

    <div>
    <h1>Add Course</h1>
    <form id="create-course-form">
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>
        <br>
        <label for="description">Description:</label>
        <input type="text" id="description" name="description" required>
        <br>
        <label for="instructor">Instructor:</label>
        <input type="text" id="instructor" name="instructor" required>
        <br>
        <button type="submit">Add Course</button>
    </form>
</div>

    <?php
        include "database.php";
        
        $get = $_GET;
        if (isset($get["name"]))
        {
            $name = $get["name"];
            $gpa = $get["gpa"];
            $email = $get["email"];
    
            $sql ='INSERT INTO students'.  "(`id`, `name`, `gpa`, `email`, `owned_courses`)".  'VALUES' . "(NULL, '$name', '$gpa', '$email', NULL)";
            $test = mysqli_query($conn, $sql);
        }
        if (isset($get["subject"]))
        {
            $subject = $get["subject"];
            $description = $get["description"];
            $instructor = $get["instructor"];
    
            $sql ='INSERT INTO students'.  "(`id`, `name`, `gpa`, `email`, `owned_courses`)".  'VALUES' . "(NULL, '$subject', '$description', '$instructor', NULL)";
            $test = mysqli_query($conn, $sql);
        }
    ?>
</body>
</html>
