<?php
require_once './include.php';
$link = connect();
$type = $_GET['type'];
$sql_select = "select * from lost_found where  type=? ";
// $sql_select = "select * from user where  uname=? and pwd=?";
// echo sprintf("select * from user where  uname='%s' and pwd='%s'",$username,$password);
$stmt = mysqli_prepare($link,$sql_select);
// var_dump($stmt);

//mysqli_stmt_bind_param($stmt,'ss',$username,$password);
mysqli_stmt_bind_param($stmt,'s',$type);
mysqli_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
// var_dump($result);
// var_dump($username);
// var_dump($password);
// var_dump($result);
// $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
while ($row = mysqli_fetch_array($result)) {
	echo $row['uid'];echo "<br>";
	echo $row['type'];echo "<br>";
	echo $row['title'];echo "<br>";
	echo $row['content'];echo "<br>";
	echo "<br>";
}


die;
// var_dump($row);
// var_dump($row);
// die;
// echo "$password";
// echo "$username";
// echo "$row[pwd]";
// echo "$row[uname]";

echo "<table>";  
echo "<tr><td>部门名称</td><td>员工姓名</td><td>PC名称</td></tr>";  
while($row1 = mysqli_fetch_row($row)) echo "<tr><td>$row1[1]</td><td>$row1[2]</td><td>$row1[3]</td></tr>";   //显示数据  
echo "</table>";  
die;
// if($row){
// 	for ($i=0; $i < ; $i++) { 
// 		# code...
// 	}
// 	}

// }else{
// 	echo "<script>alert('您输入的用户名不存在');location='../login.php'</script>";
// 	exit;
// };