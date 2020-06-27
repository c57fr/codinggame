<html>
<body>
<font size="2" face="Arial">Le texte en HTML</font>
<font size="5" face="Verdana"> <?php echo date('d-m-Y'); ?>  </font>

<?php
// le code PHP -----
$heure = date('h:i');
echo '<font size="2" face="Arial"> et celui en PHP.</font>';
?>
<!-- Retour au code HTML   -->
<br><font size="2" face="Arial">Il est <?php echo $heure; ?>

</font>
</body>
</html>