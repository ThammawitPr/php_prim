<?php include 'Inclueds/header.php' ?>
    <h1> Date and Time Manipulation </h1>
   <?php
        $datenow = getdate();
        echo "Today's Date : <br/>";
        echo $datenow['mday'] .'<br/>';
        echo $datenow['mon'] .'<br/>';
        echo $datenow['year'] .'<br/>';

        echo "Date to Day : ".$datenow['mday']." / ".$datenow['mon']." / ".$datenow['year']."<br/>";
        echo "<br/>";
        echo time()."<br/>";

        print date("m/d/y G.i:s<br>",time())."<br/>";
        print "Today is :";
        print date("j of F Y, \a\\t g.i a", time())."<br/>";
   ?>
<?php require 'Inclueds/footer.php' ?>