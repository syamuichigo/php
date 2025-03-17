<?php
$name = htmlspecialchars($_POST["name"]);
print "私の名前は、" . $name . "<br/>";

$set = htmlspecialchars($_POST["set"]);
print "ご注文の商品は、" . $set . "<br/>";

$number = htmlspecialchars($_POST["number"]);
print "ご注文数は、" . $number . "<br/>";