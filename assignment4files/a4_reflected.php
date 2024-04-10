<?php
if(isset($_GET['msg'])) {
    echo $_GET['msg'];
} else {
    echo "No message provided!";
}

/*
displays whatever message is appended to the browser
ex. localhost:8000/a4_reflected.php?msg=hi
that shows hi
localhost:8000/a4_reflected.php
shows No message provided!
*/