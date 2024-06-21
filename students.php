<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="table+.css">
    <link rel="stylesheet" href="buttons.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $current_row = 0;
        require_once "database.php";
        require_once "functions.php";


        Back_Button();
    ?>
        <table class = "data">
        
            <thead>
                <tr>
                    <?php
                        if ($user == "Admin")
                            echo '<th class = "admin-head">' . 'Admin Panel' . '</th>';
                    ?>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>GPA</th>
                    
                    <?php
                    if ($user == "Admin"){
                        echo "<th> Enrolled in </th>";
                    }
                    ?>
                </tr>
            </thead>

            <tbody>
                <?php
                    while ($row = mysqli_fetch_assoc($all_students)) {
                        $id = $row['id'] ;
                        $name = $row['name'] ;
                        $gpa = $row['gpa'] ;
                        $email = $row['email'] ;
                        $owned_courses = $row["owned_courses"];
                ?>

                <tr>
                    <?php
                        if ($user == "Admin"){
                            echo '<td class = "admin-panel">';
                            echo '<button class = "button btn-info" type="button">EDIT</button>';
                            echo '<button class = "button btn-danger" type="button">DELETE</button>';
                            echo '</td>';
                        }
                        echo "<td class = 'small'>" . ++$current_row . "</td>";
                            echo "<td class = 'name'> $name</td>";
                            echo "<td class = 'email'> $email</td>";
                            echo "<td class = 'small'> $gpa</td>";
                            
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
                                ?>
                                </td>
                    </tr>
            </tbody>
            <?php
                if ($user == "Admin"){
                    echo '<tfoot>';
                        echo '<tr>';
                            echo '<th>';
                                echo  '<button class = "button btn-success" type="button">';
                                    echo 'Create new';
                                echo '</button>';
                            echo '</th>';
                        echo '</tr>';
                    echo '</tfoot>';
                }
            ?>

        </table>


</body>

</html>