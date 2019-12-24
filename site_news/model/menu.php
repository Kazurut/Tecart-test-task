<?php 
include 'components/db_connect.php';
$stmt = $pdo->query("SELECT COUNT(id) as count FROM news");
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$row=$stmt->fetch();
$count = $row['count'];
$count=ceil($count/5);
?>

<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
if(isset($page))
	$page_active = $page;
else
	$page_active = 1;
for($page=1;$page <= $count; $page++){
	if($page==$page_active)
		$class_a = 'menu_button_active';
	else
		$class_a = 'menu_button';
	?>
	<div class="title"><?php echo "<a class='$class_a' href=http://news/news.php?page=$page>". $page . "</a>"; ?></div>
	<?php
}
?>