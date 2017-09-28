<?php

  $obj = new main();
  $code = array(Html,Php,Css,Java,Sql);
    $obj->printArray($code);
   $obj->count($code);
    $obj->loop($code);
    $obj->asscarray();
    $obj->asscloop();
    $obj->sortasc();
    $obj->sortdesc();
    $obj->range();
    $obj->pad();
    $obj->merge();
  
  
  class main {

    public function __construct() {

    }

    
//first
    public function printArray($code) {
      echo '<h1>Printing an array</h1>';
      print_r($code);
      echo '<hr>';
    }

//second
    public function count($code){
      echo '<h1>Count the length of an array</h1>';
    echo count($code);
     echo '<hr>';
    }

//third
    public function loop($code){
      echo '<h1>Looping an indexed array</h1>';
      $arrlength = count($code);
    {
      for($x = 0; $x < $arrlength; $x++) {
    echo $code[$x];
    echo "<br>";
      }
     echo '<hr>';
    }
    }
//fourth
    public function asscarray(){
      echo '<h1>Associative array</h1>';
      $topics = array("line"=>"48", "github"=>"49", "php"=>"50");
    
    echo "its my "  .$topics['line']. " line of the code ";
     echo '<hr>';
    }
//fifth
    public function asscloop(){
      echo '<h1>Associative  array looping</h1>';
       $names = array("James"=>"10", "Rudy"=>"12", "Kristen"=>"14");
      
    
foreach($names as $a => $a_value) {
    echo "name=" . $a . ", age=" . $a_value. " years ";
    echo "<br>";
  }

     echo '<hr>';

  }

//sixth
    public function sortasc(){
    echo '<h1>Ascending sorting of an numbered array</h1>';

    $num = array(1, 5 , 20, 3, 7);
     sort($num);

$length = count($num);
for($x = 0; $x < $length; $x++)
 {
    echo $num[$x];
    echo "<br>";
 }
}

//seventh 
 public function sortdesc(){
    echo '<h1>Descending sorting of an array</h1>';
     $numb = array(1, 5 , 20, 3, 7);
   rsort($numb);

$lengtha = count($numb);
{
for($a = 0; $a < $lengtha; $a++)
 {
    echo $numb[$a];
    echo "<br>";
 }
 echo '<hr>';
 }     
 }

 //eighth
 public function range(){
  echo '<h1>Changing range of array</h1>';
$number = range(0,5);
print_r($number);
echo "<br>";
$number = range(2,5,1);
print_r($number);
echo "<br>";
}

//nineth
public function pad(){
  echo '<h1>Padding extra indexed space of array</h1>';
  $abc = array(1,2,3,4,5);

  print_r($abc);
  echo '<br>';
  $pad = array_pad($abc, 7, "nothing");
print_r($pad);
echo "<br>";
}
//tenth
public function merge()
{
  echo '<h1>Merging of an array</h1>';
$one=range(0,4);
$two=range(7,8);
$merge =array_merge($one,$two);
print_r($merge);
echo "<br>";
}
    public function __destruct() {



    }


  }



?>
