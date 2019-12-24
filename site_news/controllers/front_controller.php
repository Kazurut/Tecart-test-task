<?php 
$id = filter_input(INPUT_GET, 'id'); //проверяем, нет ли GET параметра id
$page = filter_input(INPUT_GET, 'page');

if (!$id || $page) // если GET параметра 'id' нет следовательно подключаем shablon1.php
{
	include 'view/shablon1.php';
}
else if($id) // если GET параметра id, есть - подключаем shablon2.php
{
	header("Location: http://news/view.php?id=".$id);
}