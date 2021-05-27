<html>
    <head>
        <title>for with user input</title>
        
    </head>
    <body style="background-color: lightpink;">
        <h1 align="center" >FOR LOOP</h1>
        <form method="post" action="output.php">  
             
        <?php
        echo "<table>";
        echo "<tr>";
        echo"<td><h3>Enter starting number:</h3></td>";
        echo "<td><input type='number' name='txt1' value='num' min='1' max='10'</td>";
        echo "</tr>";

        echo "<tr>";
        echo"<td><h3>Enter ending number:</h3></td>";
        echo "<td><input type='number' name='txt2' value='num' min='1' max='10'</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><input type='submit' value='ENTER'</td>";
        echo "<td><input type='reset' value='RESET'</td>";
        echo "</tr>";
        echo "</table>";
        echo "</table>";
        ?>
        
        </form>
    </body>    
</html>