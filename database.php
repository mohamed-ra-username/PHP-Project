$user = 'Admin';
    
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "test";
    
    $conn= mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    $all_students = mysqli_query($conn, "SELECT * FROM students;");
    $all_courses = mysqli_query($conn, "SELECT * FROM courses;");

    function create($id,$data){
        $sql = "INSERT INTO `students`(`id`, `name`, `gpa`, `email`, `owned_courses`) VALUES ('$id','$name','$gpa','$email','$owned_courses')";
    }
    function update($id){
        $sql = "UPDATE `students` SET `id`='[value-1]',`name`='[value-2]',`gpa`='[value-3]',`email`='[value-4]',`owned_courses`='[value-5]' WHERE 1";
    }
    function delete($id){
        $sql = "DELETE FROM `students` WHERE $id";
    }