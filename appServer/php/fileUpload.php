<?php
$target_dir = "../videos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Allow certain file formats
// if($imageFileType != "ogv") {
//     alert("Sorry, only OGV files are allowed.");
//     $uploadOk = 0;
// }

set_time_limit(0);
ini_set("memory_limit","2048M");
ini_set('upload_max_filesize', '300M');
ini_set('post_max_size', '350M');
ini_set('max_input_time', 0);
ini_set('max_execution_time', 300);

// Check file size
// if ($_FILES["fileToUpload"]["size"] > 1e+7) {
//     alert("Sorry, your file is too large.");
//     $uploadOk = 0;
// }

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    alert("Sorry, your file was not uploaded.");
    echo "<a href='../upload.php'>Go back to previous page</a>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        header("Location: fileUploadToHadoop.php?fileName=" . $_FILES["fileToUpload"]["name"]);
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