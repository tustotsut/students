<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download</title>
</head>
<body>
    <h2>download here</h2>
    <a href="download.php?file='../day11/destination/1.jpg" .file>click here</a>
</body>
</html>

<?php
if(!empty($_GET['file'])){
    $filename = basename($_GET['file']);
    $filepath = 'destination/' .$filename;
    if(!empty($filename) && file_exists($filepath)){
        //define headers
        header('Cache-control:public');
        header('Content-Description: File Transfer');
        // header('Content-Disposition: attachment; filename='$filename');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Content-Type: application/zip');
        header('Content-Transfer-Encoding: binary');
        readfile($filepath);
        exit;
    }else{
        echo 'this file not exist';
    }
}
?>