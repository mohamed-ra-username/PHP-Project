<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Entries</title>
</head>
<body>
    <h1>Add Student</h1>
    <form id="create-student-form">
        <label for="student-name">Name:</label>
        <input type="text" id="student-name" name="name" required>
        <br>
        <label for="gpa">GPA:</label>
        <input type="number" step="0.01" id="gpa" name="gpa" required>
        <br>
        <label for="enrolled">Enrolled:</label>
        <input type="text" id="enrolled" name="enrolled" required>
        <br>
        <button type="submit">Add Student</button>
    </form>

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

    <script src="script.js"></script>
</body>
</html>
