<select name="genre">
<?php
$server = 'localhost';
$user   = 'root';
$pw     = '';
$db     = 'phpdebutant';
$mysqli = new mysqli($server, $user, $pw, $db);
if (!$mysqli->set_charset('utf8')) {
  printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", $mysqli->error);
  exit();
}
  printf("Jeu de caractères courant : %s\n", $mysqli->character_set_name());

if ($mysqli->connect_errno) {
  echo 'Echec lors de la connexion à MySQL : ('.$mysqli->connect_errno.') '.$mysqli->connect_error;
}
$sql = 'SELECT * from genres';
$req = $mysqli->query($sql);
$row = $req->fetch_assoc();
//var_dump($row);

//exit;
$nb = mysqli_num_rows($row);
if (!$nb[0]) {
  echo '<option>Aucun genre</option>';
} else {
  while ($list = mysqli_fetch_array($row)) {
    echo '<option value="'.$list['CodeGenre'].'">'.$list['LibelleGenre'].'<option>';
  }
}
?>
</select>