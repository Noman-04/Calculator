<form method="post">

        <h4><b>Choose a number to display its multiplication table</b></h4>

        <input type="" name="num1" class="form-control" placeholder="Enter a number"><br><br>

        <input type="submit" name="MultiTable"><br><br>
        <input name="reset" type="image" src="images/reset.jpg" class="reset_button" onclick="document.theForm.reset();return false;"width="75" 
        height="75"/>


        </form>

        <?php


            $num=$_POST['num1'];
            echo"This is the muliplication table of ",$num, "<br>";

            // crearing a loop to to go through the multiplication table

            if(isset($_POST['MultiTable'])){

                for ($i = 1; $i < 11; $i++){

                    $result= $i*$num;

                    echo $i, " x ", $num, "= ", $result,"<br>";

                }

            }

       

        ?>