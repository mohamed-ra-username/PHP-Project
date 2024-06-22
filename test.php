<?php
//  include "database.php";
echo var_dump($_POST)


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
    <form action="test.php" method="post" class ="content-box">
        <input type="hidden" name="id" value="idk">
        <label for="title">Edit User</label>
        <br>

        <section class="content">
            <label for="name" >name:</label>
            <input
            required
            name="name" 
            type="text" 
            id="std_name" 
            placeholder="Amr Nader"
            >
        </section>
        <section class="content">
            
            <label for="email">email:</label>
            <input
            name="email"
            type="email"
            id="std_email"
            autocomplete="on"
            placeholder= "Example@mail.com"
            >
        </section>
        
        <section class = "content">

            <label for="gpa">gpa:</label>

            <input
            required
            name="gpa"
            type="number"
            id ="std_gpa"
            step=".1"
            min='0'
            max='4'
            placeholder="x"
            />
        </section>


        <span style = "align-self: center;">
            <button  type="submit">Submit</button>
        </span>

    </form>

</div>
<form action="test.php" method="post">

    <input type="hidden" name="id" value="69" />
    

    <br><br>


    <input type="submit" name ="user-submit" value="Submit">
</form> 
<?php
    create($_POST);
?>