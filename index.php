<?php
// error_reporting(E_ERROR | E_PARSE);
// mysqli_report(MYSQLI_REPORT_OFF);
/* @ is used to suppress warnings */


//require_once('inc/function.php');

require_once('asset/sidebar.php');
require_once('db_conect.php');
//
//$conn = OpenCon();
// check conection======
// if ($conn->connect_error) {
//   die("Connection failed: "
//       . $conn->connect_error);
// }else{
// 	echo "Connected successfully";
// }

if (isset($_GET['page'])) {
		if ($_GET['page']) {
		$page = $_GET['page'];
		$display = $page.'.php';
		include_once($display);
	}else {

		echo 'page not found';
	}
}else {
	header("Location: index.php?page=asset/home");
}
require_once('asset/footer.php');
mysqli_close($conn);