<!doctype html>
<html  lang="ru">
<head>
<meta charset="utf-8">
<link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css" type="text/css"/>
<title>Список Клиентов</title>
</head>

<body>
<br >
<h3 class="h3">
    Все Клиенты
</h2>
<?php 
require('db.php');



if($mysqli == false){
	echo "Error!";
	echo mysqli_connect_errno();
	exit();
}


if (isset($_GET['page'])){
	$page = $_GET['page'];
} else {
	$page = 1;
}



$limit= (int) 4;
$number = ($page * $limit) - $limit;
$res_count = mysqli_query($mysqli, "SELECT COUNT(*) FROM  `$db_table`  ");
$row = mysqli_fetch_row($res_count);
$total = $row[0];
$str_pag = ceil($total / $limit);
$query = mysqli_query($mysqli, "SELECT * FROM $db_table ORDER BY id  LIMIT $number, $limit ");
?>

<?PHP 


if(mysqli_num_rows($query) == 0){
}else {



while($article = mysqli_fetch_assoc($query)){

if(isset($_GET['del'])){
$idd = htmlspecialchars( $_GET['del']);
$qquery = "DELETE FROM `client` WHERE `id` = '$idd'";
mysqli_query($mysqli,$qquery) or die (mysqli_error($mysqli));


if(empty($_GET['status'])){
    header('Location:allclient.php?status=1');
    exit;
}
}


    $idd=$article['id'];
    $Fio=$article['Fio'];
    $qgenderqw=$article['gender'];
    $phone_number=$article['number'];
    $Address=$article['Address'];
    $car=$article['car'];

    $brand = $article['brand'];
    $Model = $article['Model'];
    $Body_color = $article['Body_color'];
    $State_number_RF = $article['State_number_RF'];





    echo "<form action='' method=post>
    <table style='margin-left:30%;'>";
    echo"<tr >
    <td style='width: 30%;'>$Fio</td>
    <td style='width: 30%;'>$car</td>
    <td style='width: 30%;'>$State_number_RF</td>
    <td style='width: 30%;text-align: center;'>
    <a href='Client.php?id=$idd' title ='Редактировать Профиль'>&#10000;</a>
    </td>
    <td style='width: 30%;text-align: center;'><a title ='Удалить Клиента' href='?del=$idd'>
    &#9003;
    </a>
    </td>
    </tr>";
    
    echo "</table></form>";
    
   

}
}
    



?>

<br>
<footer style=margin-left:31%;>
<?php
    for ($i = 1; $i <= $str_pag; $i++){
       if($i == $_GET['page']){
        echo "<a class='a';  href=allclient.php?page=".$i.">".'<b>'.$i.'</b>'."</a> ";
        
       }else{
        echo "<a class='a';  href=allclient.php?page=".$i.">".$i."</a> ";
       }
    }
?>
<a  href="http://localhost/Parking/index.php" style="margin:0 5%" >На Главную</a>


</footer>
</body>
</html>










