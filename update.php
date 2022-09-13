
<!DOCTYPE html>
<html lang="en">

<head>
    <title>note</title>
    <style>
        * {
            margin: auto;
            padding: auto;
        }

        h1 {
            display: flex;
            justify-items: center;
            align-items: center;
            flex-direction: column;
            font-size: 35px;
            color: blueviolet;

        }

        .h1 {
            margin-top: 110px;
        }

        .write {

            box-sizing: border-box;
            display: flex;
            justify-items: center;
            align-items: center;
            flex-direction: column;
            font-size: 30px;
            margin-top: 20px;
            width: 65%;
            height: 450px;

        }

        input {

            box-sizing: border-box;
            display: flex;
            justify-items: center;
            align-items: center;
            flex-direction: column;
            font-size: 15px;
            margin-top: 20px;
            width: 65%;
            height: 40px;

        }

        img {
            margin: 0px;
            position: absolute;
            height: 730px;
            z-index: -1;
            opacity: 80%;
            width: 100%;
        }

        .btn {

            box-sizing: border-box;
            display: flex;
            justify-items: center;
            align-items: center;
            flex-direction: column;
            margin-top: 20px;
            background-color: blueviolet;
            padding: 5px;
            color: aliceblue;
            border: 1.5px solid lightcyan;
            cursor: pointer;
        }

        .fname {

            align-items: left;
            float: left;
            border: 1px solid black;
            width: 30%;
            margin: 1%;
            height: 300px;
            font-size: 20px;
        }
    </style>

</head>
<!-- update file -->
<body>
    <form action="" method="get">
      
    <?php

  $con=mysqli_connect('localhost','root','','form');
 
        $id = $_GET['id'];

  $result = "SELECT * FROM note where sno=$id";
  $fquary = mysqli_query($con, $result);
  $fresult = mysqli_fetch_array($fquary);

 
 ?> 
    <img src="../30.jpg" alt="">
    <h1>write here when you want to write you amazing notes and more ...</h1>

        <input type="text" name="name" value="<?php echo $fresult['name']; ?>" placeholder="enter your name" required>
        <textarea class="write"  cols="100" rows="30"  name="text" placeholder="write here..." required><?php echo $fresult['text']; ?></textarea>
        <button class="btn" type="submit"  name="update"></a>update note</button>

        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        
   <?php


   if (isset($_GET['update'])) {
    
    $name = $_GET['name'];
    $text = $_GET['text'];
    // $uquary = "UPDATE `note` SET `name`='$name',`text`='$text' where `sno`=`$id`";

   $uquary = 'UPDATE note SET name="'.$name.'",text="'.$text.'" where sno="'.$id.'"';



    $iquary = mysqli_query($con, $uquary);
  
    if($uquary){
        ?> <a href="../main.php" class="btn">going to home page</a><?php
       
      
    }
}
        
        ?>

    </form>
</body>

</html>