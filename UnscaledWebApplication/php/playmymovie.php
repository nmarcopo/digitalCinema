<?php
$vid_url = isset($_GET['url'])?$_GET['url']:"";
if(empty($vid_url)){
    // trigger 404
    header("HTTP/1.0 404 Not Found");
} else {
    // Get Video

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $vid_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $out = curl_exec($ch);
    curl_close($ch);

    // Set header for mp4
    header('Content-type: video/mp4');
    header('Content-type: video/mpeg');
    header('Content-disposition: inline');
    header("Content-Transfer-Encoding:­ binary");
    header("Content-Length: ".filesize($out));

    // Pass video data
    echo $out;
}
exit();
?>