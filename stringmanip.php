<?php 
    
    $title = 'String Manipulation';
    include 'includes/header.php'
    
?>
    <h1>String Manipulation</h1>
    <?php 
    // concatenation of strings
        $phrase1 = "Students who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "harshit patel";

        echo $phrase1 . " " . $phrase2;
        echo '<br/>';
        echo '<hr/>';
    // transformation of strings
        echo "Uppercase first letter: " . ucfirst($name)."<br/>";
        echo "Uppercase first letter of each word: " . ucwords($name)."<br/>";
        echo "Uppercase: " . strtoupper($name)."<br/>";
        echo "Lowercase: " . strtolower($name)."<br/>";
        echo '<hr/>';
        echo 'Repeat string: ' . str_repeat($name,3) . '<br/>';
        echo 'Repeat string: ' . strtoupper(str_repeat($name,3)) . '<br/>';
        echo 'Get a substring: ' . substr($name,8,2). '<br/>';

        echo 'Get Position of string: ' . strpos($name,'p').'<br/>';

        // Returns NULL
    //  echo 'Get Position of string: ' . strpos($combine,'z').'<br/>';

        echo 'Find Charactor "R": ' . strchr($name,'R') . '<br/>';
        echo 'Find Charactor "r": ' . strchr($name,'r') . '<br/>';
        echo 'Find Charactor "s": ' . strchr($name,'s') . '<br/>';
        echo 'Find Charactor "t": ' . strchr($name,'t') . '<br/>';

        echo 'Find length of string: ' . strlen($name) . '<br/>';

        echo 'Without Trim: ' . "A" . " B C D ". "E" . '<br/>';
        echo 'Trim spaces on both sides: ' . "A" . trim(" B C D "). "E" . '<br/>';
        echo 'Trim spaces to left: ' . "A" . ltrim(" B C D "). "E" . '<br/>';
        echo 'Trim spaces to right: ' . "A" . rtrim(" B C D "). "E" . '<br/>';
        echo 'Replace string with another: ' . str_replace("stand","sit",$phrase2) . '<br/>';

           
    ?>
<?php    require 'includes/footer.php';    ?>