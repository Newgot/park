<?php

include_once 'config.php';
$car = new Car();
$park = new Park();

?>
<h3>GetInfoI ($id = 2)</h3>
<p><?= $car->getInfo(2)?></p>
<hr>
<h3>Добавление транспортного средства</h3>
<p><?var_dump($park->addToPark(2, 1))?></p>
<p><?var_dump($park->addToPark(2, 1))?></p>
<h3>Удаление транспортного средства</h3>
<p><?var_dump($park->removeFromPark(2, 1)) ?></p>
<p><?var_dump($park->removeFromPark(2, 1))?></p>
<hr>
<h3>Получение самого дорогого транспортного средства</h3>
<p><?= $park->getVehicleToHightPrice()?></p>
<hr>
<h3>Получение общей стоимости всех транспортных средств</h3>
<p><?= $park->getAllSum()?></p>
<hr>
<h3>Получение всех автомобилей</h3>
<p><?= $park->getAllVehicles()?></p>
<hr>
<h3>Получение средней стоимости транспортного средства</h3>
<p><?= $park->getAvgSum() ?></p>