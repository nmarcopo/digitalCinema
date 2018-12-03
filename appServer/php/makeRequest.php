<?php
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://54.88.201.242:50070/webhdfs/v1/?op=LISTSTATUS");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

// $result = "'" . $result . "'";
$jsonStuff = json_decode($result, true);
$jsonStuff = $jsonStuff['FileStatuses']['FileStatus'];

foreach($jsonStuff as $file){
    echo '<a href="watch.php?vid='. $file['pathSuffix'] .'" class="list-group-item list-group-item-action active videoListItem">
            '. $file['pathSuffix'] .'
        </a>';
}

curl_close ($ch);
?>