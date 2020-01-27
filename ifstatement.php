<?php 
    
    $title = 'If Statements';
    include 'includes/header.php'
    
?>

    <h1>If - Else Statements</h1>
    <?php

        echo "<h2>If Statement</h2>";

    $grade = 30;

    if($grade >= 50){
        echo "<h3 style = 'color: green'>You have Passed</h3>";
    
    } 
    else{
        echo "<h3 style= 'color: red'> You have Failed</h3>";
    }
    $grade = 'A';
    // If Else If Else
    if($grade == 'A'){

            echo '<h2>You are a Superstar</h2>';
    }
    elseif($grade == 'B'){

        echo '<h2>You did well</h2>';
    }
    else {

        echo '<h2>You have Failed....</h2>';
    }
    ?>
<?php    require 'includes/footer.php';    ?>