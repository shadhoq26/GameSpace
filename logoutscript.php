<?php
//when logout button is pressed you will be directed back to the index page.
session_start();
session_unset();
session_destroy();
header("Location: index.php");
exit();