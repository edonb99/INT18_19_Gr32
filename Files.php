<?php

    $a = fopen("TextFile.txt", "r+") or die("Unable to open file!");


    while (!feof($a))
    {
        $line = fgets($a);
        echo $line . "<br />";
    }
    
    $txt = "\n\n\nUpcoming supplies: 21/03/2015";
    fwrite($a, $txt);

    fclose($a);
    
    $arr1 = array("Enchantment by Guy Kawasaki", "CITY by P.D.Smith", "Just Courage by Gary A.Haugen", "The Tattooist of Auschwitz by Heather Morris" , "Harry Potter by J.K. Rowling", "Every Breath by Nicolas Sparks", "The lost girls of Paris Pan Jenoff", "The Reckoning John Grisham", "The couple next door Shari Lapena", "The silent patient Alex Michaelides", "Where the cowards sing Delia Owens", "The Coin Sandeep Sharma");
    
    sort($arr1);
        
    echo "<br/><br/><br/>Sorted books: <br/><br/>";
    
    $clength = count($arr1);
    for($i = 0; $i < $clength; $i++) {
        echo $arr1[$i];
        echo "<br>";
    }
    
    echo "<br/><br/>";
    
?>