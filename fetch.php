<?php
 $con = mysqli_connect('localhost', 'root', '', 'form');

             $result = "select * from note";
             $fquary = mysqli_query($con,$result);
         
        while($result = mysqli_fetch_array($fquary)){
            ?>
<div>
    <?php echo $result['name']; ?></br><?php echo $result['text']; ?>
</div>
<?php
        }
?>



<!-- ------------------------------for file/images---------------------------------- -->

<?php
  include("dbe-com.php");
  $selectquery = "select * from data order by id desc";
  $query = mysqli_query($con,$selectquery);
  //$res = mysqli_fetch_array($query);
   
  while($res= mysqli_fetch_array($query)){
      $fullname = $res['p_name'];
      $pics = $res['image'];
      $propertytype = $res['text'];
      
      ?>


<div class="col-3 card mr-3 mb-4">
    <div>
        <div><img class="pic1" src="upload/<?php echo $pics;?>"></div>
        <br>
        <p class="bg-light p-2 m-0"> <?php echo "<b>PROPERTY TYPE:</b> ". $fullname;?></p>
        <br>
        <?php } ?>