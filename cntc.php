<?php
    require_once "conf.php";
    $name = $_POST['name'];
    $email_id = $_POST['email_id'];
    $phone_no = $_POST['phone_no'];
    $services = $_POST['services'];
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sql = "INSERT INTO contact_dets VALUES('$name', '$email_id','$phone_no','$services')";
    }
    // echo "inserted Successfully";
    if(mysqli_query($con, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($con);
    }
     
    // Close connection
    mysqli_close($con);

?>