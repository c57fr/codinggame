<?php
$toto = 512;

// on enchaine les controles ci-dessous ....
if($toto > 0 && $toto < 500) // 1er
{
    echo $toto.' est compris entre 0 et 499';
}elseif($toto >= 500 && $toto < 1000)
{
    echo $toto.' est compris entre 500 et 1000';
}else{
    echo $toto.' est plus grand que 999';
}
echo "<hr>";
$simba = 700;
if($simba > 0 && $simba < 700)
{
    echo $simba.' est compris entre 0 et 500';
}elseif($simba >=700 && $simba < 1200)
{
    echo $simba.' est compris entre 800 et 1200';
}else{
    echo $simba.' est plus grand que 1200';
}
echo "<hr>";

$medor = 'chien';

//on enchaine les conditions ci-dessous
if($medor == 'girafe !')
{
    echo 'Medor est un girafe !';
}elseif($medor == 'elephant')
{
    echo 'Medor est un elephant';
}elseif($medor == 'souris')
{
    echo 'Medor est une souris';
}elseif($medor == 'chien')
{
    echo 'Medor est un chien';
}elseif($medor == 'chat')
{
    echo 'Medor est un chat';
}else{
    echo 'peut etre un hyppopotame? Qui sait ...';
}

echo "<hr>";
$animal = 'vache';
if($animal == 'cheval')
{
    echo 'Animal est un cheval';
}elseif($animal == 'oiseau')
{
    echo 'Animal est un oiseau';
}elseif($animal == 'poulet')
{
    echo 'Animal est un poulet';
}elseif($animal == 'baleine')
{
    echo 'Animal est une baleine';
}elseif($animal == 'vache')
{
    echo 'Animal est une vache';
}else{
    echo 'Peut etre c\'est pas un animal mais une fleur ? Qui sait ...';
}

echo "<hr>";
$medor = 'chien';
switch($medor)
    {
        case 'girafe':
            echo 'Medor est un girafe';
        break;
        case 'elephant':
            echo 'Medor est un elephant';
        break;
        case 'souris':
            echo 'Medor est une souris';
        break;
        case 'chien':
            echo 'Medor est un chein';
        break;
        case 'chat':
            echo 'Medor est un chat';
        break;
        default:
        echo 'Peut etre un hyppopotame? Qui sait ...';
    }

    echo "<hr>";
    $portable = "Huawei";
    switch($portable)
        {
            case 'alcatel':
                echo 'Le portable est une marque alcatel';
            break;
            case 'nokia':
                echo 'Le portable est une marque nokia';
            break;
            case 'apple':
                echo 'Le portable est une marque apple';
            break;
            case 'samsung':
                echo 'Le protable est une marque samsung';
            break;
            case 'Huawei':
                echo 'Le portable est une marque Huawei';
            break;
            default:
            echo 'On ne connait pas la marque';
        }
    
echo "<hr>";

$toto = 6;
$i = 0;
// debut de la boucle
while($i != $toto)
{
    echo 'Toto est different de '.$i.'<br>';
    $i++; // $i++ est equivalent à ($i+1)
}
//fin de boucle
echo 'Toto est egal à '.$i;

echo "<hr>";

$num = 12;
$x = 0;
// debut de boucle 
while($x != $num)
{
    echo 'Numero est different de '.$x.'<br>';
    $x++;
}
// fin de boucle 
echo 'Numero est egal à '.$x;

echo "<hr>";

$toto = 6;

// debut de boucle
for($i = 0; $i != $toto; $i++)
{
    echo 'Toto est different de '.$i.'<br>';
}
// fin de boucle

echo 'Toto est egal à '.$i;

echo "<hr>";

$numb = 7;
//dubut de boucle
for($x = 0; $x != $numb; $x++)
{
    echo 'Le number est different de '.$x.'<br>';
}
// fin de la boucle
echo 'Le number est egal à '.$x;