<select name="genre">
<?php
mysql_connect($server,$user,$pass) OR die('Erreur de connexion');
mysql_select_db($db) OR die('Base inexistante');
$sql = 'SELECT * from genres;';
$query = mysql_query($sql) OR die('Erreur');
$nb = mysql_num_rows($query);
if(!$nb[0])
{
    echo '<option>Aucun genre</option>';
}else{
    while($list = mysql_fetch_array($query))
    {
        echo '<option value="'.$list['CodeGenre'].'">'.$list['LibelleGenre'].'<option>';
    }
}
mysql_close();
?> 