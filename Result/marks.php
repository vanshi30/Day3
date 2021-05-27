<html>
    <head>
        <title>Marks</title>
        <link rel="stylesheet" type="text/css" href="css/style3.css">
    </head>
    <body>
    <h1 align="center">Enter marks</h1>
    <br>

        <div class="marks">    

        <form method="post" action="result.php">
        <?php
           echo "<table>";
           echo"<tr>";
           echo"<td>Discrete Mathematics:";
           echo"<input type='number' name='txt1' value='maths' min='0' max='100' required='true' id='n'></td>";
           echo"</tr>";

           echo"<tr>";
           echo"<td><br>Theory of computation:";
           echo"<input type='number' name='txt2' value='toc' min='0' max='100'required='true' id='n'></td>";
           echo"</tr>";

           echo"<tr>";
           echo"<td><br>Java:";
           echo"<input type='number' name='txt3' value='java' min='0' max='100'required='true' id='n'></td>";
           echo"</tr>";

           echo"<tr>";
           echo" <td><br>Web programming:";
           echo"<input type='number' name='txt4' value='wp' min='0' max='100'required='true' id='n'></td>";
           echo"</tr>";

           echo"<tr>";
           echo"<td><br>Computer networks:";
           echo"<input type='number' name='txt5' value='cn' min='0' max='100'required='true' id='n'></td>";
           echo"</tr>";
           
           echo "<tr>";
           echo"<td><br> <input type='submit' value='ENTER DATA' id='b'</td>";
           echo"<td><br> <input type='reset' value='RESET DATA' id='b'</td>";
           echo "</tr>";
           echo"</table>";

           
        ?>
        </form>
        </div>

    </body>
</html>