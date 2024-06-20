
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <br>
    <?php
        require "database.php";
        // $current_row = 0;
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

                    foreach(["name", "gpa", "email"] as $title) {
                        echo '<th>' . "student $title" . '</th>';
                    }

                echo '</tr>';
            echo '</thead>';

            echo '<tbody>';
                foreach($students as  $item){
                    
                    echo '<tr>';
                        if ($user == "Admin"){
                            echo '<td class = "admin-panel">';
                            echo '<button class = "button btn-info" type="button">EDIT</button>';
                            echo '<button class = "button btn-danger" type="button">DELETE</button>';
                            echo '</td>';
                        }
                        foreach($item as $value){
                            echo '<td>';
                            echo "$value";;

                            echo  '</td>';
                        }
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
