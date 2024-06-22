<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="create.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Entries</title>
</head>
<body>
    <div class="container">
        <nav class="nav">
            <span>Dashboard</span>
            <div class="sidebar">
                <a href="Home.php" class="sideitem"> <i class="fa fa-home"></i> Home</a>
                <a href="Courses.php" class="sideitem"> <i class="fa fa-graduation-cap"></i>Courses</a>
                <a href="Students.php" class="sideitem"> <i class="fa fa-address-card"></i>Students</a>
            </div>
        </nav>

        <div class="content">
            <header class="Header">
                <?php
                    $url = $_SERVER['REQUEST_URI'];
                    $url = substr($url,18,strpos($url,".php"));
                    $url = substr($url,0,strpos($url,".php"));
                    $url = ucfirst($url);
                    
                    if ($url == "Home")
                    {
                        echo '<span class="Home"><i class="fa fa-home"></i>';
                    }if ($url == "Students")
                    {
                        echo '<span class="Home"><i class="fa fa-address-card"></i>';
                    }if ($url == "Courses")
                    {
                        echo '<span class="Home"><i class="fa fa-graduation-cap"></i>';
                    }
                    echo $url;
                ?>
                </span>
                <div class="Search">
                    <i class="fa fa-search"></i>
                    <input type="search" placeholder="Search">
                </div>
            </header>
            <div class="cont">

            <div>
            <h1>Add Course</h1>
            <form class="create-course-form">
                <label for="subject">Subject:</label>
                <input class="forminput" type="text" id="subject" name="subject" required>
                <br>
                <label for="description">Description:</label>
                <input class="forminput" type="text" id="description" name="description" required>
                <br>
                <label for="instructor">Instructor:</label>
                <input class="forminput" type="text" id="instructor" name="instructor" required>
                <br>
                <button type="submit">Add Course</button>
            </form>
        </div>
    </div>
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