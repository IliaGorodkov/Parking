<?php
require('db.php');

$id = $_POST['id'];



if(isset($_POST['brand'])){
    $ccl= mysqli_query($mysqli,"UPDATE client SET brand   = '', Model = '', Body_color='', State_number_RF ='',Flag = '' WHERE id = $id ");

    echo "Данные удалены <br>";
    echo"<a href='Client.php?id=$id'>Назад</a>";
    exit();

}




if(isset($_POST['brand2'])){
    $ccl= mysqli_query($mysqli,"UPDATE client SET brand2   = '', Model2 = '', Body_color2='', State_number_RF2 ='',Flag2 = '' WHERE id = $id ");

    echo "Данные удалены <br>";
    echo"<a href='Client.php?id=$id'>Назад</a>";
    exit();

}

if(isset($_POST['brand3'])){
    $ccl= mysqli_query($mysqli,"UPDATE client SET brand3   = '', Model3 = '', Body_color3='', State_number_RF3 ='',Flag3 = ''  WHERE id = $id ");
    echo "Данные удалены <br>";
    echo"<a href='Client.php?id=$id'>Назад</a>";
    exit();

}



if(isset($_POST['id'])){
    $qquerry = "DELETE FROM `client` WHERE `id` = '$id'";
    mysqli_query($mysqli,$qquerry) or die (mysqli_error($mysqli));

    echo "Клиент удален <br>";
    echo"<a href='index.php'>На Главную</a>";

}












?>