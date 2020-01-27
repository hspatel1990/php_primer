<?php 
    
    $title = 'Arrays';
    include 'includes/header.php'
    
?>
    <h1>Arrays</h1>
    <?php
        // a variable
        $num = 3;

        //an array
        // Homogenous array - only one datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,10);

        echo $numbers[5];

        echo "<p>$numbers[8]</p>";

        $size = count($numbers);
        echo "<p> Array numbers is size: $size";


        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
?>
<?php    require 'includes/footer.php';    ?>