<html>
<title>Show People in Table</title>
<body>
<?php
    
    $conn = mysql_connect('localhost','root','asadaf19'); // db 연결
	mysql_select_db('temp',$conn); // tbl 연결
    
    $num = $_POST["num"];
    $id = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    // 이전 html에서 post 형태로 넘겨받은 값들을 다시 변수에 할당시켜야 사용가능
    
	$sql = "insert into temptbl (num, id, pass, name)";
    $sql = $sql."values('$num', '$id', '$pass', '$name')";
    // 넘겨받은 값들을 테이블로 삽입하는 명령어를 변수로 지정

    $result = mysql_query($sql,$conn);

	$result = mysql_query("select * from temptbl where id='$id'",$conn);	
    //테이블 중 위에서 넘겨받은 id값과 같은 행의 데이터만으로 할당된 테이블

	echo "- saved user data -<br><br>";
	while ( $row = mysql_fetch_array($result) ) {
		echo "NUM: ".$row[num]."<br>";
		echo "ID: ".$row[id]."<br>";
		echo "PASSWORD: ".$row[pass]."<br>";
		echo "NAME: ".$row[name]."<br>";
	}
    
	mysql_free_result($result);
	mysql_close($conn); // 연결해제
?>
</body>
</html>
