<?php
$url = 'https://dog.ceo/api/breeds/image/random';
$obj = json_decode(file_get_contents($url), true);
$image = $obj['message'];
?>