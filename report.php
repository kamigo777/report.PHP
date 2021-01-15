<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Космические пришельцы похищали меня - сообщение о похищении</h2>

<?php
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$when_it_happend = $_POST['whenithappend'];
$how_long = $_POST['howlong'];
$how_many = $_POST['howmany'];
$alien_description = $_POST['aliendescription'];
$what_they_did = $_POST['whattheydid'];
$fang_spotted = $_POST['fangspotted'];
$other = $_POST['other'];
$email = $_POST['email'];

$dbc = mysqli_connect('localhost', 'root', 'root', 'aliendatabase')
    or die('Ошибка соединения с сервером');
$query = "INSERT INTO aliens_abduction (first_name, last_name, when_it_happend, how_long, " .
    " how_many, alien_description, what_they_did, fang_spotted, other, email) ".
    "VALUES ('$first_name', '$last_name', '$when_it_happend', '$how_long', '$how_many', ".
    "'$alien_description', '$what_they_did', '$fang_spotted', '$other', '$email')";

$result = mysqli_query($dbc, $query)
    or die('Ошибка при выполнении запроса к базе данных');
mysqli_close($dbc);

echo 'Спасибо за заполнение формы. <br>';
echo 'Вас зовут ' . $first_name .' '. $last_name . '<br>';
echo 'Вы были похищены ' . $when_it_happend . '<br>';
echo 'и отсутсвовали в течении ' . $how_long . '<br>';
echo 'Пришельцев было ' . $how_many . '<br>';
echo 'Опишите их:' . $alien_description . '<br>';
echo 'Они делали с вами ' . $what_they_did . '<br>';
echo  'Вы видели мою собаку Фрэнка?' . $fang_spotted . '<br>';
echo 'Вы также хотите добавить что ' . $other . '<br>';
echo 'Ваш адрес электронной почты:' . $email;

?>
p
</body>
</html>