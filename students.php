<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include "database.php" ?>
    <?php
        // foreach($students as $item)
        //             {
        //                 $name = ucfirst($item["name"]);
        //             } 
    ?>
    <a href="index.php">
        <button type="button">
            Back
        </button>
    </a>
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
            </tr>

            <tr>
                <td>blank</td>
                <td>blank</td>
                <td>blank</td>
            </tr>

            <tr>
                <td>blank</td>
                <td>blank</td>
                <td>blank</td>
            </tr>

            <tr>
                <td>blank</td>
                <td>blank</td>
                <td>blank</td>
            </tr>

            <tr>
                <td>blank</td>
                <td>blank</td>
                <td>blank</td>
            </tr>

            <tr>
                <td>blank</td>
                <td>blank</td>
                <td>blank</td>
            </tr>

            <tr>
                <td>blank</td>
                <td>blank</td>
                <td>blank</td>
            </tr>

            <tr>
                <td>blank</td>
                <td>blank</td>
                <td>blank</td>
            </tr>
        </tbody>
    </table>
</body>

</html>