<table class="table">
    <thead>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>control</th>
    </tr>
    </thead>

<?php

$select_cat="SELECT * FROM category";
$result_cat=$conn->query($select_cat);
while($cat=$result_cat->fetch_assoc()){
    ?>



    <tbody>
    <tr>
        <td><?=$cat['id']?></td>
        <td><?=$cat['name']?></td>
        <td>
<a href="?action=edit&&id=<?=$cat['id']?>"> <button class="btn  btn-warning">edit</button></a>

<a href="fun/del.php?id=<?=$cat['id']?>"> <button class="btn  btn-danger">delete</button></a>

        </td>
    </tr>
    <?php
}


?>

    

    </tbody>
</table>
<a href="?action=add"> <button class="btn  btn-info">add category</button></a>