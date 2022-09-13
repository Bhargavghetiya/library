<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>sign in</title>
    </head>

    <body>
        <form action="" method="post">
            <div class="main">
                <em>
                    <h1>sign in form</h1>
                </em>
                <input type="email" name="email" placeholder="enter your username" required>

                <input type="password" name="pass" id="pass" placeholder="enter your password"
                    required>

                <button class="btn" name="submit" value="submit">submit</button>

                <a href="signup.php" class="signin">GO TO SIGN UP</a>
            </div>
            <?php

                    include 'dbe-com.php';
                    if(isset($_POST['submit'])){
                        $email = $_POST['email'];
                        $pword = $_POST['pass'];

                    $email_search ="select * from  signup where email= '$email'";
                    $query = mysqli_query($con,$email_search);
                    $email_count = mysqli_num_rows($query);
                    echo $email_count;

                    if($email_count){
                    $email_pass = mysqli_fetch_assoc($query);

                    $db_pass = $email_pass['password'];

                    $email = $email_pass['email'];

                    $pass_decode = password_verify($pword, $db_pass);


                    if($pass_decode){
                        ?> <script>  location.replace("bhargav.php") </script> <?php

                    }else{
                        ?> <script>  alert("password incorrect"); </script> <?php

                    }   

                    }else{
                        ?> <script>  alert("invalid email"); </script> <?php
                   
                    }
            }

                    ?>
        </form>
    </body>

</html>