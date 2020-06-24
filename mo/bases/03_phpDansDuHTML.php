<html>
<body>
<font size="2" face="Arial">Le texte en HTML</font>
<!-- 2do Mo Ex perso (Choisir autre style + autre option de format de date) -->

<?php
// le code PHP -----
$heure = date("h:i");
print("<font size=\"2\" face=\"Arial\"> et celui en PHP.</font>");
?>
<!-- Retour au code HTML   -->
<br><font size="2" face="Arial">Il est <?php echo $heure ;?>

</font>
</body>
</html>