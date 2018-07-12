<?php
	$url = "file_upload/docs/";
	$url .= $_GET['nombre'];
	if (file_exists($url)) {
        unlink($url);
    }
?>
