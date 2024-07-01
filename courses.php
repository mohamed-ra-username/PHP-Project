<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>
</head>

<script>
        
    function editCourse(id) {
        window.location.href = 'edit_course.php?id=' + id;
    }
</script>
<script>
function deleteCourse(id) {
    if (confirm('Are you sure you want to delete this course?')) {
        fetch('delete_course.php?id=' + id, {
            method: 'DELETE'
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                var row = document.getElementById('row_' + id);
                if (row) {
                    row.parentNode.removeChild(row);
                }
                window.location.href = 'Courses.php';

            } else {
                alert('Error deleting course: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while deleting the course.'+error);
        });
    }
}
</script>

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
                <table class="data">
                    <thead>
                        <tr>
                            <?php
                            require_once "database.php";

                            if ($user == "Admin") 
                            echo '<th class="admin-head"> Admin Panel</th>'
                            ?>

                            <th> ID </th>
                            <th> Subject</th>
                            <th> Description </th>
                            <th> Instructor </th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($all_courses as $item) {
                            $id = $item["id"];
                            $title = $item["title"];
                            $description = $item["description"];
                            $instructor = $item["instructor"];
                            
                            echo "<tr id='row_$id' >";
                            if ($user == "Admin") {
                                echo '<td class="admin-panel">';
                                echo '<button class="button btn-info" onclick="editCourse(' . $id . ')" type="button">EDIT</button>';
                                echo '<button class="button btn-danger" onclick="deleteCourse(' . $id . ')" type="button">DELETE</button>';
                                echo '</td>';
                            }
                            echo "<td class='small'> $id </td>";
                            echo "<td class='title'> $title </td>";
                            echo "<td class='description'> $description </td>";
                            echo "<td class='instructor'> $instructor </td>";
                            echo '</tr>';
                        } 
                        ?>
                    </tbody>

                    <?php
                        if ($user == "Admin")
                        echo  '
                            <a class="btn-success" href="CreateCourse.php">
                            Create new
                            </a>
                        '
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
