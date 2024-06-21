<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>
</head>
<body>
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
                <table class="data">
                    <thead>
                        <tr>
                            <?php
                            include "database.php";
                            if ($user == "Admin") {
                                echo '<th class="admin-head">' . 'Admin Panel' . '</th>';
                            }

                            foreach(["ID", "Subject", "Description", "Instructor"] as $title) {
                                echo '<th>' . " $title" . '</th>';
                            }
                            ?>        
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            foreach($all_courses as $item){
                                $title = $item["title"];
                                $description = $item["description"];
                                $instructor = $item["instructor"];
                                
                                echo '<tr>';
                                    if ($user == "Admin"){
                                        echo '<td class="admin-panel">';
                                        echo '<button class="button btn-info" type="button">EDIT</button>';
                                        echo '<button class="button btn-danger" type="button">DELETE</button>';
                                        echo '</td>';
                                    }
                                    echo "<td class='small'>" . $item['id'] . "</td>";
                                    echo "<td class='title'> $title</td>";
                                    echo "<td class='description'> $description</td>";
                                    echo "<td class='instructor'> $instructor</td>";
                                echo '</tr>';
                            } 
                        ?>
                    </tbody>

                    <?php
                        if ($user == "Admin"){
                            echo '<tfoot>';
                                echo '<tr>';
                                    echo '<tr>';
                                        echo  '<button class="button btn-success" type="button">';
                                            echo 'Create new';
                                        echo '</button>';
                                    echo '</tr>';
                                echo '</tr>';
                            echo '</tfoot>';
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
