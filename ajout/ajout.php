<?php
$societe=$_POST['Entreprise'];
$personneacontacter=$_POST['Peronne a contatcer'];
$nometprenom=$_POST['Nom et Prenom'];
$fonction=$_POST['Fonction'];
$rdv=$a.'-'.$m.'-'.$j;
mysql_connect("localhost","root","");
mysql_select_db("stage");
$req="insert into contact values ('$societe','$personneacontacter','$nometprenom',,'$fonction','$rdv')";
mysql_query($req);
echo"ajouter effactuee avec succes";
mysql_close();
header('location:ajout.html');
?>