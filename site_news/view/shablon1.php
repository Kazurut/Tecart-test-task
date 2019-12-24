<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Новости</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="header">Новости</div>
		<div class="content_list">
			<?php include 'model/articls_preview.php'; ?>
		</div>

		<div class="footer">Страницы:</div>
		<div class="footer_menu">
			<?php include 'model/menu.php';?>
		</div>
	</div>
</body>
</html>