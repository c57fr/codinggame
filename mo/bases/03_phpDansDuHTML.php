<html>
<body>
<font size="2" face="Arial">Le texte en HTML</font>

<?php
// le code PHP -----
$heure = date("h:i");
print("<font size=\"2\" face=\"Arial\"> et celui en PHP.</font>");
?>
<!-- retour qu code HTML   -->
<br><font size="2" face="Arial">Il est <?php echo $heure ;?>

</font>
</body>
</html>