<?php

$title = '<h1>App php1 index.php</h1>';

if (null !== $_GET['name']) {
	echo $title . '<br/>';
	echo sprintf('<h1>Hello %s</h1>', $_GET['name']);
} else {
	echo $title;
}

?>