<html>
<link rel="stylesheet" href="style.css">
<div class="main">
  <head> 
    <title>PHP Test</title>
  </head>
    
      <body class="mainBg">
        <h1>Utilizzo delle varie funzioni</h1>
            <?php
                echo "<h2>Funzione data</h2>";
                $today = date("d/m/Y"). "<br>";
                echo("La data di oggi è: " . $today);

                echo "Data in diversi formati: <br>";
                echo date("Y/m/d"). "<br>";
                echo date("d-m-Y"). "<br>";
                echo date("D-M-Y"). "<br>";
                echo date("d-M-Y"). "<br>";
                echo date("d-M-y"). "<br>";
                echo date("D-F-Y"). "<br>";

                if(isset($today)){
                    echo "<br>". "La variabile \$today è instanziata";
                } else {
                    echo "<br>". "La variabile \$today non è instanziata";
                }


                echo "<h2>Gestione stringa</h2>";
            
                $str = "Il gatto sul tetto che scotta";
                echo $str."<br>";

                //Sottostringa da pos 4 a 10
                echo "<br>". substr($str, 4, 6)."<br>";
                //Sostituzione "gatto" con "cane"
                echo str_replace("gatto", "cane", $str)."<br>";
                //Sostituzione "tetto" con "letto"
                echo str_replace("tetto", "letto", $str)."<br>";
                //Trasformazione in maiuscolo
                echo strtoupper($str)."<br>";
                


                echo "<h2>Gestione orario</h2>";
                
                $ora = date("H:i");
                echo "Orario: " . $ora . "<br>";

                if ($ora <= 12) {
                    echo "Buondì";
                } elseif ($ora > 12 and $ora < 18) {
                    echo "Buon pomeriggio";
                } else {
                    echo "BELANDI AMICI DI STRISCIA";
                }

                echo "<h2>Tabelle</h2>";

                $righe = 4;
                $colonne = 5;

                echo "<table border='10'>";

                $i = 1;
                
                for($tr=1;$tr<=$righe;$tr++){

                    echo "<tr>";
                        for($td=1;$td<=$colonne;$td++){
                            if ($i % 2 == 0) {
                                echo "<td style='background-color:gblack; font-size:40; text-align:center'>". $i ."</td>";
                            }else {
                                echo "<td style='background-color:white; color:black; font-size:40; text-align:center'>". $i ."</td>";
                            }
                            $i++;
                        }
                    echo "</tr>";
                }

                echo "</table>";

            ?>
        </body>
</div>
</html>