<?php include 'Inclueds/header.php' ?>
    <h1>While Loop</h1>
    <?php
        $grade = 0;
        //Infinite Loop
        //while($grade < 10){
        //  echo '<p> I AM Less then 10 </p>';
        //}
    
        //Pre-Conditon Loop
        while($grade < 10){
            $grade++;
            echo '<p> I AM Less then '.$grade.' </p>';
        }
        echo 'Exit Loop';
    ?>
    <br/>
    <h1> Do-While Loop </h1>
    <?php
        $grade = 0;
        do{
            $grade++;
            echo '<p> I AM Less then '.$grade.' </p>';
        }while($grade < 10);
    ?>
<?php require 'Inclueds/footer.php' ?>