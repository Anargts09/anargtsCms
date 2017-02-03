<?php
	$page_title = 'お問い合わせ・kenzCms';

	if($_SERVER["REQUEST_METHOD"] == "GET") {
		$request = 'GET';
	}

	if($_SERVER["REQUEST_METHOD"] == "POST") {

		$request = 'POST';
	}

?>