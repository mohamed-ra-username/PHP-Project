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

<!-- 
    <table class="data">
        <thead>
            <tr>
                <th>student name</th>
                <th>student GPA</th>
                <th>student email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mohammed Elsaeed</td>
                <td>3.5</td>
                <td>gibberesh@gmail.com</td>
            </tr>

            <tr>
                <td>mohammed ragan</td>
                <td>1.0</td>
                <td>shinycapybara@gmail.com</td>
            </tr>

            <tr>
                <td>amr nader</td>
                <td>2.0</td>
                <td>lolatnight@gmail.com</td>
            </tr>

            <tr>
                <td>mahmoud abdelgawad</td>
                <td>0.5</td>
                <td>theabsentee@gmail.com</td>
            </tr> -->
</body>

</html>