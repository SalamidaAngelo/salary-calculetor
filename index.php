<?php 
    if(isset($_POST["submit"]))
    {
        $giorniLav = $_POST["giorniLav"];
        $oreLav = $_POST["oreLav"];
        $compensoOrario = $_POST["compensoOrario"];
        $compenso = ($oreLav * $compensoOrario) * $giorniLav;
    }
?>


<html>
<head>
     <link rel="stylesheet" href="style.css">
</head>
 <body>
    <h1>Quanto sarai povero?</h1>

    <h2>Giorni</h2>
      <p1><input type="text" name="giorniLav"></p1>

    <h3>Ore giornaliere di lavoro</h3>
    <p2><input type="text" name="oreLav"></p2>

    <h4>Compenso orario</h4>
    <p3><input type="text" name="compensoOrario"><br><br></p3>

    <p5><input type="submit" name="calcola"></p5>


 </body>
</html>