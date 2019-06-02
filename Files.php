<html>
<body style="background-color: antiquewhite;">
<?php

    //Krijimi i variables $a qe mundet te lexoj ose te shkruaj ("r+") ne TextFile.txt
    $a = fopen("TextFile.txt", "r+") or die("Unable to open file!");


    while (!feof($a))   //Perderisa nuk ka perfunduar file TextFile.txt
    {
        $line = fgets($a);      //leximi neper qdo rresht te TextFile.txt
        echo $line . "<br />";  //Shtypja e c'do rreshti
    }
    
    echo "<a href='books.php' style='margin-left: 990px; background-color: red; color: yellow; text-decoration: none; border: 0px solid lightgreen;'>Back to Books site</a>";
    
    $txt = "\n\n\nUpcoming supplies: 21/03/2019";
    fwrite($a, $txt);   //shkrimi(shtimi i tekstit) ne TextFile.txt permers metodes fwrite() 

    fclose($a); //funksioni per mbylljen e vargut $arr1

    
    $arr1 = array("'Enchantment' by Guy Kawasaki", "'CITY' by P.D.Smith", "'Just Courage' by Gary A.Haugen", "'The Tattooist of Auschwitz' by Heather Morris" , "'Harry Potter' by J.K. Rowling", "'Every Breath' by Nicolas Sparks", "'The lost girls of Paris' by Pan Jenoff", "'The Reckoning' by John Grisham", "'The couple next door' by Shari Lapena", "'The silent patient' by Alex Michaelides", "'Where the cowards sing' by Delia Owens", "'The Coin' by Sandeep Sharma");
    
    sort($arr1);    //sortimi i $arr1 ne menyre alfabetike
        
    echo "<br/><br/><br/><br/>Sorted books: <br/><br/>";
    
    $clength = count($arr1);    //numerimi i anetareve te vargut $arr1
    for($i = 0; $i < $clength; $i++) {  //iterimi neper qdo anetare te vargut
        echo $arr1[$i]; //shtypja e qdo anetari
        echo "<br>";
    }
    

    $AuthorNames = "Guy Kawasaki???P.D Smith???Gary A. Haugen???Heather Morris???J.K. Rowling???Nicolas Sparks???Pan Jenoff???John Grisham???Shari Lapena???Alex Michaelides???Delia Owens???Sandeep Sharma";
    echo "<br/><br/><br/>Authors available: <br/>";
    print_r(explode("???", $AuthorNames, 12));  //transformimi i stringut ne array permes metodes explode()
    echo "<br/><br/><br/>";

    
    echo "<br/>Titles available:<br/>";
    $titlesArray = array(
     "Enchantment",
     "City",
     "Just Courage",
     "Tattooist of Auschwitz",
     "Harry Potter",
     "Every Breath",
     "The lost girls of Paris",
     "The Reckoning",
     "The couple next door",
     "The silent patient",
     "Where the cowards sing",
     "The Coin");
    echo implode("~~~~~", $titlesArray);    //transformimi i elementeve te array ne string permes metodes implode()

    echo "<br/><br/><br/><br/>";


    $s1 = max($titlesArray);
    printf("The book with the longest title is: <br/>\"%s\"", $s1); //perdorimi i funksionit printf() per shfaqjen e stringut $s1

    echo "<br/><br/><br/><br/>";

    
    $s10 = "\"Harry Potter\" by J.K. Rowling";
    echo str_replace(substr($s10, 18, 29), "Joanne Rowling", $s10); //nderrimi i vendeve midis "J.K. Rowling" 
    echo "<br/><br/>";                                              //dhe "Joanne Rowling
    
    
    echo "<br/><br/><br/><br/>";
    
?>




<!-- ****************** OOP ************************* -->
<?php
    //  parent class
class Library {
  //The $type eshte protected , keshtu qe mundet me u qas 
  // prej klases dhe child classes
  protected $type;
   
  //Public setter method
  public function setType($type)
  {
    $this -> type = $type;
  }
}
  
// The child class
class BooksType extends Library {
 
// Nuk ka problem për të marrë diqka të mbrojtur që i takon parent class

  public function njeFunksion()
  {
    return "These are  <i>" . $this -> type . "</i><br />";
  }
}
  
//Create an instance from the child class
$booksType1 = new BooksType();
  
//Set the class name
$booksType1 -> setType('NOVELS');
  
//Get the class name
echo $booksType1 -> njeFunksion();
echo "<br /><br /><br />"

?>
<!-- ************************************************************ -->



<!-- ****************** OOP ************************* -->
<?php


class Book{

const BR = '<br />';

    var $price;
    var $name;
    var $photo;
    var $dir = 'Images/';

    public function print_book(){

        echo "<div style='float: left; margin-right:400px; '>";
        echo "<font size='5px' > {$this->name}</font>".self::BR;
        echo "<img src='{$this->dir}{$this->photo}'>".self::BR; 
        echo '$'.$this->price;
        echo "<br />";
        echo"</div>";
        

    }

    public function set_book($name, $price, $photo){
        $this->name=$name;
        $this->price=$price;
        $this->photo=$photo;
    }
}

$book = new Book; // $book is the object type of book class

$book->name = ' Measure what matters';
$book->price = 17.99;
$book->photo = 'Booka.jpg';

$book->print_book();


$book->name = 'Criminal law';
$book->price = 27.90;
$book->photo = 'Bookb.png';

$book->print_book();



$book->set_book('The Tattooist', 55.90, 'Book4.jpg');
$book->print_book();
    ?>

<!-- ************************************************* -->

</body>
</html>