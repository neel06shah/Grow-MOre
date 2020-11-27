<?php
    session_start();
    include('config\dbconn.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/css/style2.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <title>Admin Side</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    </head>
    <body style="background-color: #f9ea8f; background-image: linear-gradient(315deg, #f9ea8f 0%, #aff1da 74%);">
            <!-- <form action="/action_page.php"><br> -->
            <div class="main">
                <form id="prod_Add" action="" method="post">
                    <p class="sign" align="center">Add Product Details</p>
                    <input class="un " type="number" name="prod_ID" placeholder="Product ID" min="1" required>
                    <input class="un " type="text" name="prod_Name" placeholder="Product name" required>
                    <input class="un " type="number" name="prod_Qty" placeholder="Product quantity" min="1" >
                    <input class="un " type="number" name="prod_Price" placeholder="Product price (5,2)" min="50.00" max="10000.00" step="0.25"><br>
                    <input class="un " type="text" name="prod_Img" placeholder="Product image .jpg" >
                    <textarea class="un " name="prod_Desc" placeholder="Product description" rows="4" cols="50" ></textarea>
                    <div class="un ">
                    <p>Please select product category</p>
                        <input type="radio" id="seeds" name="category" value="seeds">
                        <label for="seeds">Seeds</label><br>
                        <input type="radio" id="fertilizer" name="category" value="fertilizer">
                        <label for="fertilizer">Fertilizer</label><br>
                        <input type="radio" id="pesticide" name="category" value="pesticide">
                        <label for="pesticide">Pesticide</label><br>
                        <input type="radio" id="potted_plants" name="category" value="potted_plants">
                        <label for="potted_plants">Potted plants</label><br>
                        <input type="radio" id="irrigation" name="category" value="irrigation">
                        <label for="irrigation">Irrigation</label>
                    </div>
                    <div align="center">
                        <input class="submit" type="submit"  name="submit" value="Add Product">
                    </div>    
                </form>
            </div>

                <?php
                    include('config\dbconn.php');
                    if(isset($_POST['submit'])) 
                    {   
                        $prod_ID = $_POST['prod_ID'];
                        $prod_Name = $_POST['prod_Name'];
                        $prod_Qty = $_POST['prod_Qty'];
                        $prod_Price = $_POST['prod_Price'];
                        $prod_Img = $_POST['prod_Img'];
                        $prod_Desc = $_POST['prod_Desc'];
                        $prod_Cat = $_POST['category'];
                       
                        if(empty($prod_ID) || empty($prod_Name) || empty($prod_Qty) || empty($prod_Price) || empty($prod_Img) || empty($prod_Desc) || empty($prod_Cat)) {
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

                            if(empty($prod_Cat)) {
                                echo "<font color='red'>Product category field is empty!</font><br/>";
                            }      
                        }
                        else {
                            $query = "INSERT INTO products (prod_name,prod_id,prod_amount,prod_description,prod_category,prod_quantity,prod_image) 
                                                    VALUES ('$prod_Name','$prod_ID','$prod_Price','$prod_Desc','$prod_Cat','$prod_Qty','$prod_Img')";
                            $result = mysqli_query($dbconn,$query);
                            if($result) {
                                echo "<script>swal({
                                    title: 'Success',
                                    text: 'Product added successfully',
                                    type: 'success'
                                  });</script>"; 
                            }
                            else {
                                echo "<script>swal({
                                    title: 'Error',
                                    text: 'Error occured. Please check internet connection',
                                    type: 'error'
                                  });</script>"; 
                            }
                        }
                    }
                ?> 
    </body>
</html>