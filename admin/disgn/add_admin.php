
<form action="fun/do_add_admin.php" method="POST" enctype="multipart/form-data">


<div class="form-group">
  <label for="name" style="font-weight: bold;"> Name :</label>
   <input type="text" class="form-control" name="name">
</div>
<div class="form-group">
  <label for="price" style="font-weight: bold;">Phone:</label>
  <input type="unmber" class="form-control" name="number">
</div>
<div class="form-group">
  <label for="count" style="font-weight: bold;">address:</label>
  <input type="unmber" class="form-control" name="address">
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

      <option value="<?=$ca['id']?>"><?=$ca['name']?></option>
       <?php

}

?>

  </select>
</div>

<button type="submit" class="btn btn-success form-control">Add admin</button>


</form>

</div>