<html>
    <head>
        <title>for</title>
    </head>
    <body style="background-color: lightyellow;">
        <h1 style="color: purple;" align="center" >FOR LOOP</h1>
        <?php
        
        echo "<table border='1'cellspacing='0'>";
        
        for($a=1;$a<=1000;$a++){
            echo "<tr>";
            if($a%2==0){
               echo "<td bgcolor='pink'>$a</td>";
            }else{
            echo "<td bgcolor='yellow'>$a</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </body>    
</html>