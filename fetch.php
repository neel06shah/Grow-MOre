<?php
//fetch.php

include('config\dbconn.php');

$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($dbconn, $_POST["query"]);
 $query = "SELECT * FROM products WHERE prod_name LIKE '%".$search."%'";
}
else
{
 $query = "SELECT * FROM products";
}
$result = mysqli_query($dbconn, $query);
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
    <a href="productdecs.php?prod_id='.$row['prod_id'].'">
    <div class="card-column">
        <div class="cardCtg">
            <img src="assets\img\products';

  $output .= '&#92;' . $row['prod_image'];  

  $output .= '" class="img-responsive card-image" width="200" height="200">
            <h4  style="margin-top: 30px;">'.
                $row['prod_name'].'
            </h4>
            <p>MRP: &#8377;'.
                $row['prod_amount'].' <br>
                Packing:'.' '.
                $row['prod_quantity'].' gms.
                </h4>
                <!-- <p>Some text</p> -->
        </div>
    </div>
    </a>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>