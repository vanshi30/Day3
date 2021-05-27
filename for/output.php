<html>
    <head>
        <title>output</title>
    </head>
    <body">

    <?php
    $a = $_POST['txt1'];
    $b = $_POST['txt2'];
    echo "<h1 style='background-color:pink' align='center'>All numbers between entered starting number $a and entered ending number $b are as follows</h1>";
        for($c=$a;$c<=$b;$c++){
                echo "<tr>";
                if($c%2==0){
                    echo "<td><h2 style='color: red'>$c</h2></td>";
                }else{
                    echo "<td> <h2 style='background-color:rgb(224,255,75)'>$c</h2></td>";
                }
                echo "</tr>";
        }
    ?>
    </body>
</html>