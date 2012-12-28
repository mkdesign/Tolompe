<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php

		function db_err(){

			$err_num = mysql_errno();
			$err_msg = mysql_error();
			die("<h3 style='color:red;'>Error $err_num: $err_msg</h3>");
		}

		$dbcon = @mysql_connect('localhost','root','') or db_err();

		@mysql_select_db('tolompe_tests',$dbcon) or db_err();

		$res = mysql_query("SELECT * FROM users") or db_err();

		while( $row = mysql_fetch_array($res,MYSQL_ASSOC)){

			echo "user $row[ID] : $row[Name]  $row[TELL] &lt; $row[Email] &gt; <br />";
		}

		@mysql_close($dbcon);
	?>
</body>
</html>	