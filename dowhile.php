<html>
    <head>
        <title>do while</title>
    </head>
    <body style="background-color: lightyellow;">
        <h1 style="color: purple;" align="center" >DO WHILE LOOP</h1>
        <?php
        $a=1;
        echo "<table border='1'cellspacing='0'>";
       do{
           echo "<tr>";
        if($a%2==0){
            echo "<td bgcolor='pink'>$a</td>";
         }else{
         echo "<td bgcolor='yellow'>$a</td>";
         }
         echo "</tr>";
         $a++;
       } while($a<=100);
       echo "</table>";
        
        
        ?>
    </body>    
</html>