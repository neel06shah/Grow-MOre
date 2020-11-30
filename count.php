<?php
if(isset($_POST['qty']))
{
    include('config\dbconn.php');
    $qty = $_POST['qty'];
    $pid = $_POST['pid'];
    $name = $_POST['email'];

    $query = "UPDATE `$name` SET `prod_count` = '$qty' WHERE `neel06shah@gmail.com`.`prod_id` = $pid";
    $result = mysqli_query($dbconn,$query);
    if($result) {
        echo "Successful";
    }
    else {
        echo "Error";
    }
}

?>