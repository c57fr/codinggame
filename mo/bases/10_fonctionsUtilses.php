<?php


echo $res = addslashes("L'a");
echo '<br>';
//stripslashes()
echo $res = stripslashes("L\\'a");
echo '<br>';
// dechex()
echo $res = dechex('2548');
echo '<br>';
// ceil()
echo $res = ceil('12.1');
echo '<br>';
//chunk_split()
echo $res = chunk_split('DGDFEF', '2', '-');
echo '<br>';
// htmlentities()
echo $res = htmlentities('&');
echo '<br>';
// strstr
echo $res = strstr('webmaster@phpdebutant.org', 'p');
echo '<br>';
// strlen()
echo $res = strlen('Lachainedecaracteres');
echo '<br>';
//strtolower()
echo $res = strtolower('LA CHAINE dE caRAcTERes');
echo '<br>';
// strtoupper()
echo $res = strtoupper('la ChAINe de CaractEres');
echo '<br>';
//str_replace()
echo $res = str_replace('a', 'o', 'lalala');
echo '<br>';
//trim()
echo $res = trim(' Salut le monde ');
echo '<br>';
//ucfirst()
echo $res = ucfirst('salut le monde. ca va?');
echo '<br>';
//ucwords()
echo $res = ucwords('salut le monde');
echo '<br>';
// strpos()
echo $res = strpos('abcde', 'e');
echo '<br>';

// 2do MO : Trouver le moyen de faire la même chose avec function() du PHP actuel
/*
// ereg()
if(ereg_replace("BCD","ABCDEF")){
    echo "oui";
}else{
    echo "non";
}
echo "<hr>";
*/

// addslashes
echo $result = addslashes("L'enfant");
echo '<br>';
// striplashes
echo $result = stripslashes("L\\'ayant droit");
echo '<br>';
// dechex()
echo $result = dechex('345679');
echo '<br>';
// ceil()
echo $result = ceil('56,3');
echo '<br>';
// chunk_split()
echo $result = chunk_split('SDRTUIKJJHGFMKUV', '3', '-');
echo '<br>';
// htmlentities()
echo $result = htmlentities('&');
echo '<br>';
// strstr()
echo $result = strstr('seckndanane16@manudon.fr', 'g');
echo '<br>';
// strlen()
echo $result = ('je suis le meilleur en programmation');
echo '<br>';
// strtolower()
echo $result = strtolower("LES enFANTS Sont à l'ECOLE");
echo '<br>';
// strtoupper()
echo $result = strtoupper('les EnfaNTS JouENT au FooT');
echo '<br>';
// str_replace()
echo $result = str_replace('a', 'o', 'lalalal lalalal lalala');
echo '<br>';
// trim()
echo $result = trim(' I am the best ');
echo '<br>';
// ucfirst()
echo $result = ucfirst('i am the one');
echo '<br>';
// ucwords()
echo $result = ucwords('i am the best');
echo '<br>';
// strpos()
echo $result = strpos('SDFRRTGGYU', 'T');
