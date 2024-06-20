
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
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
        
        echo '<table class = "data">';
        
            echo '<thead>';
                echo '<tr>';
                    if ($user == "Admin")
                    {
                        echo '<th class = "admin-head">' . 'Admin Panel' . '</th>';
                    }

                    foreach(["ID", "Subject", "Description", "Instructor"] as $title) {
                        echo '<th>' . " $title" . '</th>';
                    }

                echo '</tr>';
            echo '</thead>';

            echo '<tbody>';
                foreach($courses as  $item){
                    $title = $item["title"];
                    $description = $item["description"];
                    $instructor = $item["instructor"];
                    
                    echo '<tr>';
                        if ($user == "Admin"){
                            echo '<td class = "admin-panel">';
                            echo '<button class = "button btn-info" type="button">EDIT</button>';
                            echo '<button class = "button btn-danger" type="button">DELETE</button>';
                            echo '</td>';
                        }
                            echo "<td class = 'small'>" . ++$current_row . "</td>";
                            echo "<td class = 'title'> $title</td>";
                            echo "<td class = 'description'> $description</td>";
                            echo "<td class = 'instructor'> $instructor</td>";
                    echo '</tr>';
                } 
            echo '</tbody>';

            

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

        echo '</table>'
    ?>
</body>
</html>
