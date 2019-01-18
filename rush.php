<?php 
echo "somen das";

$a=10;
$$a=20;
echo $$a."<br>";
if($a%2==0)
	echo "number is even";
else 
	echo "number is odd";



$b=5;
while($b>0)
{
	echo $b.",";
	$b--;
}
$gender="male";
switch ($gender)
{
	case "male";
	echo "male";
	break;
	case "female";
	echo "female";
	break;
	default :
	echo "default";
	break;
}
	function show($name="amit")
	{
		echo $name."<br>";
	}
	show("ankit");
	show("joy");
	show();

	?>