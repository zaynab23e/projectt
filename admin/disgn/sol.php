
<?php

$id=$_GET['id'];
$select="SELECT * FROM admins";
$result=$conn->query($select);
$ro=$result->fetch_assoc();


?>
<form action="">


    <div class="form-group">
        <label for="name" style="font-weight: bold;"> id :</label>
        <input type="text" class="form-control" name="" value=<?=$ro['id']?>>
    </div>


    
    <div class="form-group">
        <label for="count" style="font-weight: bold;">name:</label>
        <input type="unmber" class="form-control" name="name" value="<?=$ro['name']?>">
    </div>
    
    
    <div class="form-group">
        <label for="count" style="font-weight: bold;">email:</label>
        <input type="unmber" class="form-control" name="password" value="<?=$ro['password']?>">
    </div>
    
    


    
    </div>
    <button type="submit" class="btn btn-success form-control">Add Product</button>
    
    
    </form>