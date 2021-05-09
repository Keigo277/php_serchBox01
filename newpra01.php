<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
<tr><th id="">商品番号</th><th id="">商品名</th><th id="">商品価格</th></tr>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=shop;charset=utf8','root','zquickF6');
$sql = $pdo->prepare('select * from product where name like?');
$sql->execute(['%'.$_REQUEST['waon'].'%']);
foreach($sql as $pad){
    echo '<tr>';
    echo '<td>', $pad['id'], '</td>';
    echo '<td>', $pad['name'],'</td>';
    echo '<td>', $pad['price'],'</td>';
    echo '</tr>';
}
?>
</table>
</body>
</html>