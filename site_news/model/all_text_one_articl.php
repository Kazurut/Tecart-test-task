<link rel="stylesheet" type="text/css" href="css/style.css">

<?php
$id = $_GET["id"];

require_once 'components/db_connect.php';

$stmt = $pdo->query("SELECT id, title, content FROM `news` Where `id` = $id");
while($row = $stmt->fetch()){
?>
	<div class="content_item">
	<div>
		<div class="header_news"><?php echo $row['title']; ?></div>
	</div>
	<div class="content_list" style="padding-bottom: 0px;">
		<div>
			<div class="content"><?php echo $row['content']; ?></div>
		</div>
	</div>
</div>
<?php
}
?>