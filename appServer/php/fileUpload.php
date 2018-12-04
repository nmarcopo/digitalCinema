<?php
$target_dir = "../videos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Allow certain file formats
if($imageFileType != "ogv") {
    alert("Sorry, only OGV files are allowed.");
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 1e+7) {
    alert("Sorry, your file is too large.");
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    alert("Sorry, your file was not uploaded.");
    echo "<a href='../upload.php'>Go back to previous page</a>"
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
        alert("The file has been uploaded.");
        header("Location: fileUploadToHadoop.php");
    } else {
        if ($_FILES['uploaded']['error'] !== UPLOAD_ERR_OK) {
            die("Upload failed with error code " . $_FILES['fileToUpload']['error']);
        }
    }
}

function alert($msg) {
    echo "<script type='text/javascript'>
    alert('$msg');
    </script>";
}