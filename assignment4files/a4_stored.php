<?php
$filename = 'a4_toread.txt';
echo phpinfo();
if (file_exists($filename)) {
    $file = fopen($filename, "r");
    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }
    fclose($file);
} else {
    echo "File does not exist.";
}

/*
to run, this URL (with port set to the one you have running the server) must be put in browser
localhost:8000/a4_stored.php
*/