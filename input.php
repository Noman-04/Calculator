<form method="post">
    <h4><b>Enter 1st Value</b></h4>
       <input type="text" name="one" id="one" class="form-control" placeholder="1st Digit">
       <br >
    <h4><b>Enter 2nd Value </b></h4>
       <input type="text" name="two" id="two" class="form-control" placeholder="2nd Digit">
       <br /><br />
    <h4><b>Enter choice </b></h4>
       <input type="text" name="three" id="two" class="form-control" placeholder="Choice(+ , -, /, *)">
       <br /><br />
       <input type="submit" name="submit">
    </form>
      <h4><b>Result:</b></h4> 

      <?php

        if(isset($_POST['submit'])){
            $sum=0;
            $one=$_POST['one'];
            $two=$_POST['two'];
            $three=$_POST['three'];
              //echo $one;
            if ($three == "*") {
                $sum=$one*$two;
                echo $sum;
            }
            elseif ($three == "-") {
                $sum=$one-$two;
                echo $sum;
            }
            elseif ($three == "/") {
                $sum=$one/$two;
                echo $sum;
            }
            elseif ($three == "+") {
                $sum=$one+$two;
                echo $sum;
            }
            else{
                echo "incorrect input";
            }
            
            exit;
            }

     

             ?>