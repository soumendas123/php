<?php
echo "hello somen"."<br>";
echo "this is my first page"."<br>";
$a=11;
$$a=20;
echo $$a."<br>";
if($a%2==0)
	echo "number is even"."<br>";
else
	echo "number is odd"."<br>";
$b=5;
while($b>0)
{
	echo $b."<br>";
	$b--;
}
$gender="male";
switch ($gender)
{
	case"male";
	echo"male"."<br>";
	break;
	case"female";
	echo"female";
	break;
	default:
	echo"default";
	break;
	
}

function show($name="amit")
{
	echo $name."<br>";
}
	show("joy");
	show("shame");
	show();

	/*function add(...$a)
	{
		$sum=0;
		foreach($a as $c)
    
		$sum=$sum+$c;
	
	echo $sum."<br>";
	}
	add(1,2);
	add(1,2,3,4,5,6,7,8,9,);
	*/
	$x=10;
	$y=20;
	function sum()
	{
		global $x,$y;
		$y=$y+$x;	
	}
	sum();
	echo $y."<br>";
	function display()
	{
		static $x=10;
		echo $x."<br>";
		$x=$x+10;
	}
	display();
	display();
	$arr=array(10,20,30);
	print_r($arr);
	echo "<br>";
	echo $arr[1]."<br>";
	
	$arr=array("a"=>"kolkata","b"=>"mumbai","c"=>"bengalore");
	print_r($arr);
	
	echo $arr["a"]."<br>";
	$a=array(10,20,30);
	$b=array("a"=>"kolkata","b"=>"mumbai","c"=>"bengalore");
	$c=array("d"=>$a,"e"=>$b);
	print_r($c);
	?>
	<br>
even and odd
<br>
<br>	
	<?php
	$r=11;
	if($r%2==0)
	{
		echo "even";
	}
	else
	{
		echo "odd";
	}
	?>
	
	<br>
	prime number:
	
	<?php
	$r=7;
	for($i=1;$i>=10;$i++)
	{
	 $x=$r*$i;
	 echo $x;
	}
	?>
	
	
	
	
	armstrong number:
	<?php
	$r=407;
	$total=0;
	$num=$r;
	while($r!=0)
	{
		$rem=$r%10;
		$total=$total+$rem*$rem*$rem;
		$r=$r/10;
	}
	if($num==$total)
	{
		echo"armstrong number";
	}
	else
	{
		echo "not a armstrong number";
	}
	?>
	
	palindrom number :
	5225
	<br>
	<?php
	$r=5225;
	$sum=0;
	$r=$num;
	while($r>0)
	{
	$rem=$r%10;
	$sum=$sum*10+$rem;
	$r=$r/10;	
	}
	if($num==$sum)
	{
		echo "palindrom number";
	}
	else
	{
		echo "not a palindrom";
	}
	?>
	fibonacci series
	0 1 1 3 5 8 13 21 34 55 89
	<br>
	<?php
	$n1=0;
	$n2=1;
	$num=0;
	echo $n1.$n2;
	while($num<10)
	{
		$n3=$n2+$n1;
		echo $n3;
		$n1=$n2;
		$n2=$n3;
		$num+=1;
		
	}
	?>
reverse number:

12345=54321

<br>
	<?php
	$r=12345;
	$sum=0;
	while($r>1)
	{
	$rem=$r%10;
    $sum=$sum*10+$rem;
   $r=$r/10;
 	}
	echo $sum;
	?>
	
	swapping two number:
	<br>
	<br>
	
<?php
$a=45;
$b=50;
$c=$a;
$a=$b;
$b=$c;
echo "after swapping";
echo $a.$b;		
?>

<?php
$s=4961;
$sum=0;
while($s>3)
{
	$rem=$s%10;
	$sum=$sum.$rem;
	$rem;
	$s=$s/10;	
}
echo  $sum;
?>
<br>
<?php


$s=19;
echo --$s;
echo ++$s+2+4;


?>
<br>
<?php

echo rand (1,119);
?>

<br>
<?php 
$r=array(1,2,3,4,5,67,67);
echo $r['5'];

