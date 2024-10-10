<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$price = htmlspecialchars($_POST['price'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "あなたの名前は、" . $name . "<br>";
print "注文した商品は、" . $price . "<br>";
print "注文数は、" . $number . "<br>";