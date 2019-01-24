<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ciklicna tablica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
<main>
    <section id="unos">
        <h1> Treća Domaća Zadaća </h1>
        <form method="post" action="index.php">
            <div>

                <label for="redovi">Broj Redaka:</label>
                <br />
                <input type="text" name="brojredaka" id="redovi"> <!-- unosimo broj redaka -->
                <br />
                <label for="stupci">Broj Stupaca:</label>
                <br />
                <input type="text" name="brojstupaca" id="stupci"> <!-- unosimo broj stupaca -->
                <br />
                <br />
                <br />
                <br />
                <br />
                <input class="button" type="submit" value="KREIRAJ TABLICU">
            </div>
        </form>
    </section>
    <section id="output">
    <?php

    if(isset($_POST['brojredaka']) && isset($_POST['brojstupaca'])):   ?>

        <div class="output">

        </div>
        <div>
            <table class="tablic">
                <tbody>
                <?php

                include_once 'tablica.php';
                $x = $_POST['brojredaka'];

                $y = $_POST['brojstupaca'];

                niz($y, $x, $a);
                for ($i = 0; $i < $y; $i++) { ?>

                    <tr><?php

                    for ($j = 0; $j < $x; $j++) {?>

                       <?php if($i===0 && $j === 0){

                        ?> <td class="prviKvadrat"  <?php

                        } else{

                        	?><td class="td <?php

                        }

                        $j1 = $j - 1;
                        $j2 = $j + 1;
                        $i1 = $i - 1;
                        $i2 = $i + 1;
                        if($a[$i][$j1]-1===$a[$i][$j]){
                            echo " td1";
                        } else if($a[$i][$j2]-1===$a[$i][$j]){
                            echo " td2";
                        } else if($a[$i1][$j]-1===$a[$i][$j]){
                            echo " td3";
                        } else if($a[$i2][$j]-1===$a[$i][$j]){
                            echo " td4";

                        }?>
                            "><?php
                        echo $a[$i][$j]; ?>
                        </td><?php
                    } ?>
                    </tr><?php
                } ?>
                </tbody>
            </table>
        </div>

    <?php endif;?>
</main>
</section>
</body>
</html>