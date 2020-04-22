Pas de simu locale pour l'exo Mars.

<?php
if (!function_exists('vdli')) include '../../dev/vdli.php';

// https://www.codingame.com/ide/puzzle/mars-lander-episode-1


//////////////////////////////////////////////////////////////

/*
Solution dans codding :

<?php
/**

// $surfaceN: the number of points used to draw the surface of Mars.
fscanf(STDIN, "%d", $surfaceN);
error_log(var_export($surfaceN, true));
for ($i = 0; $i < $surfaceN; $i++)
{
    // $landX: X coordinate of a surface point. (0 to 6999)
    // $landY: Y coordinate of a surface point. By linking all the points together in a sequential fashion, you form the surface of Mars.
    fscanf(STDIN, "%d %d", $landX, $landY);
}
$pw=0;$i=0;
// game loop
    
while (TRUE)
{
    $i++;
    // $hSpeed: the horizontal speed (in m/s), can be negative.
    // $vSpeed: the vertical speed (in m/s), can be negative.
    // $fuel: the quantity of remaining fuel in liters.
    // $rotate: the rotation angle in degrees (-90 to 90).
    // $power: the thrust power (0 to 4).
    fscanf(STDIN, "%d %d %d %d %d %d %d", $X, $Y, $hSpeed, $vSpeed, $fuel, $rotate, $power);

    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    $pw= ($i>24 && $vSpeed < -39) ? 4: 0;
    // 24 trouvé de façon empirique
    
    // 2 integers: rotate power. rotate is the desired rotation angle (should be 0 for level 1), power is the desired thrust power (0 to 4).
    
    echo("0 $pw\n");
    $i++;
}
?>

-----------------------------------------------------------------

La solution la + courte

<?php
$i=0;
while(1)
    echo ((++$i<13) ? "0 0":"0 4")."\n";

-----------------------------------------------------------------

Solution utilisant formule de poussée

... ENTREES
...

$maxSpeed = -40;
$height = 100;
$gravity = 3.711;

function landingSpeed($speed, $power, $gravity, $alt) {
    return ceil(sqrt(pow($speed, 2) + 2 * ($gravity - $power) * $alt));
}

// game loop
while (TRUE)
{
    fscanf(STDIN, "%d %d %d %d %d %d %d",
        $X,
        $Y,
        $hSpeed, // the horizontal speed (in m/s), can be negative.
        $vSpeed, // the vertical speed (in m/s), can be negative.
        $fuel, // the quantity of remaining fuel in liters.
        $rotate, // the rotation angle in degrees (-90 to 90).
        $power // the thrust power (0 to 4).
    );

    // *****************************
    // * WITH ECONOMIC ACHIEVEMENT *
    // * ***************************

    $alt = $Y - $height;
    $landingSpeed = landingSpeed($vSpeed, 4, $gravity, $alt);
    error_log(var_export($landingSpeed, true));
    
    $thr = floor($vSpeed / ($maxSpeed / 4));
    if ((int)$landingSpeed < abs($maxSpeed)) {
        $thr--;
    }
    
    $thr = ($thr < 0) ? 0 : $thr;
    $thr = ($thr > 4) ? 4 : $thr;
    
    echo("0 $thr\n");
}

*/
