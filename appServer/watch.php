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
                    <h3 class="card-header"><?php echo $_GET['vid']?></h3>
                    <video width="100%" height="300" controls>
                        <source src="
                        <?php
                            $vid = $_GET['vid'];
                            $array = [
                                "ip-172-31-26-8.ec2.internal:50075" => "100.26.36.129:50075",
                                "ip-172-31-31-46.ec2.internal:50075" => "34.203.213.13:50075",
                                "ip-172-31-31-55.ec2.internal:50075" => "34.224.89.168:50075",
                            ];

                            $array["ip-172-31-26-8.ec2.internal:50075"];
                            
                            // $command = escapeshellcmd("./php/download.py videos/$vid");
                            // $run = shell_exec($command);
                            // echo $run;
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