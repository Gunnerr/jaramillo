<?php
	$link=mysql_connect("127.0.0.1","root","root");
	if($link){
		mysql_select_db("abarrote",$link);
	}
?>