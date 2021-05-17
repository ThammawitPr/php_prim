<?php include 'Inclueds/header.php' ?>
    <?php
        $phrase1 = "student who came late";
        $phrase2 = "in Class Stand With Rock";
        $name = 'thummawit Pornbaiyok';
        echo $phrase1 ." qwertyuiop[] ". $phrase2;
        echo '<br/>';
        echo '<hr/>';
        echo '<br/>';
        //string Transfromation
        echo 'Uppercase first Letter : '.ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word : '.ucwords($phrase1).'<br/>';
        echo 'Uppercase : '.strtoupper($name).'<br/>';
        echo 'Lowercase : '.strtolower($name." KUB").'<br/>';
        echo '<br/>';
        echo '<hr/>';
        echo '<br/>';
        echo 'Repeat String : '.str_repeat('-',50).'<br/>';
        echo 'Get SubString : '.substr($name,5,6).'<br/>';
        echo 'Get Posion of String : '.strpos($name,'T').'<br/>';
        
        echo '<br/>';
        echo 'Return Null<br/> ';
        echo 'Get Posion of String : '.strpos($name,'Tu').'<br/>';
        echo '<br/>';

        echo 'Fine Character : '. strchr($name,'T') .'<br/>';

        echo 'Fine Lenght of String : '.strlen($name).'<br/>';

        echo 'Trim <br/>';
        echo 'Trim Spaces on Both Side : '."A" .trim(" B C D "). "E" .'<br/>';
        echo 'Trim Spaces to Left : '."A" .ltrim(" B C D "). "E" .'<br/>';
        echo 'Trim Spaces to Right : '."A" .rtrim(" B C D "). "E" .'<br/>';

        echo 'Replace String with Another : '.str_replace("wit","w",$name).'<br/>';
    ?>
<?php require 'Inclueds/footer.php' ?>