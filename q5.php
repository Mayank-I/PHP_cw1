<?php
//a
echo"//index array";
$index_array=['mayank','manish','ankush','ajay','ashish'];
for($i=0;$i<count($index_array);$i++){
    echo $index_array[$i] . "<br>";
}

//b
echo"<br> //associative array <br>";
$assoc_array=['apple'=>'red','mango'=>'yellow','orange'=>'orange','guava'=>'green'];
foreach($assoc_array as $fruit=>$color){
    echo"fruit:",$fruit." color:",$color."<br>";
}

//c
echo"<br> //looping with for and foreach <br>";
echo"<br> //for <br>";
$a=['mayank','manish','ankush','ajay','ashish'];
for($i=0;$i<count($a);$i++){
    echo $a[$i] . "<br>";
}
echo"<br> //foreach <br>";
$a=['mayank','manish','ankush','ajay','ashish'];
foreach($a as $name){
    echo$name."<br>";
}

echo"<br> //foreach key and value <br>";
$a=['mayank','manish','ankush','ajay','ashish'];
foreach($a as $index=>$name){
    echo$index.":",$name."<br>";
}

//d
echo"array library functions <br>";
//array_push
echo"<br>push <br>";
$a=['mayank','manish','ankush','ajay','ashish'];
array_push($a,'bheem');
foreach($a as $name){
    echo$name.",";
}

//array_pop
echo"<br><br>pop<br>";
array_pop($a);
foreach($a as $name){
    echo$name.",";
}
//array_merge
echo"<br><br>merge<br>";
$b=['rakesh','suresh'];
$c=array_merge($a,$b);
foreach($c as $name){
    echo$name.",";
}

//array_slice
echo"<br><br>slice<br>";
$s=array_slice($a,1,2);
foreach($s as $name){
    echo$name.",";
}

//array_keys
echo"<br><br>keys<br>";
$s=array_keys($a);
foreach($s as $name){
    echo$name.",";
}

?>