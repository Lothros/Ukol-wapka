<?php

//spojení s mysql
$mysqli = new mysqli('localhost', 'root', '', 'ondras1459803312');
mysqli_set_charset($mysqli, "utf8");

$records=$mysqli->query("SELECT * FROM studenti");

$select = $mysqli->query("SELECT jméno, příjmení, město, obory_id_obor FROM studenti");

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

                echo "<td>" . $radek["obory_id_obor"] . "</td>";

            echo"</tr>";

        }

        echo"</tbody>";
        echo "</table>";

        $mysqli->close();
        ?>

    Vysvětlivky:
    <ul>
        <li>1 - Informační technologie</li>
        <li>2 - Grafický Design</li>
        <li>3 - Mechatronik</li>
    </ul>


                 
                 

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
