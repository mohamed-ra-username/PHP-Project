<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <nav class="nav">
            <span>Dashboard</span>
            <div class="sidebar">
                <a href="courses.php" class="sideitem"> <i class="fa fa-graduation-cap"></i>Courses</a>
                <a href="students.php" class="sideitem"> <i class="fa fa-address-card"></i>Students</a>
            </div>
        </nav>
        
        <div class="content">
            <header class="Header">
                <span><i class="fa fa-home"></i>Home</span>
                <div class="Search">
                    <i class="fa fa-search"></i>
                    <input type="search" placeholder="Search">
                </div>
            </header>
            <div class="cont">
                <h1>Welcome Back, 
                <?php
                    $user = "Admine";
                    if ($user == "Admine")
                    {
                        echo "Admin";
                    }else
                    {
                        echo "User";
                    }
                ?> 
                </h1>
                <div class="main_cont">
                    <div class="livecont">
                        <?php
                            require "database.php";
                            mysqli_num_rows($all_students);
                        ?>
                    </div>
                    <div class="livecont">
                    hi
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
