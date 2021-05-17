<?php include 'Inclueds/header.php' ?>
    <!--Basic HTML-->
    <h1>Hello HTML</h1>
    <br>
    <?php 
        //Use echo
        echo"Hello PHP";
        echo"<br/>";
        echo"Hello you";
        echo"<br/>";
    ?>

    <?php 
        // declare Variables
        $name = "Thummawit Pornbaiyok";
        $age = 23;
        // echo Variable
        echo $name;
        echo "<h2>My Name : ".$name." </h2>";
        echo "<h2>My Age : ".$age." </h2>";
        echo "<h2>My Nama : ".$name." Age : ".$age." </h2>";
    ?>

<?php require 'Inclueds/footer.php' ?>