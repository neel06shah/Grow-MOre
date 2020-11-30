<?php
if(isset($_COOKIE['username'])):{
	$name=$_COOKIE['username'];
    include('config\dbconn.php');
	$data=($dbconn)?(mysqli_query($dbconn,"Select firstname from users where email='$name'")):"";
    $data1=($dbconn)?(mysqli_query($dbconn,"Select lastname from users where email='$name'")):"";
    $firstname=mysqli_fetch_assoc($data)['firstname'];
    $lastname=mysqli_fetch_assoc($data1)['lastname'];
}
else:{
	echo "<script>location.href='user_signup.php'</script>";
}
endif
?>

<?php
$order_id=$_GET['order_id'];

$query = "DELETE FROM `$name` WHERE `$name`.`prod_id` = $order_id";
                                                    $result = mysqli_query($dbconn,$query);
                                                    if($result) {
                                                       
header("Location:" . "mycart.php"); 
                                                    }

?>

