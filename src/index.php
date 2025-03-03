<?php
$test = array(
    "test" => array(
        1 => "apple",
        2 => "banana",
        3 => "cherry"
    ),
    "test2" => "果物",
);
?>
<pre>
<?php var_dump($test); ?>
</pre>

<?php
$dsn = 'mysql:host=mysql;dbname=db';
$username = 'user';
$password = 'pass';

try {
    // データベース接続を確立
    $dbh = new PDO($dsn, $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "データベースに接続しました！";

    // クエリの実行例
    $stmt = $dbh->query("SELECT * FROM test");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['name'];
    }
} catch (PDOException $e) {
    echo "データベース接続エラー: " . $e->getMessage();
}
