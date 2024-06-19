
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<a href="index.php">
        <button type="button">
            Back
        </button>
    </a>
    <br>
    <?php
        require "database.php";
        foreach($courses as $item)
        {
            $name = ucfirst($item);
            echo '<br>';
            $display_tag = "Course: $name";
            echo '<div class="Course" >'. $display_tag .'</div>';
        }

    ?>
</body>
</html>
