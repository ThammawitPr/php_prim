<?php include 'Inclueds/header.php' ?>
    <h1>Function</h1>
    <?php
        /*Defining a Function*/ 
        function writemessage(){
            echo "nice person";
        }
        
        /*Calling Function */
        writemessage();
        echo "<hr/>";
        writemessage();
        echo "<hr/><br/>";

        /*Function with Parameters*/
        function addFunction($num1,$num2){
            $num2 = $num2 + 5;
            $sum = $num1+$num2;

            echo "sum : ".$num1." + " .$num2.  " = " .$sum."<br/>";
        }

        /*Pass by Reference - use ampresand in parameter*/
        function changenum(&$num){
            $num = $num+50;
            //$num += 50;
        }

        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }

        $num = 500;
        addFunction(1,2);
        addFunction(1,$num);
        addFunction("10","50");
        
        changenum($num);
        echo $num.'<br/>';
        $return_value = returnProduct(20,50);
        echo $return_value.'<br/>';
    ?>
<?php require 'Inclueds/footer.php' ?>