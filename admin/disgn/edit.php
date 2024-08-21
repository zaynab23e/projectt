



<?php


include("fun/connect.php");

$id=$_GET['id'];
$select=" SELECT * FROM product WHERE id='$id'";
$result=$conn->query($select);
$row=$result->fetch_assoc();

?>

<form action="fun/do_edit.php?id=<?=$id?>" method="POST" enctype="multipart/form-data">


      <div class="form-group">
        <label for="name" style="font-weight: bold;">Product Name :</label>
         <input type="text" class="form-control" name="name" value="<?=$row['name']?>">
    </div>
    <div class="form-group">
        <label for="price" style="font-weight: bold;">Price :</label>
        <input type="unmber" class="form-control" name="price" value="<?=$row['price']?>">
    </div>
    <div class="form-group">
        <label for="count" style="font-weight: bold;">count :</label>
        <input type="unmber" class="form-control" name="count" value="<?=$row['count']?>">
    </div>
    <div class="form-group">
        <label for="image" style="font-weight: bold;">image :</label>
        <input type="file"  name="image">
        <img src="imgs/<?=$row['img']?>" style="width:100px; height:150px;">
    </div>
    <div class="form-group">
        <label for="categroy" style="font-weight: bold;">categroy :</label>
        <select name="categroy" id="" class="form-control" >

<?php
 
 $select_c="SELECT * FROM  category";
  $result_c=$conn->query($select_c);
 while(   $ca=$result_c->fetch_assoc() )
{
?>



            <option value="<?=$ca['id']?>"
            <?php
            if($ca['id']===$row['cat'])
            {
              echo"selected";

            }
            
            
           ?> > <?=$ca['name']?></option>
<?php

}

?>

        </select>
    </div>
    <div class="form-group">
        <label for="brand" style="font-weight: bold;">brand :</label>
        <select name="brand" id="" class="form-control" >
<?php
 $select_b="SELECT * FROM  brand ";
 $result_b=$conn->query($select_b);
 while (  $bra=$result_b->fetch_assoc())
 {
?>


            <option value="<?=$bra['id']?>"
            <?php
            if($bra['id']===$row['brand'])
            {
              echo"selected";

            }
            
            
            ?>> <?=$bra['name']?></option>

<?php

 }

?>

        </select>
    </div>
    <div class="form-group">
        <label for="des" style="font-weight: bold;">description :</label>
        <textarea name="des" style="height: 100px;" class="form-control"><?=$row['des']?></textarea>
    
    </div>
    <button type="submit" class="btn btn-success form-control">update Product</button>
    
    
    </form>

</div>