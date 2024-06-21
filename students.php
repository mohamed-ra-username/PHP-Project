<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="table.css">
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
            $current_row = 0;
            require_once "database.php";
            require_once "functions.php";

        ?>

<div class="container">
        <nav class="nav">
            <span>Dashboard</span>
            <div class="sidebar">
                <a href="index.php" class="sideitem"> <i class="fa fa-home"></i> Home</a>
                <a href="courses.php" class="sideitem"> <i class="fa fa-graduation-cap"></i>Courses</a>
                <a href="students.php" class="sideitem"> <i class="fa fa-address-card"></i>Students</a>
            </div>
        </nav>

        <div class="content">
            <header class="Header">
                <span class="Home"><i class="fa fa-home"></i>Home</span>
                <div class="Search">
                    <i class="fa fa-search"></i>
                    <input type="search" placeholder="Search">
                </div>
            </header>
            <div class="cont">
        <table class = "data">
            <thead>
                <tr>
                    <?php if ($user == "Admin") echo '<th class = "admin-head">' . 'Admin Panel' . '</th>';?>

                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>GPA</th>
                    
                    <?php if ($user == "Admin") echo "<th> Enrolled in </th>";?>
                </tr>
            </thead>

            <tbody>
                <?php
                    while ($row = mysqli_fetch_assoc($all_students)) 
                    {
                        //defination
                        $id = $row['id'] ;
                        $name = $row['name'] ;
                        $gpa = $row['gpa'] ;
                        $email = $row['email'] ;
                        $owned_courses = $row["owned_courses"];
                        // row details
                        echo '<tr>';
                            if ($user == "Admin"){
                                echo '<td class = "admin-panel">';
                                echo '<button class = "button btn-info" type="button">EDIT</button>';
                                echo '<button class = "button btn-danger" type="button">DELETE</button>';
                                echo '</td>';
                            }
                            echo "<td class = 'small'>" . ++$current_row . "</td> <td class = 'name'> $name</td> <td class = 'email'> $email</td> <td class = 'small'> $gpa</td>";
                            if ($user == "Admin")
                            {
                                echo '<td>';
                                if($owned_courses == null)
                                    Echo "None";
                                else
                                {
                                    $owned_courses = str_split($owned_courses);
                                    $i =0;
                                    foreach ($owned_courses as $idx) {
                                        $id = intval($idx);
                                        $courses = mysqli_query($conn, "SELECT title FROM courses where id=$id;");
                                        $course = mysqli_fetch_assoc($courses);
                                        
                                        echo $course ? $course["title"] : "<err> Course Not Found </err>";
                                        
                                        if (++$i < count($owned_courses))
                                        echo ", ";
                                        
                                    }
                                }
                                    echo '</td>';
                            }
                        echo '</tr>';
                    }
                ?>
            </tbody>

            <tfoot>
                <tr>
                    <tr>
                        <?php
                            if ($user == "Admin")
                            echo  '<button class = "button btn-success" type="button">
                            Create new
                            </button>';
                        ?>
                    </tr>
                </tr>
            </tfoot>
        </table>
                </div>
                </div>
    </body>
</html>