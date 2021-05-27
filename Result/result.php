<html>
    <head>
            <title>result</title>
            <link rel="stylesheet" type="text/css" href="css/style4.css">
            <style>
                table, th, td 
                {
                  border: 1px solid black;
                  border-collapse: collapse;
                  padding: 15px;
                  text-align: center;
                  
                }
                
            </style>

    </head>
    <body>
        <h1 align='center'>RESULT</h1>
        <?php
        $a = $_POST['txt1'];
        $b = $_POST['txt2'];
        $c = $_POST['txt3'];
        $d = $_POST['txt4'];
        $e = $_POST['txt5'];
        $f = $a+$b+$c+$d+$e;
        $g = ($f/500)*100;
            
            echo "<table border='1' cellspacing='0' style='width= 100%;margin-left:auto;margin-right:auto;'";
            echo "<div class='reg'>";
            echo "<tr>";
            echo "<th><span id='p'><b>SUBJECTS</b></span></th>";
            echo "<th>Discrete Mathemetics</th>";
            echo "<th>Theory of Computation</th>";
            echo "<th>Java</th>";
            echo "<th>Web Programming</th>";
            echo "<th>Computer Networks</th>";
            echo "<th><span id='p'>TOTAL</span></th>";
            echo "</tr>";
            

            echo "<tr>";
            echo "<td><span id='p'><b>OBTAINED MARKS</b></span></td>";
            echo "<td>$a</td>";
            echo "<td>$b</td>";
            echo "<td>$c</td>";
            echo "<td>$d</td>";
            echo "<td>$e</td>";
            echo "<td><span id='p'><b> $f </b></span></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td><span id='p'><b>PERCENTAGE</b></span></td>";
            echo "<td colspan='6' align='center'><span id='per'><b>$g%</b></span></td>";
            echo "</tr>";
            echo "</div>";
            echo "</table>";
            echo "<br>";

            if($f>=400 && $f<=500){
                echo "<div class='first'>";
                echo "<center>Distinction(First class)</center>";
                echo "</div>";
            }elseif($f>=300 && $f<400){
                echo "<div class='second'>";
                echo "<center>Secondclass</center>";
                echo "</div>";
            }elseif($f>=200 && $f<300){
                echo "<div class='third'>";
                echo "<center>Thirdclass</center>";
                echo "</div>";
            }elseif($f>=100 && $f<200){
                echo "<div class='fourth'>";
                echo "<center>Fourthclass</center>";
                echo "</div>";
            }else{
                echo "<div class='fail'>";
                echo "<center>FAIL</center>";
                echo "</div>";
            }


        ?>
    </body>
</html>