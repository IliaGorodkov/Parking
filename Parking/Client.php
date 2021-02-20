<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title>Клиент</title>
</head>
<body>
<a href="http://localhost/Parking/index.php" style="margin:0 5%" >На Главную</a>

<h3 class="h3" style="margin-left:5%;">
    Клиент
</h2>
<form  action="del.php" method="POST">
<label for="id"></label><input type="hidden" id="id" name="id" value="<?=$_GET['id']?>">
<button style="margin-left:5%;"  type="submit">Удалить Клиента</button>
</form>



<?php
require('db.php');

$clientt = htmlspecialchars((int)$_GET['id']);


if(isset($_GET['id'])){
    $clientt = htmlspecialchars($_GET['id']);
    $qquery = mysqli_query($mysqli,"SELECT * FROM $db_table WHERE `id` = $clientt");
    $article = mysqli_fetch_assoc($qquery);

    $Fio=$article['Fio'];
    $gender=$article['gender'];
    $phone_number=$article['number'];
    $Address=$article['Address'];
    $car=$article['car'];


    $brand = $article['brand'];
    $Model = $article['Model'];
    $Body_color = $article['Body_color'];
    $State_number_RF = $article['State_number_RF'];

    $brand2 = $article['brand2'];
    $Model2 = $article['Model2'];
    $Body_color2 = $article['Body_color2'];
    $State_number_RF2 = $article['State_number_RF2'];
    

    $brand3 = $article['brand3'];
    $Model3 = $article['Model3'];
    $Body_color3 = $article['Body_color3'];
    $State_number_RF3 = $article['State_number_RF3'];
    
    $status_flag = $article['Flag'];
    $status_flag2 = $article['Flag2'];
    $status_flag3 = $article['Flag3'];



    echo "<table style='margin-left:5%;width: 30%;'>
    <tr><td>$Fio</td>
    <tr><td>$gender</td></tr>
    <tr><td>$phone_number</td></tr>
    <tr><td>$Address</td></tr>
    <tr><td>$car</td></tr></table>";




    echo"<h3 style='margin-left:5%;'>Автомобили</h3>";


}    
?>

<?if ($status_flag == 0): ?>
<?if ($status_flag != NULL):?>
<form  action="update.php" method="POST">
<input type="hidden" id="id" name="id" value="<?=$_GET['id']?>">
<input type="hidden" id="1" name="1" value = "1">
<button style="margin-left:32%; background-color: rgba(255, 0, 0, 0.884);"  type="submit"  title ="Машины нет на Стоянке">&#10006;</button>
</form>

<?endif;?>
<?endif;?>


<?if ($status_flag == 1): ?>
<?if ($status_flag != NULL):?>
<form  action="update.php" method="POST">
<input type="hidden" id="id" name="id" value="<?=$_GET['id']?>">
<input type="hidden" id="0" name="0" value = "0">
<button style="margin-left:32%; background-color: rgba(0, 255, 34, 0.938); "  type="submit"  title ="Машина на Стоянке">&#10004;</button>
</form>
<?endif;?>
<?endif;?>


