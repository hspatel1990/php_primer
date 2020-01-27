<?php 
    
    $title = 'While/Do While';
    include 'includes/header.php'
    
?>
    <h1>While Loop</h1>
    <?php
    $grade = 0;
   // infinite loop
  // while($grade <10){
    //   echo '<p> I am less than 10!</p>';
   //}
   
   // Pre-condition Loop
   
    while($grade <10){
        echo "<p> I am less than $grade!</p>";
        $grade++;
    }
    
        echo 'EXIT Loop';
    ?>

    

    <h1>Do While Loop</h1>
    
    <?php
    $grade = 0;
    // post condotion loop
    
    do{
        echo '<p>I AM DO WHILE!</p>';
        $grade++;
    }while($grade < 10);

        echo 'EXIT Loop';


    ?>
<?php    require 'includes/footer.php';    ?>