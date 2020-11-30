<?php
    if(isset($_COOKIE['username'])){
        echo"<script>location.href='home.php'</script>";        
    }
?>

<html>

<head>
    <link rel="stylesheet" href="assets/css/style2.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Register</title>
</head>

<body>
    <div class="main" style="padding-top: 20px;">
        <p class="sign" align="center">Welcome to <span style="color: #518432;">GrowMore</span></p>
        <p class="sign" align="center" style="padding-top: 10px;">Get Started</p>
        <form class="form1" action="" method="post">
            <div>
                <input class="un1 " type="text" align="center" placeholder="First name" style="width: 37%;" name="firstname">
                <input class="un1 " type="text" align="center" placeholder="Last name" style="width: 37%; margin-left: 5px;" name="lastname">
            </div>
            <input class="un " type="text" align="center" placeholder="Contact number" name="contact">
            <input class="un " type="text" align="center" placeholder="Address" name="address">
            <input class="un " type="text" align="center" placeholder="Email ID" name="email">
            <input class="pass" type="password" align="center" placeholder="Password" name="password">
            <input class="pass" type="password" align="center" placeholder="Re-enter password" name="repassword">
            <div align="center">
                <input type="submit" class="submit" name="submit" value="Sign up">
            </div>

    <?php
        // including the database connection file
        include('config\dbconn.php');
        if(isset($_POST['submit']))
        {   
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $address=$_POST['address'];
            $email=$_POST['email'];
            $contact=$_POST['contact'];
            $password=$_POST['password'];
            $repassword=$_POST['repassword'];

            $pass1=password_hash($password,PASSWORD_DEFAULT);

            if(empty($firstname) || empty($lastname) || empty($address) || empty($email) || empty($contact) || empty($password) || empty($repassword)) 
            {        
                if(empty($firstname)) {
                    echo "<font color='red'>Firstname field is empty!</font><br/>";
                }

                if(empty($lastname)) {
                    echo "<font color='red'>Lastname field is empty!</font><br/>";
                }

                if(empty($address)) {
                    echo "<font color='red'>Address field is empty!</font><br/>";
                }

                if(empty($email)) {
                    echo "<font color='red'>Email field is empty!</font><br/>";
                }

                if(empty($contact)) {
                    echo "<font color='red'>Contact field is empty!</font><br/>";
                }

                if(empty($password)) {
                    echo "<font color='red'>Password field is empty!</font><br/>";
                }    
            } else {    
                //updating the table
                if($password == $repassword) {
                    $query = "INSERT INTO users (firstname, lastname, address, email, contact, password) 
                            VALUES ('$firstname','$lastname','$address','$email','$contact','$pass1')";
                    $result = mysqli_query($dbconn,$query);
                    
                    if($result){
                        //redirecting to the display page. In our case, it is index.php
                        setcookie('username',$email,time()+60*60*24*30);
                        echo"<script>location.href='home.php'</script>";
                    }
                }
                else {
                    echo "<font color='red'>Password doesn't match</font><br/>";
                }
            }
        }
    ?>


    </div>

</body>

</html>