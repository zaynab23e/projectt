

<?php

if(isset($_SESSION['error'])){
  //echo  $_SESSION['error'][0];
  //echo  $_SESSION['error'][1];



}

?>


<form action="fun/do_add.php" method="POST" enctype="multipart/form-data">
    <?php
    if(isset($_SESSION['error']))

{ 
    ?>

<div class="alert  alert-danger"><?= $_SESSION['error']['name'] ?? '' ?></div>
<?php
}
?>
      <div class="form-group">
        <label for="name" style="font-weight: bold;">Product Name :</label>
         <input type="text" class="form-control" name="name"> 
        </div>
        
<?php
  if(isset($_SESSION['error'])){

    ?>

  

       <div class="alert  alert-danger"> <?=$_SESSION['error']['price'] ?? '' ?></div>

        <?php
}
?>

    <div class="form-group">
        <label for="price" style="font-weight: bold;">Price :</label>
        <input type="unmber" class="form-control" name="price">
    </div>
<?php

if(isset($_SESSION['error'])){

    ?>
    

    <div class="alert  alert-danger"> <?=$_SESSION['error']['count'] ?? '' ?></div>
    <?php
}
?>

    <div class="form-group">
        <label for="count" style="font-weight: bold;">count :</label>
        <input type="unmber" class="form-control" name="count">
    </div>

   
    <div class="form-group">
        <label for="image" style="font-weight: bold;">image :</label>
        <input type="file"   name="image[]" multiple="multiple">
    </div>
    <?=$_SESSION['error']['category'] ?? '' ?>
    
    <div class="form-group">
        <label for="categroy" style="font-weight: bold;">categroy :</label>
        <select name="categroy" id="" class="form-control" >

<?php
 
 $select_c="SELECT * FROM category";
  $result_c=$conn->query($select_c);
 while($ca=$result_c->fetch_assoc() )
{
?>

            <option value="<?=$ca['id']?>"><?=$ca['name']?></option>
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
 while ($bra=$result_b->fetch_assoc())
 {
?>


            <option value="<?=$bra['id']?>"> <?=$bra['name']?></option>

<?php

 }
?>

        </select>
    </div>

<?php

    if(isset($_SESSION['error'])){

?>


<div class="alert  alert-danger"> <?=$_SESSION['error']['description'] ?? '' ?></div>
<?php
}
?>
    
    <div class="form-group">
        <label for="des" style="font-weight: bold;">description :</label>
        <textarea name="des" style="height: 100px;" class="form-control"></textarea>
    
    </div>
    
    <button type="submit" class="btn btn-success form-control" name="up">Add Product</button>

    
    </form>

</div>

<?php unset($_SESSION['error']) ?>