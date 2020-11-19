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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    <title>Sign in</title>
</head>

<body>
    <div class="main">
        <p class="sign" align="center">Welcome to <span style="color: #518432;">GrowMore</span></p>
        <p class="sign" align="center" style="padding-top: 10px;">Sign in</p>
        <form class="form1" action="" method="post">
            <input class="un " type="text" align="center" placeholder="Email ID" name="email">
            <input class="pass" type="password" align="center" placeholder="Password" name="pass">
            <div align="center">
                <input type="submit" class="submit" align="center" name="submit" value = "Sign In">
                <a class="submit" href="register.php" align="center">Register</a>
            </div>
            <p class="forgot" align="center"><a href="#">Forgot Password?</p>
                
                
            <?php
                if(isset($_POST['submit'])){
                    $name=$_POST['email'];
                    $password=$_POST['pass'];
                    include('config\dbconn.php');
                    if($dbconn){
                       $query= mysqli_query($dbconn,"SELECT password FROM users WHERE email='$name'");
                            if(mysqli_num_rows($query)>0){
                            $row=mysqli_fetch_array($query);
                              if(password_verify($password,$row[0])){
                                setcookie('username',$name,time()+60*60*24*30);
                                echo"<script>location.href='home.php'</script>";
                              }
                              else{
                                echo "<script>swal({
                                    title: 'Error',
                                    text: 'incorrect password',
                                    type: 'error'
                                  });</script>"; 
                                
                             }
                            } else{
                                echo "<script>swal({
                                    title: 'Error',
                                    text: 'email Does not exist',
                                    type: 'error'
                                  });</script>"; 
                                
                            }
                    }
                    else{
                        echo "connection unsucessful";
                    }
                    
                    }
                // include('config\dbconn.php');
                // if(isset($_POST['submit']))
                // {
      
                //     $email=$_POST['email'];
                //     $passw=$_POST['pass'];
            
                //     $user = mysqli_real_escape_string($dbconn,$email);
                //     $pass1 = mysqli_real_escape_string($dbconn,$passw);
            
                //     $pass=md5($pass1);
                //     $salt="a1Bz20ydqelm8m1wql";
                //     $pass=$salt.$pass;
            
            
                //     date_default_timezone_set('Asia/Manila');
                //     $date = date("Y-m-d H:i:s");            
            
            
                //     // $query=mysqli_query($dbconn,"SELECT * FROM `users` WHERE username='$user'");

                //     $query= mysqli_query($dbconn,"SELECT password FROM users WHERE email='$user'");

                //     echo $query;
                //     $res=mysqli_fetch_array($query);
                //     echo $res;
            
                //     $id=$res['user_id'];
            
                //     if (mysqli_num_rows($query) < 1){
                //         echo "<font color='red'>Incorrect Password. Please try again</font><br/>";
                //     }
            
                //     else{
                //         $res=mysqli_fetch_array($query);
                //         $_SESSION['id']=$res['user_id'];
                //         header('Location: user_index.php');
                        
                //         $_SESSION['id']=$id;
                //         $remarks="has logged in the system at ";  
                //         mysqli_query($dbconn,"INSERT INTO logs(user_id,action,date) VALUES('$id','$remarks','$date')")or die(mysqli_error($dbconn));
                //     }
                //  }
            ?>
            
                
    </div>
     
</body>

</html>