
<?php
    include "database.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">
                        <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>
                        
            <script>
                new MultiSelectTag('courses') // id
            </script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/create.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Entry</title>
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
            
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">
            <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>

            <div class="cont">
                <h1>Edit Student</h1>
                <form class='create-student-form' autocomplete="on" method='post'>
                    <?php
                        $has_id = isset($_GET["id"]) && strlen($_GET["id"]);

                        if (empty($has_id)){
                            header("location:students.php");
                        }
                        else{
                            $id = $_GET["id"];
                            $query = "SELECT * FROM students where id=$id;";
                            $found = mysqli_query($conn,$query);
                            if ( !(mysqli_num_rows($found)))
                            header("location:students.php");
                        }
                        
                        $data = mysqli_fetch_assoc($found);
                        $old_name = $data["name"];
                        $old_email = $data["email"];
                        $old_gpa = $data["gpa"];
                        $old_courses = $data["owned_courses"];
                    ?>
                    <label for='student-name'>Name:</label>
                    <input class='forminput' type='text' id='student-name' name='name' value ='<?php echo $old_name?>' required>
                    <br>

                    <label for='gpa'>GPA:</label>
                    <input class='forminput' type='number' step='0.01' id='gpa' name='gpa' value = '<?php echo $old_gpa?>' required>
                    <br>

                    <label for='email'>email:</label>
                    <input class='forminput' type='email' id='email' name='email' value = '<?php echo $old_email?>' required>
                    <br>
                    
                    <label for="courses">Course:</label>
                    <select name='courses[]' id='courses' multiple>
                    <?php
                        foreach ($all_courses as $course) {
                            $id = $course["id"];
                            $title = ucfirst($course["title"]);
                            echo "<option value = '$id'";
                            echo str_contains($old_courses,$id)? "selected >" : " >";
                            echo $title;
                            echo "</option>";
                        }
                    ?>
                    </select>
                    <br>

                    <button type='submit'>Edit Student</button>
                </form>
            </div>
        </div>
    </div>

</body>
<?php
        
        if (isset($_POST["name"]))
        {
            $id = $_GET["id"];
            $name = $_POST["name"];
            $gpa = $_POST["gpa"];
            $email = $_POST["email"];
            $new_courses = isset($_POST["courses"]) ? join(",",$_POST["courses"]) : null;

            $sql = "UPDATE `students` SET `name` = '$name', `gpa` = '$gpa', `email` = '$email', `owned_courses` = '$new_courses' WHERE `students`.`id` = $id";

            $test = mysqli_query($conn, $sql);
            if ($test)
            header("location:students.php");
        }
    ?>
<script>
    new MultiSelectTag('courses')
</script>
</html>