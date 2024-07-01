<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/create.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
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
            <form class="create-course-form" autocomplete="on" method="post">
                <label for="title">Subject:</label>
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
        
        $post = $_POST;

        if (isset($post["subject"]))
        {
            $title = $post["subject"];
            $description = $post["description"];
            $instructor = $post["instructor"];
    
            $sql ="INSERT INTO `courses` (`id`, `description`, `title`, `instructor`) VALUES (NULL, '$description', '$title', '$instructor')";
            $test = mysqli_query($conn, $sql);
            if ($test)
            header("location:courses.php");
        }
    ?>
</body>
</html>
