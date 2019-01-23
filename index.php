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


        <?php include_once "tablica.php";
        if(isset($_POST['brojredaka']) && isset($_POST['brojstupaca']))
        {


            $x = $_POST['brojredaka'];
            $y = $_POST['brojstupaca'];

            niz($x, $y, $a);
            echo "<table class='tablica' border='1'>";
            for ($i = 0; $i < $x; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $y; $j++) {
                    echo "<td>";
                    echo($a[$i][$j]);
                    echo "</td>";


                }


                echo "</tr>";

            }
        }

                ?>

            </section>


</main>

    
</body>
</html>