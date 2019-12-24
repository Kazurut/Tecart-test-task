<link rel="stylesheet" type="text/css" href="css/style.css">
<?php include 'components/db_connect.php';

if(isset($page))
	$offset = ($page-1) * 5;
else
	$offset = 0;
$stmt = $pdo->query('SELECT id, idate, title, announce FROM `news` ORDER BY idate DESC LIMIT ' . $offset . ', 5');
while($row = $stmt->fetch()){
	$row['idate'] = gmdate("d.m.Y", $row['idate']);
	$id = $row['id'];
?>
<div class="content_item">
	<div>
		<div class="date"><?php echo $row['idate']; ?></div>
		<div class="title"><?php echo "<a href=http://news/news.php?id=$id>". $row['title'] . "</a>"; ?></div>
	</div>
	<div>
		<div class="announce"><?php echo $row['announce']; ?></div>
	</div>
</div>

<?php
}?>