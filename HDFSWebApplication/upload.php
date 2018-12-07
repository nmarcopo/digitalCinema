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
            <h1 class="display-3">Upload</h1>
            <p class="lead">Upload your own .ogv videos.</p>
            <hr class="my-4">
            <div class="text-center justify-content-center d-flex">
                <!-- Upload Profile Pic -->
                <li class="list-group-item" style="border:solid; border-width: 1px">
                    <form action="php/fileUpload.php" method="post" enctype="multipart/form-data">
                        <label for="fileToUpload">Select .OGV Video to Upload:</label><br>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="fileToUpload" id="fileToUpload">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div> <br>
                        <input type="submit" class="btn btn-primary" value="Upload Video" name="submit">
                    </form>
                    <script type="application/javascript">
                        $('input[type="file"]').change(function (e) {
                            var fileName = e.target.files[0].name;
                            $('.custom-file-label').html(fileName);
                        });
                    </script>
                </li>
            </div>
        </div>
        <div id="modalInsert"></div>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap/bootstrap.min.js"></script>
</body>

</html>