<?php
	// Comprobamos si existe el documento
	$url = "file_upload/docs/";
	$url .= $_GET['nombre'];
	if (file_exists($url)) {
        unlink($url);
    }
?>
