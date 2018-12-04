<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Standard header bar -->
    <script src="js/main.js"></script>
</head>

<body>
    <!-- Add NavBar from other page -->
    <div id="navBarInsert"></div>
    <br><br>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-3">Watch</h1>
            <p class="lead">A video will show up here.</p>
            <hr class="my-4">
            <div class="text-center justify-content-center d-flex">
                <div class="card mb-3">
                    <h3 class="card-header">
                        <?php echo $_GET['vid']?>
                    </h3>
                    <video width="100%" height="300" controls>
                        <source src="
                        <?php
                            $vid = $_GET['vid'];
                            $array = [
                                "ip-172-31-26-8.ec2.internal"=> "100.26.36.129",
                            "ip-172-31-31-46.ec2.internal" => "34.203.213.13",
                            "ip-172-31-31-55.ec2.internal" => "34.224.89.168",
                            ];

                            $url = "ec2-54-88-201-242.compute-1.amazonaws.com:50070/webhdfs/v1/videos/doah.ogv?op=OPEN";
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_HEADER, true);
                            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            $result = curl_exec($ch);
                            if (preg_match('~Location: (.*)~i', $result, $match)) {
                            $location = trim($match[1]);
                            }

                            $badUrl = explode(":", $location);
                            $badHost = ltrim($badUrl[1], "//");
                            $goodHost = $array[$badHost];
                            $goodURL = $goodHost . ":" . $badUrl[2] . ":" . $badUrl[3];
                            $goodURL = ltrim($goodURL, "//");
                            $goodURL = "http://" . $goodURL;
                            echo trim($goodURL);
                        ?>
                        " type='video/ogg; codecs="theora, vorbis"' preload="none">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <div id="modalInsert"></div>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap/bootstrap.min.js"></script>
</body>

</html>