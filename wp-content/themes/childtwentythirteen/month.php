<!DOCTYPE html>
<html>
<head>
	<title> The month </title>
</head>
<body>
<?php
$month = date('F', time()); ?>

<p>
<?php
if ($month == August;) {
	echo "The month is $month";
}

else {
	echo "The month is not August";
}

?>

</p>
<?php
if ("Home") {
	get_header('custom1');
}
elseif ("About") {
	get_header ('custom2');

}
?>
</body>
</html>
