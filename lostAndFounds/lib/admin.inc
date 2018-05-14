<?php
require_once '../../include.php';
function checkAdmin($sql){
	return fetchOne($sql);
}