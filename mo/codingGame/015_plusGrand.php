  <?php
  // Créer une fonction from scratch qui s'appelle plusGrand(). Elle prendra un argument de type array. Elle devra retourner le plus grand des élements présent dans l'array. Si l'array est vide, il faudra retourner null;

function plusGrand($notes){
    if(is_array($notes))
    {
        return max($notes);
    }
}
$arr = [32, 56];
var_dump(plusGrand($arr));