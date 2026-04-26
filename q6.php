<?php
//a
$name='mayank';
echo'hello $name';
echo'<br>';
echo"hello $name";

//b
echo"<br>";
echo$name.' good morning<br>';


$str = "  Hello World  ";

//e
//strlen()
echo "Length: " . strlen($str);
echo "<br>";

// strtolower()
echo "Lowercase: " . strtolower($str);
echo "<br>";

// strtoupper()
echo "Uppercase: " . strtoupper($str);
echo "<br>";

// trim()
echo "Trimmed: '" . trim($str) . "'";
echo "<br>";

// substr()
echo "Substring (0,5): " . substr($str, 0, 5);
echo "<br>";

// search for substring
$pos = strpos($str, "World");

if($pos==true){
    echo "Substring found at position: " . $pos;
} else {
    echo "Substring not found";
}
echo "<br>";

//string replace
$modified_string=str_replace("World","Mumbai",$str);
echo$modified_string;
?> 