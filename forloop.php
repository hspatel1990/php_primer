<?php 
    
    $title = 'For Loops';
    include 'includes/header.php'
    
?>
    <h1>For Loops</h1>
    <?php
    
    for($count = 1; $count <= 10; $count++){
        echo "<p>$count HELLO WORLD</P>";
    }
    
    for($count = 1; $count <= 10; $count++){
        echo "<p>The Count is: $count </p>";
    }
    ?>

<?php    require 'includes/footer.php';    ?>