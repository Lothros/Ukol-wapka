<?php

//spojení s mysql
$mysqli = new mysqli('localhost', 'root', '', 'ondras1459803312');
mysqli_set_charset($mysqli, "utf8");

$vystup_select=$mysqli->query("SELECT * FROM studenti");

$select = $mysqli->query("SELECT jméno, příjmení, město, obo.nazev FROM studenti AS stu LEFT JOIN obory AS obo ON stu.obory_id_obor=obo.ID_obor");

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

    <h1>Tabulka studentů</h1>

        <?php

        echo "<table id='tabulka1' class='tablesorter'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Jméno</th>";
        echo "<th>Příjmení</th>";
        echo "<th>Město</th>";
        echo "<th>Studijní obor</th>";
        echo "</tr>";
        echo "</thead>";

		echo"<tbody>";

        while ($radek = $select->fetch_array()) {

        	echo "<tr>";

            	echo "<td>" . $radek["jméno"] . "</td>";

				echo "<td>" . $radek["příjmení"] . "</td>";

				echo "<td>" . $radek["město"] . "</td>";

                echo "<td>" . $radek["nazev"] . "</td>";

            echo"</tr>";

        }

        echo"</tbody>";
        echo "</table>";


        $mysqli->close();
        ?>                 

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
