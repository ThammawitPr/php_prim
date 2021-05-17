<?php include 'Inclueds/header.php' ?>
    <h1>For Loop</h1>
    
    <?php
        $count = 0;
        //For loop
        for($count; $count <= 10; $count++){
            echo "<p> hello world! $count </p>";
        }
        $count-=1;
        echo"</br>";
        for($count ; $count>=0 ; $count--){
            echo "<p> Count is : $count </p>";
        }
    ?>
<?php require 'Inclueds/footer.php' ?>