?>
<br>
<?php
//echo 1;=12;
$sum=1;
for($i=1;$i>4;$i++)
{
	$sum=$sum+$i*$i*$i;
	$i++;
}
echo $sum;	
?>



<?php
session_start();

?>
<html>
<body>
<?php
$_SESSION["favcolor"]="yellow";

print_r($_SESSION);

?>

</body>
</html>
<br>
<?php
$r=array(1,2,3,4,5);
foreach($r as $t)
{
	$e=$t*2;
	echo $e;
}
echo "somen";

?>
<br>
<br>

<?php

$sam="man";
switch($sam)
{
	case "male";
	echo "sham";
	case "ram";
	echo "jodu";
	case "man";
	echo "somen";
	break;
}
?>
<?php
global $f,$r;
$f=1;
$r=3;
function blok($f=1)
{
	echo "$f";
}

blok();

?>

<?php
$r=5;
$factorial=1;
for($s=5;$s>=1;$s--)
{
	$factorial*=$s;
	
}
echo $factorial;
?>

<br>
factorial 
	<?php
	$r=5;
	$factorial=1;
	for($x=5;$x>=1;$x--)
	{
		$factorial*=$x;
	}
	echo $factorial;
	?>



	</body>
</html>
	
	
 <?php
//session_start();

?>
<html>
<body>
<?php
$_SESSION["favcolor"]="yellow";

print_r($_SESSION);

?>

</body>
</html>	<br>
<br>
	
	<?php
	$i=10;
	for($i=10;$i>0;$i-2)
	{
		
		echo $i;
		
		$i=$i-1;
		echo '<br>';
	}
	
	
	?>
	
<?php
for($i=0;$i<11;$i++);;;
{
for($j=0;$j<$i;$j++);
{
echo $j+1;

}
echo "<br>";
}	
?>	

	<?php 
	
	function add($a,$b)
	{
	$result=$a+$b;
 return $result;	
	}
	
	echo add(7,9);

	?>
<?php 
$s=array(1,5,6,7,2,9,3);
asort($s);
print_r($s);
?>
<br>

<?php 
$s="hello world";
print_r(explode(" ",$s));
//print_r($s);
?>
<br>
<?php 
$r="hello";\
print_r(md5($r));
?>
<?php
$s="hello world";
echo(rtrim($s,"hello"));
?>
<?php
echo str_repeat(".",12);
?>
<?php
$s="hello world world"
//echo str_replace($s);
?>
<html>
<head>

</head>
<body>
<h1 style="color:red">somen</h1> 
</body>
</html>



<br>
<?php
for($i=1;$i<11;$i++)
{
	
	echo $i;
	$i=$i+1;
}
?>
<br>
<br>
<?php
for($r=1;$r<=5;$r++)
{
	for($p=5-$r;$p>=1;$p--)
	{
		echo "^";
	}
	for($t=1;$t<=$r;$t++)
	{
		echo "*".'   ';
	}

echo "<br>";
}	
?>
<br>
<br>
<?php
$value=1;
for($r=1;$r<=5;$r++)
{
	
	for($t=1;$t<=$r;$t++)
	
		{
		
		echo $value.' '; 
		$value++;
	}
	
	for($p=5-$r;$p>=1;$p--)
	{
		echo $p.' ';
	}

echo "<br>";
}	
?>

<?php 
for($r=1;$r<=5;$r++)
{
	for($p=5-$r;$p>=1;$p--)
	{
		echo "*";
	
	}
	
	for($t=1;$t<=$r;$t++)
	{
		echo "*".'   ';
	}

echo "<br>";
}
?>
<?php

for($i=0;$i<=6;$i++)
{
for($k=6;$k>=$i;$k--)
{
echo "  ";
}
for($j=1;$j<=$i;$j++)
{
echo "*  ";
}
echo "<br>";
}
for($i=5;$i>=1;$i--)
{
for($k=6;$k>=$i;$k--)
{
echo "  ";
}
for($j=1;$j<=$i;$j++)
{
echo "*  ";
}
echo "<br>";
}

?>

<p>somen</p>

