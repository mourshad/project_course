<?php
if (isset($_GET['tittle'])) {
	$tittle = mysqli_real_escape_string($conn, $_GET['tittle']);
	$sql = "SELECT * FROM `web_design` WHERE tittle = '$tittle'";
}elseif(isset($_GET['id'])){
	$id = mysqli_real_escape_string($conn, $_GET['id']);
	$sql = "SELECT * FROM `web_design` WHERE id = '$id'";
}else{
	echo 'data not found';
}
// $tittle = mysqli_real_escape_string($conn, $_GET['tittle']);
// $sql = "SELECT * FROM `web_design` WHERE tittle = '$tittle'";
$retval = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($retval);

?>

<?php
while ( $row = mysqli_fetch_assoc($retval)) {
?>
	<div id="MainContents">
		<h1 class="TopPageHeadingWebColor">Learn: Web Design Course</h1>
		<hr>
		<?php echo "<h1 class='webColor'>{$row['tittle']}</h1>"; echo "{$row['description']}";
		$id = $row['id'];
		$previous = $id - 1;
		$next = $id + 1;
		echo "<p class='course_links'><a href='?page=web_design/asset/inside_psge&id=$previous'> Previous topic ||</a>";
		echo "<a href='?page=web_design/asset/inside_psge&id=$next'> Next topic </a></p>";
		?>
	</div>
<?php
}echo '</div></div>';