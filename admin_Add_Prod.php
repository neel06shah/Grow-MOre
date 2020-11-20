<?php
// if(isset($_COOKIE['username'])):{
// 	$name=$_COOKIE['username'];
//     include('config\dbconn.php');
// 	$data=($dbconn)?(mysqli_query($dbconn,"Select firstname from users where email='$name'")):"";
//     $data1=($dbconn)?(mysqli_query($dbconn,"Select lastname from users where email='$name'")):"";
//     $firstname=mysqli_fetch_assoc($data)['firstname'];
//     $lastname=mysqli_fetch_assoc($data1)['lastname'];
// }
// else:{
// 	echo "<script>location.href='user_signup.php'</script>";
// }
// endif
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Grow More - E-commerce website for plants and related materials</title>
    </head>
    <body>
        <main>
            <!-- <form action="/action_page.php"><br> -->
            <form id="prod_Add" method="POST"><br>
                <input type="number" id="prod_ID" placeholder="Product ID" min="1" required><br><br>
                <input type="text" id="prod_Name" placeholder="Product name" ><br><br>
                <input type="number" id="prod_Qty" placeholder="Product quantity" min="1" ><br><br>
                <input type="number" id="prod_Price" placeholder="Product price (5,2)" min="50.00" max="10000.00" step="0.25"><br><br>
                <input type="text" id="prod_Img" placeholder="Product image .jpg" ><br><br>
                <textarea id="prod_Desc" placeholder="Product description" rows="4" cols="50" ></textarea><br><br>
                <input type="submit" name="submit" value="Add Product">

                <?php
                    include('config\dbconn.php');
                    if(isset($_POST['submit'])) {   
                        $prod_ID = $_POST['prod_ID'];
                        $prod_Name = $_POST['prod_Name'];
                        $prod_Qty = $_POST['prod_Qty'];
                        $prod_Price = $_POST['prod_Price'];
                        $prod_Img = $_POST['prod_Img'];
                        $prod_Desc = $_POST['prod_Desc']
                        if(empty($prod_ID) || empty($prod_Name) || empty($prod_Qty) || empty($prod_Price) || empty($prod_Img) || empty($prod_Desc)) {
                            if(empty($prod_ID)) {
                                echo "<font color='red'>Product ID field is empty!</font><br/>";
                            }
            
                            if(empty($prod_Name)) {
                                echo "<font color='red'>Product name field is empty!</font><br/>";
                            }
            
                            if(empty($prod_Qty)) {
                                echo "<font color='red'>Product quantity field is empty!</font><br/>";
                            }
            
                            if(empty($prod_Price)) {
                                echo "<font color='red'>Product price field is empty!</font><br/>";
                            }
            
                            if(empty($prod_Img)) {
                                echo "<font color='red'>Product image field is empty!</font><br/>";
                            }
            
                            if(empty($prod_Desc)) {
                                echo "<font color='red'>Product description field is empty!</font><br/>";
                            }   
                        }
                        else {
                            $query = "INSERT INTO products (prod_ID, prod_Name, prod_Qty, prod_Price, prod_Img, prod_Desc) 
                                        VALUES ('$prod_ID','$prod_Name','$prod_Qty','$prod_Price','$prod_Img','$prod_Desc')";
                            $result = mysqli_query($dbconn,$query);
                        }
                    }
                ?>
              </form> 
        </main>
    </body>
</html>