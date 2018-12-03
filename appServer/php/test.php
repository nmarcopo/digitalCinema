<?php
// $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, "ec2-54-88-201-242.compute-1.amazonaws.com:50070/webhdfs/v1/". $_GET['vid'] ."?op=OPEN");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $result = curl_exec($ch);
// if (curl_errno($ch)) {
//     echo 'Error:' . curl_error($ch);
// }
// curl_close ($ch);

// echo $result;

$command = escapeshellcmd('./master.py rubik320.ogv');
$run = shell_exec($command);
echo $run;
?>