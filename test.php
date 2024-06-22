<?php include "database.php";
// echo var_dump($_SERVER);
// echo '<br>';
// echo '<br>';
// echo var_dump($_SESSION);
// echo '<br>';
// echo '<br>';
// echo var_dump($_REQUEST);
// echo '<br>';
// echo '<br>';
?> 
<link rel="stylesheet" href="table.css">
<div class="pop-up">
    <div class ="content-box">
        <label for="title">Edit User:</label>
        <br>
        <div>
            <span >name:</span> <input type="text" name="" id="">

        </div>
        <div>
            <span >email:</span> <input type="text" name="" id="">
        </div>
        
        <div>
            <span >gpa:</span> <input type="text" name="" id="">
        </div>
        <div>
            <span >id:</span> <input type="text" name="" id="">

        </div>
        <div>

            <button  type="submit">Submit</button>
        </div>

    </div>

</div>
<form action="test.php" method="post">
    <input type="hidden" name="id" value="69" />

    <label for="name" >name:</label><br>
    <input
    required
    type="text" 
    id="std_name" 
    placeholder="Amr Nader"
    name="name" 
    ><br>

    <label for="email">email:</label><br>
    <input
    type="email"
    id="std_email"
    name="email"
    autocomplete="on"
    placeholder= "Example@mail.com"
    >
    <br><br>

    <label for="gpa">gpa:</label>
    <br>
    <input
    required
    id="gpa"
    name ="std_gpa"
    type="number"
    step=".1"
    min='0'
    max='4'
    placeholder="x"
    />

    <input type="submit" name ="user-submit" value="Submit">
</form> 
<?php
    create($_POST);
?>