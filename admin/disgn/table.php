
<?php
//include("fun/connect.php");

?>


<table class="table">
    <thead>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>password</th>
        <th>  controls </th>
    </tr>
<?php
    $select_aa="SELECT * FROM admins ";
    $result_aa= $conn->query($select_aa);
    while($admi=$result_aa->fetch_assoc())
    {
?>




    </thead>
    <tbody>
    <tr>
        <td><?=$admi['id']?></td>
        <td><?=$admi['name']?></td>
        <td><?=$admi['password']?></td>
        
<td>

<a href ="?action=sol&&id=<?=$admi['id']?>" ><button class="btn  btn-warning">edit </button></a>
<a  href ="fun/deleteadmin.php?id=<?=$admi['id']?>"><button class="btn  btn-danger"> delete </button></a>
</td>


    </tr>
    <?php

}

?>
    </tbody>


</table>