<html>
<title>Show People in Table</title>
<body>
<?php
    
    $conn = mysql_connect('localhost','root','asadaf19') or die("MySQL 서버 연결 에러");
    mysql_select_db('temp',$conn);
	$result = mysql_query("select * from temptbl",$conn);	
    
    echo "<center><h1>User List</h1>\n";
    
    $rows = mysql_num_rows($result);   

    echo "<table border=2 bgcolor=white>\n";
	echo "<tr>\n";
	echo "<td>index</td><td>id</td><td>password</td><td>name</td>\n";
	echo "</tr>\n";	
    
	$i = 0;
	while ( $i < $rows ) {
		echo "<tr>\n";
		echo "\t<td>" . mysql_result($result, $i, num) . "</td>\n";
		echo "\t<td>" . mysql_result($result, $i, id) . "</td>\n";
		echo "\t<td>" . mysql_result($result, $i, pass) . "</td>\n";
		echo "\t<td>" . mysql_result($result, $i, name) . "</td>\n";
		echo "</tr>\n";
		$i++;
	}
	echo "</table>\n";
    echo "</center>\n";
    
	mysql_free_result($result);
	mysql_close($conn);
?>
</body>
</html>
