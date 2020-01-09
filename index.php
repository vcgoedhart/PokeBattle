
<?php

require 'Pokemon.php';


$pikachu = new Pokemon('Pikachu', 'Pickachu', 'Lightning', 600, [['Electric Ring', 50], ['Pika Punch', 20]], 'Fire', 1.5, 'Fighting', 20);

$charmeleon = new Pokemon('Charmeleon', 'Chermelon', 'Fire', 600, [['Head Butt', 10], ['Flare', 30]], 'Water', 2, 'Lightning', 10);


$pikachu->battleMove($charmeleon, $pikachu->attacks[rand(0, 1)]);
$charmeleon->battleMove($pikachu, $charmeleon->attacks[rand(0, 1)]);
