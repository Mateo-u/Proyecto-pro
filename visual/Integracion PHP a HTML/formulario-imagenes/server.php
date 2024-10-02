<?php

echo "<pre>";
var_dump($_FILES);
echo "</pre>";

$video = $_FILES["image"]["name"]; 
echo $video; 

?>