<?php

//spojení s mysql
$mysqli = new mysqli('localhost', 'root', '', 'ondras1459803312');
mysqli_set_charset($mysqli, "utf8");

$vystup_select=$mysqli->query("SELECT * FROM studenti");

        if (!empty($_POST)) {
            $jmeno = $_POST["jmeno"];
        $prijmeni = $_POST["prijmeni"];
        $mesto = $_POST["mesto"];
        $obor = $_POST["obor"];
 
        $insert = $mysqli->query("INSERT INTO studenti (jméno, příjmení, město, obory_id_obor) VALUES ( '$jmeno','$prijmeni','$mesto','$obor')");

        header('Location: index.php');

        }

        
?>

<!DOCTYPE html>
<head>
    
    <meta charset="UTF-8">
    
    <title>WAP úkol</title>

    <link rel="stylesheet" type="text/css" href="css.css">

	<script src='js/jquery-latest.js'></script>

	<script src='js/jquery.tablesorter.min.js'></script>

</head>

<body>

    <nav>
        <ul>

            <a href="index.php"><li>Studenti</li></a>

            <a href="obory.php"><li>Obory</li></a>

            <a href="insert.php"><li>Vložit</li></a>

        </ul>
    </nav>

    <div class="container">

    <h1>Přidání studenta</h1>

        <form action="insert.php" method="post" target="_blank">

            Jméno: <input type="text" name="jmeno"><br>
            
            Příjmení: <input type="text" name="prijmeni"><br>
            
            Bydliště: <input type="text" name="mesto"><br>
            
            Obor: <select id="country" name="obor">

                <option value="1">Informační technologie</option>
                <option value="2">Grafický design</option>
                <option value="3">Mechatronik</option>

            </select><br>

            <input type="submit" value="Vložit">

        </form>

    </div>

         
	<script type='text/javascript'>
    	$(document).ready(function() { 
    // call the tablesorter plugin 
    $("table").tablesorter({ 
        // sort on the first column and third column, order asc 
        sortList: [[0,0],[2,0]] 
    }); 
})
	</script>
</body>
    <footer>
     <div class="footer"> Lothros © 2016 </div>
    </footer>
