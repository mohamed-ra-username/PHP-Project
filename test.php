<?php
//  include "database.php";
echo var_dump($_POST)


?> 

<link rel="stylesheet" href="table.css">

<div class="pop-up">
    <form action="test.php" method="post" class ="content-box">
        <input type="hidden" name="id" value="$var">
        <input type="hidden" name="action" value="$action">
        <h3 class = "text" for="form">$action User</h3>
        <br>

        <section class="content">
            <label class="text" for="Name" >Name:</label>

            <input
            required
            name="Name" 
            type="text" 
            id="Name" 
            autocomplete="given-name"
            placeholder="John Doe"
            >
        </section>

        <section class="content">
            <label class="text" for="Email">Email :</label>

            <input
            name="Email"
            type="email"
            id="Email"
            autocomplete="on"
            placeholder= "Example@mail.com"
            >
        </section>
        
        <section class = "content">
            <label class="text" for="GPA">GPA :</label>

            <input
            required
            name="GPA"
            type="number"
            id ="GPA"
            step=".1"
            min='0'
            max='4'
            placeholder="0-4"
            />
        </section>


        <span style = "align-self: center;">
            <button  type="submit">Submit</button>
        </span>

    </form>

</div>
<?php
    create($_POST);
    for ($i=0; $i <50 ; $i++) { 
        echo$i;
        echo'<br>';
    }
?>