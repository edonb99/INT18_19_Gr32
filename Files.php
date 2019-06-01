<?php

    $a = fopen("TextFile.txt", "r+") or die("Unable to open file!");


    while (!feof($a))
    {
        $line = fgets($a);
        echo $line . "<br />";
    }
    
    echo "<a href='books.php' style='margin-left: 700px; background-color: red; color: yellow; text-decoration: none; border: 0px solid lightgreen;'>Back to Books site</a>";
    
    $txt = "\n\n\nUpcoming supplies: 21/03/2019";
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
    return "This is a <i>" . $this -> type . "</i><br />";
  }
}
  
//Create an instance from the child class
$booksType1 = new BooksType();
  
//Set the class name
$booksType1 -> setType('NOVEL');
  
//Get the class name
echo $booksType1 -> njeFunksion();
echo "<br /><br /><br />"

?>




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

