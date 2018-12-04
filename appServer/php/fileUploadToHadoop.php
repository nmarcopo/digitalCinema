<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Standard header bar -->
    <script src="../js/main.js"></script>
</head>

<body>
    <!-- Add NavBar from other page -->
    <div id="navBarInsert"></div>
    <br><br>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-3">Uploaded!</h1>
            <p class="lead">Your video has uploaded to Hadoop!</p>
            <script>
                setTimeout(() => {
                    location.replace("../home.php");
                }, 3000);
            </script>
            <hr class="my-4">
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%"></div>
            </div>
        </div>
        <div id="modalInsert"></div>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap/bootstrap.min.js"></script>
</body>

</html>

<?php
$vid = $_GET['fileName'];
// $array = [
//     "ip-172-31-26-8.ec2.internal"=> "100.26.36.129",
// "ip-172-31-31-46.ec2.internal" => "34.203.213.13",
// "ip-172-31-31-55.ec2.internal" => "34.224.89.168",
// ];

// $url = "ec2-54-88-201-242.compute-1.amazonaws.com:50070/webhdfs/v1/videos/$vid?op=CREATE";

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_HEADER, true);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

// $result = curl_exec($ch);
// if (preg_match('~Location: (.*)~i', $result, $match)) {
// $location = trim($match[1]);
// }
// curl_close($ch);

// $cfile = curl_file_create("../videos/$vid");
// $post = array(
//     'testData' => $cfile
// );

// $badUrl = explode(":", $location);
// $badHost = ltrim($badUrl[1], "//");
// $goodHost = $array[$badHost];
// $goodURL = $goodHost . ":" . $badUrl[2] . ":" . $badUrl[3];
// $goodURL = ltrim($goodURL, "//");
// $goodURL = "http://" . $goodURL;
// $uploadURL = trim($goodURL);

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $uploadURL);
// curl_setopt($ch, CURLOPT_HEADER, true);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
// curl_setopt($ch, CURLOPT_POST,1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// // curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);

// $result = curl_exec($ch);
// // if (preg_match('~Location: (.*)~i', $result, $match)) {
// // $location = trim($match[1]);
// // }
// curl_close($ch);




// delete video after uploaded
// $command = escapeshellcmd("rm ../videos/$vid");
// $run = shell_exec($command);
?>