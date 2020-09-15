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

<?php include_once "functions/apartmentdb.php"?>

<?php foreach ($data as $value):?>

    <p><b>№ клиента</b>  <?= $value['id_client'] ?>  <b>Имя клиента</b>  <?= $value['name_clients'] ?>  <b>Адрес квартиры</b>  <?= $value['address_apartment'] ?>  <b>Кол-во комнат</b>  <?= $value['number_rooms'] ?></p>
    <img src="<?= $value['link'] ?>" alt="" style="width: 100px; height: 100px;">

<?php endforeach;?>

<?php foreach ($data_one as $value):?>

    <p><b>№ клиента</b>  <?= $value['id_client'] ?>  <b>Имя клиента</b>  <?= $value['name_clients'] ?>  <b>Адрес квартиры</b>  <?= $value['address_apartment'] ?>  <b>Кол-во комнат</b>  <?= $value['number_rooms'] ?></p>
    <img src="<?= $value['link'] ?>" alt="" style="width: 100px; height: 100px;">

<?php endforeach;?>

<?php foreach ($data_two as $value):?>

    <p><b>№ клиента</b>  <?= $value['id_client'] ?>  <b>Имя клиента</b>  <?= $value['name_clients'] ?>  <b>Адрес квартиры</b>  <?= $value['address_apartment'] ?>  <b>Кол-во комнат</b>  <?= $value['number_rooms'] ?></p>
    <img src="<?= $value['link'] ?>" alt="" style="width: 100px; height: 100px;">

<?php endforeach;?>


</body>
</html>