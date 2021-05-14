<?php

# set password!
$password = "";

if ($password == "") {
	die('no password set');
}

if ($_POST['pwd'] === $password) {
	$file = file_get_contents('./flags.tsfs');
}else{
	header('Location: index.php');
	exit;
}

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>TotalSecureFlagStorage</h2>

<?php

$flags = explode("\n", $file);
foreach ($flags as $f) {
	print("<div class=\"container\" style=\"background-color:#f1f1f1\">\n".$f."\n</div>");
}
?>

</body>
</html>

