

<h1>ARRAY</h1>


<?php 
$arr=array(10,20,30);
for($i=0;$i<count($arr);$i++)
	echo"<br>";
foreach($arr as $d)
echo $d.",";
$aar=array("1"=>"kolkata","2"=>"mumbai");
foreach($arr as $x=>$y)
echo $x."=>".$y."<br>";
$arr=array(1=>10,2=>20,3=>30);
if(is_array($arr))
	echo "this ia array"."<br>";
else
	echo"this is not array";
if(in_array(10,$arr))
	echo"10 is present in array"."<br>";
if(array_key_exists(1,$arr))
	echo"1 key exists in array"."<br>";
$a=array("a","b","c");
$b=array(10,20,30);
$c=array_combine($a,$b);
echo"array combin:"."<br>";
print_r($c);
echo"<br>";
echo"array merge:"."<BR>";
print_r(array_merge($a,$b));
echo"<br>";
echo"sum of array value:".array_sum($b)."<br>";
$arr=array(10,20,30,10);
print_r(array_count_values($arr));
echo"<br>";
array_push($arr,40);
echo"array push:";
print_r($arr);
echo"<br>";
array_pop($arr);
echo"array pop:";
print_r($arr);
echo"<br>";
?>


<h1>STRING</h1>


<?php

$skill="c,php,c++";
$ar=explode(",",$skill);
print_r($ar);
echo"<br>";
$skill=implode(":",$ar);
echo $skill."<br>";
$str="this is php language";
echo str_replace("php","java",$str)."<br>";
echo"sub string:".substr($str,0,12)."<br>";
echo"string length:".strlen($str)."<br>";
echo"string repeat:".str_repeat($str,2)."<br>";
if(stristr($str,"php"))
echo"php is present:"."<br>";
else
	echo"not present"."<br>";
$s="<b><p>somen</p></b>";
echo strip_tags($s)."<br>";
echo rtrim($str,"language")."<br>";
echo ltrim($str,"this")."<br>";
echo"string position:".strpos($str,"php")."<br>";
echo lcfirst($str)."<br>";
echo ucwords($str)."<br>";
$a=array(10,20,30);
sort($a);
echo("sorted array:");
print_r($a);
echo "<br>";
rsort($a);
echo"reverse sorted array:";
print_r($a);
echo"<br>";
$a=array(1=>10,2=>20);
asort($a);
echo"associative array value:";
print_r($a);
echo"<br>";
arsort($a);
print_r($a);
echo"<br>";
krsort($a);
echo"associative array key sort:";
print_r($a);
echo"<br>";
krsort($a);
echo "reverse associative array key";
print_r($a);
echo"<br>";
?>