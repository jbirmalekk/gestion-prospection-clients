<?php
mysql_connect("localhost","root","");
mysql_select_db("stage");
$req1="select * from list";
$res1=mysql_query($req1);
?>
<table bordr="1">
    <tr>
        <td>société</td>
        <td>Personne a contacter</td>
        <td>Nom et Prérnom</td>
        <td>Fonction</td>
        <td>Num</td>
</tr>
<?php
while($ta=mysql_fetch_array($res1)){?>
    <tr>
        <td><?php echo $ta['société']?></td>
        <td><?php echo $ta['personneacontacter']?></td>
        <td><?php echo $ta['nometprenom']?></td>
        <td><?php echo $ta['fonction']?></td>
        <td><?php echo $ta['num']?></td>
</tr>
<?php}?>
</table>