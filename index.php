<?php
$id =$_GET['id'];
require('vendor/autoload.php');

use YouTube\YouTubeDownloader;

$yt = new YouTubeDownloader();

$links = $yt->getDownloadLinks("https://www.youtube.com/watch?v=".$id);
print_r($links)

?>