<?php
function connect(){
	$link = mysqli_connect('localhost','root','','lostfound');
	mysqli_set_charset($link,'utf8');
	return $link;
}
