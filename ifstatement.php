<?php include 'Inclueds/header.php' ?>
    <h3 style="color:white; 
                Background:red;">Style</h3>

    <?php 

        //An If Statement that Will Carry Out An Action Based On The Value Of The Variable.
        echo "<h2>IF Statement</h2>";

        $grade = 800;
        if ($grade >= 50){
            echo "<h3 style='color: green'>You Have Pass</h3>";
        }else{
            echo "<h3 style='color: red'>You Have Fail</h3>";
        }
        
        $grade = "A";
        //if - elseIf
        if ($grade == "A") {
            echo "<h3>You Are SuperStar</h3>";

        }elseif($grade == "B"){
            echo "<h3>You DID WELL!</h3>";
        }
        else{
            echo "<h3>You Fail!</h3>";
        }
    ?>
<?php require 'Inclueds/footer.php' ?>