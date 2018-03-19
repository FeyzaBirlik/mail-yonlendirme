<?php


if(strpos($_POST["email"], 'hotmail.com') !== false) header("Location: http://oys.deu.edu.tr");

else if(strpos($_POST["email"], 'gmail.com') !== false)header("Location: http://oys2.deu.edu.tr");

?>
