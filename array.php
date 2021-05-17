<?php include 'Inclueds/header.php' ?>
    <h1> Arrays </h1>
    <?php
        //Variable
        $num = 3;

        //Array
        //Only one DataType
        $numbers = array(1,2,3,4,5,6,7,8,9,100,200,300);
        echo $numbers[6];

        echo "<p>$numbers[4]</p>";

        $size = count($numbers);
        echo "<p>Array Number Size is : $size</p>";

        $count = 0;
        for($count; $count < $size ;$count++){
            echo "| $numbers[$count] ";
        }
    ?>
<?php require 'Inclueds/footer.php' ?>