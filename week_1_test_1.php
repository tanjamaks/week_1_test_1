<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h1 style="text-align:center">My first PHP </h1>
<?php
 echo "My first PHP! <br>";
 echo str_word_count("My first PHP!");
?>
<br>
<?php
 echo "Hello World <br>";
 echo strrev ("My name is Tanja Maksimovic");
?>
<br>
<?php
 echo str_replace ("World", "Tanja", "Hello World <br>");
?>
<h2 style="text-align:center">Arrays</h2>
<p> I speak the following languages: </p>
<?php
$languages = array("Serbian","English","German","Spanish","Italian");
rsort($languages);

$llength = count($languages);
echo "<br>";
for($x=0; $x< $llength; $x++) {
    echo $languages[$x];
    echo "<br>";
}
 echo $llength;
?>
<br>

<h2 style="text-align:center">Variables</h2>

<?php
$x = 7;
$y = 8.5;
echo $x * $y;
?>
<br>
<?php
if($x<$y) {
    echo $y - $x;
} else {
    echo $x + $y;
}
?>
<br>
<?php 
$dan = date("D");

if($dan == "Mon") {
    echo "4 more days until weekend";
} elseif ($dan == "Tue") {
    echo "3 more days untill weekend";
} elseif ($dan == "Wed") {
    echo "2 more days untill weekend";
} elseif ($dan == "Thu") {
    echo "1 more day untill weekend";
} else {
    "Have a nice weekend!";
}
?>

</body>
</html>
