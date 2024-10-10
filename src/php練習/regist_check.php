<?php
session_start();
?>
<?php
print ("登録済み<br>");
print ($_SESSION['syo']."<br>");
print ($_SESSION['card']);

print('<a href="./index.php">飛ぶ</a>');
?>