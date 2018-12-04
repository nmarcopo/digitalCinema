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
$command = escapeshellcmd("../php/upload.py videos/$vid ../videos/$vid");
$run = shell_exec($command);

// delete video after uploaded
$command = escapeshellcmd("rm ../videos/$vid");
$run = shell_exec($command);
?>