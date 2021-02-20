<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание клиента</title>
</head>

<body>
<a href="index.php">
Назад
</a>

    <h2 style="margin-left:40%;">Добавить пользователья</h2>
    <form action="o.php" method="POST" style="margin-left:40%;" required>
        <label for="Fio">ФИО</label> <input type="text" id="Fio" name="Fio" style="width: 23%;" required> <br><br>
        <label for="gender">Пол</label> <input type="text" id="gender" name="gender" style="width: 24%;" required><br><br>
        <label for="number">Номер</label> <input type="text" id="number" name="number" style="width: 22%;" required><br><br>
        <label for="Address">Адрес</label> <input type="text" id="Address" name="Address" style="width: 22%;" required><br><br>
        <label for="car">Машина</label> <input type="text" id="car" name="car" style="width: 20%;" required><br><br>
        <input type="hidden" id="1" name="1" value="1">

        <label for="brand">Марка</label> <input type="text" id="brand" name="brand" style="width: 22%;" required> <br><br>
        <label for="Model">Модель</label><input type="text" id="Model" name="Model" style="width: 21%;" required><br><br>
        <label for="Body_color">Цвет кузова</label> <input type="text" id="Body_color" name="Body_color" style="width: 17%;" required><br><br>
        <label for="State_number_RF">Гос.Номер РФ</label> <input type="text" id="State_number_RF" name="State_number_RF" style="width: 15%;" required><br><br>
        <button style="margin-left:10%;" type="submit">Добавить</button><br><br>
    </form>


    





</body>

</html>