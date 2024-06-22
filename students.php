
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

<script>
        
    function editStudent(id) {
        window.location.href = 'edit_student.php?id=' + id;
    }
</script>
<script>
    function deleteStudent(id) {
        if (confirm('Are you sure you want to delete this student?')) {
            fetch('delete_student.php?id=' + id, {
                method: 'DELETE'
            })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                var row = document.getElementById('row_' + id);
                if (row) {
                    row.parentNode.removeChild(row);
                }
                window.location.href = 'Students.php';
            } else {
                alert('Error deleting student: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while deleting the student.');
        });
    }
}
</script>


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
        <table class = "data">
            <thead>
                <tr>
                    <?php 
                    if ($user == "Admin") echo '<th class = "admin-head">' . 'Admin Panel' . '</th>';?>

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
                                echo '<button onclick="editStudent(' . $id . ')" class="button btn-info" type="button"><span>EDIT</span></button>';
                                echo '<button onclick="deleteStudent(' . $id . ')" class="button btn-danger" type="button"><span>DELETE</span></button>';
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
                            echo  '<a class="btn-success" href="CreateStudents.php">
                                Create new
                                </a>
                            ';
                        ?>
                    </tr>
                </tr>
            </tfoot>
        </table>
                </div>
                </div>
    </body>
</html>