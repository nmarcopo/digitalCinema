<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome</title>

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
            <h1 class="display-3">Hello!</h1>
            <p class="lead">Welcome to whatever our project is called! Sign up or log in to start using our service.</p>
            <hr class="my-4">
            <p class="lead">
                <!-- <a class="btn btn-primary bg-dark" href="#" role="button">Log in</a> -->
                <button type="button" class="btn btn-primary bg-dark" data-toggle="modal" data-target="#signUpModal">Sign
                    Up</button>
                <button type="button" class="btn btn-primary bg-dark" data-toggle="modal" data-target="#logInModal">Log
                    In</button>
                <a href="home.php"><button type="button" class="btn btn-primary bg-dark">Go Home</button></a>
            </p>
        </div>
    </div>
    <div id="modalInsert"></div>


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
</body>

</html>