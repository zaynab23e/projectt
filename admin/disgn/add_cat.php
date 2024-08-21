
<form action="fun/do_add_cat.php" method="POST" enctype="multipart/form-data">


<div class="form-group">
  <label for="name" style="font-weight: bold;">category Name :</label>
   <input type="text" class="form-control" name="name">
</div>








</select>
    

 
        <div class="form-group">
        <label for="categroy" style="font-weight: bold;">available items :</label>
        <select name="categroy" id="" class="form-control" >
            <?php
            $select="SELECT * FROM category";
            $result=$conn->query($select);
            while($ow=$result->fetch_assoc()){
                ?>

        

            <option value="<?=$ow['id']?>"><?=$ow['name']?> </option>
            <?php
            }
            ?>

        </select>


        <button type="submit" class="btn btn-success form-control">Add category</button>

</form>

</div>