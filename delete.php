<form action="" method="GET">
<?php
$con = mysqli_connect('localhost', 'root', '', 'form');

             $result = "select * from note";
             $fquary = mysqli_query($con,$result);
         
        while($result = mysqli_fetch_array($fquary)){
            ?>          
                   <div class="fname">
                        <?php echo $result['sno']; ?>
                        <?php echo $result['name']; ?>
                      <a href="04.php?id=<?php echo $result['sno']; ?>" >delete</a>                   
                    </br><?php echo $result['text']; ?></br></br>
                   </div>
           <?php
        }

       if(isset($_GET['id'])){
            $id = $_GET['id'];
           
        echo $id;

            $dquary = "DELETE FROM `note` WHERE sno='$id'";
            $delete = mysqli_query($con, $dquary);
           
       } 
?></form>