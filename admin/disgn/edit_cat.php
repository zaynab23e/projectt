<?php

include("fun/connect.php");

$id=$_GET['id'];
$select_ca=" SELECT * FROM category WHERE id='$id'";
$result_ca=$conn->query($select_ca);
$row=$result_ca->fetch_assoc();

?>

<form action="fun/do_edit_cat.php?id=<?=$id?>" method="POST" enctype="multipart/form-data">


    <div class="form-group">
        <label for="name" style="font-weight: bold;">category Name :</label>
    <input type="text" class="form-control" name="name" value="<?=$row['name']?>">
    </div>



    <button type="submit" class="btn btn-success form-control">update category</button>


<!--
    <div class="form-group">
        <label for="price" style="font-weight: bold;">id category:</label>
        <input type="unmber" class="form-control" name="id" value="<">
    </div> -->
    
   

       <!-- </select>-->
    

 
      <!--  <div class="form-group">
        <label for="categroy" style="font-weight: bold;">available items :</label>
        <select name="categroy" id="" class="form-control" >
            <?php
          //  $select="SELECT * FROM category";
            //$result=$conn->query($select);
            //while($ow=$result->fetch_assoc()){
                ?>

        

            <option value="  <$ow['id']?>"<?php
            //if($ow['id']===$row['id'])
           // {echo "selected";}
            
            ?>> <?//$ow['name']?> </option>
            <?php
            //}
            ?>

        </select>-->
    </div>
    
   
    
    
    </form>

</div>