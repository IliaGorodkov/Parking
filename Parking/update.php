
<?php

require('db.php');

$id = $_POST['id'];
$Fio = $_POST['Fio'];
$gender = $_POST['gender'];
$number = $_POST['number'];
$Address = $_POST['Address'];
$car = $_POST['car'];
$brand = $_POST['brand'];
$Model = $_POST['Model'];
$Body_color = $_POST['Body_color'];
$State_number_RF = $_POST['State_number_RF'];

$brand2 = $_POST['brand2'];
$Model2 = $_POST['Model2'];
$Body_color2 = $_POST['Body_color2'];
$State_number_RF2 = $_POST['State_number_RF2'];

$brand3 = $article['brand3'];
$Model3 = $article['Model3'];
$Body_color3 = $article['Body_color3'];
$State_number_RF3 = $article['State_number_RF3'];

$status_flag = $_POST['0'];
$status_flag2 = $_POST['1'];

$status_flag3 = $_POST['F'];
$status_flag4 = $_POST['Sf'];
$status_flag5 = $_POST['3'];
$status_flag6 = $_POST['4'];










if (isset($_POST['Body_color'])) {
  $date = mysqli_query($mysqli, "UPDATE client SET brand   = '{$_POST["brand"]}', Model = '{$_POST["Model"]}', Body_color='{$_POST["Body_color"]}', State_number_RF ='{$_POST["State_number_RF"]}',Flag ='{$_POST["1"]}' WHERE id = $id ");
  if ($date) {
    echo '<p>Данные добавлены.</p>';
    echo "<a href='Client.php?id=$id'>Назад</a>";
    exit();
  } 
}


if (isset($_POST['Body_color2'])) {
  $date = mysqli_query($mysqli, "UPDATE client SET brand2   = '{$_POST["brand2"]}', Model2 = '{$_POST["Model2"]}', Body_color2='{$_POST["Body_color2"]}', State_number_RF2 ='{$_POST["State_number_RF2"]}',Flag2 ='{$_POST["1"]}' WHERE id = $id ");
  if ($date) {
    echo '<p>Данные добавлены.</p>';
    echo "<a href='Client.php?id=$id'>Назад</a>";
    exit();
  } 
}

if (isset($_POST['Body_color3'])) {
  $date = mysqli_query($mysqli, "UPDATE client SET brand3   = '{$_POST["brand3"]}', Model3 = '{$_POST["Model3"]}', Body_color3='{$_POST["Body_color3"]}', State_number_RF3 ='{$_POST["State_number_RF3"]}',Flag3 ='{$_POST["1"]}' WHERE id = $id ");

  if ($date) {
    echo '<p>Данные добавлены.</p>';
    echo "<a href='Client.php?id=$id'>Назад</a>";
    exit();
  } else {
    echo '<p>Произошла ошибка: ' . mysqli_error($mysqli) . '</p>';
  }
}



if (isset($_POST['1'])) {
  $date = mysqli_query($mysqli, "UPDATE client SET Flag  = '{$_POST["1"]}' WHERE id = $id ");
  if ($date){
    echo '<p>Машина Добавлена на Автостоянку.</p>';
    echo "<a href='Client.php?id=$id'>Назад</a>";
    
  }
}

if (isset($_POST['0'])) {
  $date = mysqli_query($mysqli, "UPDATE client SET Flag  = '{$_POST["0"]}' WHERE id = $id ");
  if ($date) {
    echo '<p>Машина Выведена из Автостоянки.</p>';
    echo "<a href='Client.php?id=$id'>Назад</a>";
  } 
}





if (isset($_POST['Sf'])) {
  $date = mysqli_query($mysqli, "UPDATE client SET Flag2  = '{$_POST["Sf"]}' WHERE id = $id ");
  if ($date){
    echo '<p>Машина Выведена из Автостоянки.</p>';
    echo "<a href='Client.php?id=$id'>Назад</a>";
    
  }
}

if (isset($_POST['F'])) {
  $date = mysqli_query($mysqli, "UPDATE client SET Flag2  = '{$_POST["F"]}' WHERE id = $id ");
  if ($date) {
    echo '<p>Машина Добавлена на Автостоянку.</p>';
    echo "<a href='Client.php?id=$id'>Назад</a>";
  } 
}



if (isset($_POST['3'])) {
  $date = mysqli_query($mysqli, "UPDATE client SET Flag3  = '{$_POST["3"]}' WHERE id = $id ");
  if ($date){
    echo '<p>Машина Добавлена на Автостоянку.</p>';
    echo "<a href='Client.php?id=$id'>Назад</a>";
    exit();
  }
}

if (isset($_POST['4'])) {
  $date = mysqli_query($mysqli, "UPDATE client SET Flag3  = '{$_POST["4"]}' WHERE id = $id ");
  if ($date) {
    echo '<p>Машина Выведена из Автостоянки.</p>';
    echo "<a href='Client.php?id=$id'>Назад</a>";
    exit();
  } 
}

