<table class="table">
    <thead>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>phone</th>
        <th>address</th>
        <th>section</th>
        <th>control</th>

    </tr>
    </thead>
<?php
$select_a="SELECT *FROM admins";
$result_a=$conn->query($select_a);
while($adm=$result_a->fetch_assoc()){
    ?>

    <tbody>
    <tr>
        <td><?=$adm['id']?></td>
        <td><?=$adm['name']?></td>
        <td><?=$adm['phone']?></td>
        <td><?=$adm['address']?></td>

        <td><?php
        $ad=$adm['sec'];
        $select_a="SELECT * FROM sections WHERE id='$ad'";
        $res=$conn->query($select_a);
        $ro=$res->fetch_assoc();
        echo $ro['name'];
        ?></td>

        <td>
<a href="?action=edit&&id=<?=$adm['id']?>"> <button class="btn  btn-info">edit</button></a>

<a href="fun/de_admin.php?id=<?=$adm['id']?>"> <button class="btn  btn-danger">delete</button></a>

        </td>
    </tr>

    <?php
}

    ?>

    </tbody>
</table>
<a href="?action=add">
<button class="btn btn-success">add admin</button>
</a>