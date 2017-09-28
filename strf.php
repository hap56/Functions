<!DOCTYPE html>
<html>
<body>

<?php

  $obj = new main();
  $txt = "My name is Harsh Patel. It's my first php code. ";
  
  $obj->first($txt);
   $obj->second($txt);
    $obj->third($txt);
     $obj->fourth($txt);
      $obj->fifth($txt);
       $obj->sixth($txt);
        $obj->seventh($txt);
          $obj->eigth();
           $obj->nineth();
           $obj->tenth();






  
  
  

  class main {

    public function __construct() {

     }
// First function
    public function first($txt) {
      echo '<h1>print length of the string </h1>';
      $a=strlen($txt);
      echo "the lentgh of string is $a";
      echo '<hr>';
    }

// Seond function
    public function second($txt) 
    {
      echo '<h1>print numbers of words in the string </h1>';
    
      $count=str_word_count("$txt");
      echo "the word count of string is $count";
      echo '<hr>';
    }
    // third function
    public function third($txt) 
    {
      echo '<h1>print reverse string </h1>';
    
      echo strrev("$txt");
      
      echo '<hr>';
    }
    // fourth function
    public function fourth($txt) 
    {
      echo '<h1>replacing string </h1>';
    
     echo str_replace("first", "second", "$txt");
      
      echo '<hr>';
    }
    
    // fifth function
    public function fifth($txt) 
    {
      echo '<h1>replacing uppercase to lower case  </h1>';
    
     echo strtolower("$txt")."<br>";

      
      echo '<hr>';
    }
    
    // sixth function
    public function sixth($txt) 
    {
      echo '<h1>replacing uppercase to upper case  </h1>';
    
     echo strtoupper("$txt")."<br>";

      
      echo '<hr>';
    }
    
    // seventh function
    public function seventh($txt) 
    {
      echo '<h1>comparing string  </h1>';
    
     echo strcmp("$txt", "$txt")."<br>";
    
      echo '<hr>';
    }
    

    // eigth function
    public function eigth() 
    {
      echo '<h1>Lower case first letter in the string  </h1>';
    
     echo lcfirst("Hello_World")."<br>";
    
      echo '<hr>';
    }

    // nineth function
    public function nineth() 
    {
      echo '<h1>Upper case first letter in the string  </h1>';
    
     echo ucfirst("hello_World")."<br>";
    
      echo '<hr>';
    }

    // tenth function
    public function tenth() 
    {
    	
      echo '<h1> shuffling the string </h1>';
    
     echo str_shuffle("web");
     
    
      echo '<hr>';
    }
    
    public function __destruct() {

      

    }


  }



?>
 
</body>
</html>
