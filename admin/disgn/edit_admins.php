<?php
$id=$_GET['id'];

$select_ad="SELECT * FROM admins WHERE id ='$id'";
$result_ad=$conn->query($select_ad);
$ro=$result_ad->fetch_assoc();


?>
<form action="fun/do_edit_admin.php?id=<?=$id?>" method="POST" enctype="multipart/form-data">


<div class="form-group">
  <label for="name" style="font-weight: bold;"> Name :</label>
   <input type="text" class="form-control" name="name" value="<?=$ro['name']?>">
</div>
<div class="form-group">
  <label for="price" style="font-weight: bold;">Phone:</label>
  <input type="unmber" class="form-control" name="number" value="<?=$ro['phone']?>">
</div>
<div class="form-group">
  <label for="count" style="font-weight: bold;">address:</label>
  <input type="unmber" class="form-control" name="address" value="<?=$ro['address']?>" >
</div>

<div class="form-group">
  <label for="categroy" style="font-weight: bold;">section:</label>
  <select name="section" id="" class="form-control" >

<?php

$select="SELECT * FROM  sections ";
$result_c=$conn->query($select);
while($ca=$result_c->fetch_assoc() )
{
?>

      <option value="<?=$ca['id']?>"<?php  
      if($ca['id']===$ro['sec'])
      {echo "selected";}
      
      
      
      ?>><?=$ca['name']?></option>
       <?php

}

?>

  </select>
</div>

<button type="submit" class="btn btn-success form-control">edit admin information</button>


</form>

</div>