<?php
   
   if($brand){
    echo "
    <table style='margin-left:5%;width: 30%;'>
    <tr><td>$brand</td>
    <tr><td>$Model</td></tr>
    <tr><td>$Body_color</td></tr>
    <tr><td>$State_number_RF</td></tr></table>";}

?>

<?if ($brand): ?>
<form  action="del.php" method="POST">
<label for="id"></label><input type="hidden" id="id" name="id" value="<?=$_GET['id']?>">
<input type="hidden" id="brand" name="brand" value = "brand">
<button style="margin-left:5%;"  type="submit">Удалить</button>
</form>
<?endif; ?>






<?if ($status_flag2 == 0): ?>
<?if ($status_flag2 != NULL):?>
<form  action="update.php" method="POST">
<input type="hidden" id="id" name="id" value="<?=$_GET['id']?>">
<input type="hidden" id="F" name="F" value = "1">
<button style="margin-left:32%; background-color: rgba(255, 0, 0, 0.884);"  type="submit"  title ="Машины нет на Стоянке">&#10006;</button>
</form>
<?endif;?>
<?endif;?>

<?if ($status_flag2 == 1): ?>
<?if ($status_flag2 != NULL):?>
<form  action="update.php" method="POST">
<input type="hidden" id="id" name="id" value="<?=$_GET['id']?>">
<input type="hidden" id="Sf" name="Sf" value = "0">
<button style="margin-left:32%; background-color: rgba(0, 255, 34, 0.938); "  type="submit"  title ="Машина на Стоянке">&#10004;</button>
</form>
<?endif;?>
<?endif;?>

<?php
   
   if($brand2 ){
    echo "
    <table style='margin-left:5%;width: 30%;'>
    <tr><td>$brand2</td>
    <tr><td>$Model2</td></tr>
    <tr><td>$Body_color2</td></tr>
    <tr><td>$State_number_RF2</td></tr></table>";}

?>




<?if ($brand2): ?>

<form  action="del.php" method="POST">
<label for="id"></label><input type="hidden" id="id" name="id" value="<?=$_GET['id']?>">
<input type="hidden" id="brand2" name="brand2" value = "brand2">
<button style="margin-left:5%;"  type="submit">Удалить</button>
</form><br>

<?endif; ?>

<?if ($status_flag3 == 0): ?>
<?if ($status_flag3 != NULL):?>
<form  action="update.php" method="POST">
<input type="hidden" id="id" name="id" value="<?=$_GET['id']?>">
<input type="hidden" id="3" name="3" value = "1">
<button style="margin-left:32%; background-color: rgba(255, 0, 0, 0.884);"  type="submit"  title ="Машины нет на Стоянке">&#10006;</button>
</form>
<?endif;?>
<?endif;?>

<?if ($status_flag3 == 1): ?>
<?if ($status_flag3 != NULL):?>
<form  action="update.php" method="POST">
<input type="hidden" id="id" name="id" value="<?=$_GET['id']?>">
<input type="hidden" id="4" name="4" value = "0">
<button style="margin-left:32%; background-color: rgba(0, 255, 34, 0.938); "  type="submit"  title ="Машина на Стоянке">&#10004;</button>
</form>
<?endif;?>
<?endif;?>


<?php   
    if($brand3 ){
    echo "<table style='margin-left:5%;width: 30%;'>
    <tr><td>$brand3</td>
    <tr><td>$Model3</td></tr>
    <tr><td>$Body_color3</td></tr>
    <tr><td>$State_number_RF3</td></tr></table>";
    }
        
?>






<?if ($brand3): ?>

<form  action="del.php" method="POST">
<label for="id"></label><input type="hidden" id="id" name="id" value="<?=$_GET['id']?>">
<input type="hidden" id="brand3" name="brand3" value = "brand3">
<button style="margin-left:5%;"  type="submit">Удалить</button>
</form>


<?endif; ?>


<?if ($brand): ?>



<?else:?>

<form  action="update.php" method="POST"  style="margin-left:5%;">
<table  style="width: 31%;">
<input type="hidden" id="1" name="1" value="1">
<label for="id"></label><input type="hidden" id="id" name="id" value="<?=$_GET['id']?>" ><br>
<tr><td><label for="brand">Марка</label><input type="text" id="brand" name="brand" required></td> <br><br>
<tr><td><label for="Model">Модель</label><input type="text" id="Model" name="Model" required></td></tr><br><br>
<tr><td><label for="Body_color">Цвет кузова</label> <input type="text" id="Body_color" name="Body_color" required></td></tr><br><br>
<tr><td><label for="State_number_RF">Гос.Номер РФ</label> <input type="text" id="State_number_RF" name="State_number_RF" required></td></tr>
</table>
<button style="margin-left:10%;"  type="submit">Добавить</button><br>
</form>

<?endif; ?>




<?if ($brand2): ?>
<?elseif ($brand):?>
<form  action="update.php" method="POST"  style="margin-left:5%;">
<table  style="width: 31%;">
<input type="hidden" id="1" name="1" value="1">
<label for="id"></label><input type="hidden" id="id" name="id" value="<?=$_GET['id']?>" ><br>
<tr><td><label for="brand2">Марка</label><input type="text" id="brand2" name="brand2" required></td> <br><br>
<tr><td><label for="Model2">Модель</label><input type="text" id="Model2" name="Model2" required></td></tr><br><br>
<tr><td><label for="Body_color2">Цвет кузова</label> <input type="text" id="Body_color2" name="Body_color2" required></td></tr><br><br>
<tr><td><label for="State_number_RF2">Гос.Номер РФ</label> <input type="text" id="State_number_RF2" name="State_number_RF2" required></td></tr>
</table>
<button style="margin-left:10%;"  type="submit">Добавить</button><br>
</form> 

<?endif; ?>



<?if ($brand && $brand2 and ! $brand3): ?>

<form  action="update.php" method="POST"  style="margin-left:5%;">
<table  style="width: 31%;">
<input type="hidden" id="1" name="1" value="1">
<label for="id"></label><input type="hidden" id="id" name="id" value="<?=$_GET['id']?>" ><br>
<tr><td><label for="brand3">Марка</label><input type="text" id="brand3" name="brand3" required></td> <br><br>
<tr><td><label for="Model3">Модель</label><input type="text" id="Model3" name="Model3" required></td></tr><br><br>
<tr><td><label for="Body_color3">Цвет кузова</label> <input type="text" id="Body_color3" name="Body_color3" required></td></tr><br><br>
<tr><td><label for="State_number_RF3">Гос.Номер РФ</label> <input type="text" id="State_number_RF3" name="State_number_RF3" required></td></tr>
</table>
<button style="margin-left:10%;"  type="submit">Добавить</button><br>

<?endif; ?>




</body>
</html>