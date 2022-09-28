<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Control Progress</title>
    </head>

    <body>
        <!--All PHP scripts need to go inside these tags-->
        <?php
        #For loop
            for ($i = 1; $i < 3; $i++) {
                echo "<dt>Outer loop iteration $i<br>";
    
                for ($j = 1; $j < 3; $j++) {
                    echo "<dd>Inner loop iteration $j<br>";
                }
            }
            
            #2 veriables
            $num1 = 10;
            $num2 = 10;
            $result = $num1 + $num2;
            echo " Hello $num1 + $num2 = $result<br>";

        ?>
    
</form>
    </body>

</html>