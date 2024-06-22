<?php
    include "database.php";
?>
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

            <?php
                if (isset($_GET["id"]))
                {
                    $id = $_GET["id"];
                    $found = mysqli_query($conn,"SELECT * FROM students where id=$id;");
                }
                $data = mysqli_fetch_assoc($found);
                $old_name = $data["name"];
                $old_email = $data["email"];
                $old_gpa = $data["gpa"];
                echo "
                <div>
                    <h1>Edit Student</h1>
                    <form class='create-student-form' method='post'>
                        <label for='student-name'>Name:</label>
                        <input class='forminput' type='text' id='student-name' name='name' value ='$old_name' required>
                        <br>
                        <label for='gpa'>GPA:</label>
                        <input class='forminput' type='number' step='0.01' id='gpa' name='gpa' value = '$old_gpa' required>
                        <br>
                        <label for='email'>email:</label>
                        <input class='forminput' type='email' id='email' name='email' value = '$old_email' required>
                        <br>
                        <button type='submit'>Edit Student</button>
                    </form>
                </div>"
                ?>
    </div>
</div>
    <?php
        
        if (isset($_POST["name"]))
        {
            $name = $_POST["name"];
            $gpa = $_POST["gpa"];
            $email = $_POST["email"];

            $sql = "UPDATE `students` SET `id`='$id',`name`='$name',`gpa`='$gpa',`email`='$email'WHERE $id";

            $test = mysqli_query($conn, $sql);
            
        }
        // if (isset($get["subject"]))
        // {
        //     $subject = $get["subject"];
        //     $description = $get["description"];
        //     $instructor = $get["instructor"];
    
        //     $sql ='INSERT INTO students'.  "(`id`, `name`, `gpa`, `email`, `owned_courses`)".  'VALUES' . "(NULL, '$subject', '$description', '$instructor', NULL)";
        //     $test = mysqli_query($conn, $sql);
        // }
    ?>
</body>
</html>