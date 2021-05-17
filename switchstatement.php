<?php include 'Inclueds/header.php' ?>
    <h1>Switch Statement</h1>

    <?php 
        $grade = "A";

        switch($grade){
            case 'A':
                echo '<h2 style = "color : green"> You Are SuperStar! </h2>';
                break;
            case 'B':
                echo '<h2 style = "color : blue"> You Did Well! </h2>';
                break;
            default:
                echo '<h2 style = "color : red"> You Have Fail! </h2>';
                break;
        }
    ?>
<?php require 'Inclueds/footer.php' ?>