<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>sign up</title>
    </head>

    <body>
        <form action="" method="post">
            <div class="main">
                <em>
                    <h1>sign up form</h1>
                </em>
                <input type="text" name="name" placeholder="enter your name" required>

                <input type="contect" name="contect" placeholder="enter your contect number"
                    required>

                <input type="email" name="email" placeholder="enter your email id" required>

                <input type="password" name="pass" id="pass" placeholder="enter your password"
                    required>

                <input type="cpassword" name="pass" id="pass" placeholder="confirm password"
                    required>

                <button class="btn" name="submit" value="submit">submit</button>

                <a href="signin.php" class="signin">GO TO SIGN IN</a>
            </div>
           <?php
            include 'dbe-com.php';
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $contact = $_POST['contect'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpassword'];
        


               
            $insertquery = " insert into signup (name,contact,email,password)
             values('$name','$contact','$email','$password')";

           $res = mysqli_real_escape_string($con,$insertquery);

           $pass = password_hash($password, PASSWORD_BCRYPT);
           $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
           $token = bin2hex(random_bytes(15));
                            
                    $emailquery ="select * from signup where email= '$email'";
                    $query = mysqli_query($con,$emailquery);

                    $emailcount = mysqli_num_rows($query);
                    echo $emailcount;
                    if($emailcount>0){
                    ?> <script> alert("email is already exists"); </script> <?php
                    }else{
                    
                    if($password === $cpassword){
                    $insertquery = " insert into signup (name,contact,email,password) values('$name','$contact','$email','$pass')";

                    $iquery = mysqli_query($con,$insertquery);
                    if($iquery){
                        ?> <script> alert("data inserted"); </script> <?php
                    }else{
                        ?> <script> alert("data not inserted"); </script> <?php
                        }

                        ?> <script>  location.replace("signin.php") </script> <?php
                        }else{
                    ?> <script> alert("password are not matching");  </script>  <?php
                    }
                 } 
           }
                    ?>   
        </form>
    </body>
</html>