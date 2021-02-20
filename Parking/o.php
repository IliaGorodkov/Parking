
<?php
require('db.php');


$Fio = mysqli_real_escape_string($mysqli, $_POST['Fio']);
$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
$number = mysqli_real_escape_string($mysqli, $_POST['number']);
$Address = mysqli_real_escape_string($mysqli, $_POST['Address']);
$car = mysqli_real_escape_string($mysqli, $_POST['car']);

$brand = mysqli_real_escape_string($mysqli, $_POST['brand']);
$Model = mysqli_real_escape_string($mysqli, $_POST['Model']);
$Body_color = mysqli_real_escape_string($mysqli, $_POST['Body_color']);
$State_number_RF = mysqli_real_escape_string($mysqli, $_POST['State_number_RF']);

$status_flag = mysqli_real_escape_string($mysqli, $_POST['1']);


$search_num = mysqli_query($mysqli, "SELECT 'number' FROM $db_table WHERE  'number'= $number");
$search_RF = mysqli_query($mysqli, "SELECT 'State_number_RF' FROM $db_table WHERE  'State_number_RF'= $State_number_RF");


if ($number == $search_num) {
    echo "Этот номер уже Занят <br>";
    echo "<a href='Create_client.php'>Назад</a>";
    exit();
}



if ($State_number_RF == $search_RF) {
    echo "Этот номер уже зарегестрирован";
    echo "<a href='Create_client.php'>Назад</a>";
    exit();
}

if (mb_strlen($Fio) < 3 || mb_strlen($Fio) > 30) {
    echo 'Недопустимая Длинна ФИО.
    <a href="Create_client.php">Назад</a>';
    exit();
}




if (isset($_POST["Fio"])) {
    $sql = mysqli_query($mysqli, "REPLACE INTO`client`(`Fio` ,`gender`,`number`,`Address`,`car`,`Flag`,`brand`,`Model`,`Body_color`,`State_number_RF`) VALUES ('{$_POST['Fio']}','{$_POST["gender"]}','{$_POST["number"]}','{$_POST["Address"]}','{$_POST["car"]}','{$_POST["1"]}','{$_POST["brand"]}','{$_POST["Model"]}','{$_POST["Body_color"]}','{$_POST["State_number_RF"]}')");
}
if ($sql) {
    echo '<p>Клиент Добавлен.</p>';
    echo "<a href='index.php'>На Главную</a>";
} else {
    echo '<p>Произошла ошибка: ' . mysqli_error($mysqli) . '</p>';
}




?>

