<form action="" method="post">

<input type="text" name="name" id="name" placeholder="enter your name"><br><br>
<textarea name="text" id="text" cols="30" rows="10" placeholder="enter your details"></textarea>
<button type="submit" name="submit">submit</button>

</form>
<?php

$con = mysqli_connect('localhost','root','','form');

if(isset($_POST['submit'])){
$name = $_POST['name'];
$text = $_POST['text'];


        $iquary = "INSERT INTO `note`(`name`, `text`) VALUES ('$name','$text')";

        $insert = mysqli_query($con, $iquary);

    }
?>


<!-- ----------------------------------for file/image---------------------------------------- -->
<form method="POST" action="upload.php" enctype="multipart/form-data">

        <div class="umain">
        <em><h1>add product</h1></em>

        <input type="text" name="name" id="name" placeholder="enter product name">
        <input type="file" name="image" id="image">
        <textarea name="text" id="text" cols="30" rows="10" placeholder="enter detailes of product"></textarea>
        <button class="btn" name="submit" value="submit">submit</button>
        </div>
</form>
      <?php
           $con = mysqli_connect('localhost','root','','e-comm');
            if(isset($_POST['submit'])){

            $info1 = $_POST['name'];
            $info2 = $_FILES['image'];
            $info3 = $_POST['text'];

            $filename = $info2['name'];
            $filepath = $info2['tmp_name']; 

            move_uploaded_file($filepath ,"upload/" .$filename);

            $insertquery = "INSERT INTO `data`(`p_name`, `image`, `text`) VALUES ('".$info1."','".$filename."','".$info3."')";

            $res = mysqli_query($con,$insertquery);

            if($res){ ?> <script> alert("data inserted") </script> <?php

            }else{ ?> <script> alert("data not inserted") </script> <?php }
 }  ?>


