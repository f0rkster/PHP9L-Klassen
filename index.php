<?php

foreach(glob('core/*.php') as $coreclass)
{
    require_once $coreclass;
}
foreach(glob('models/*.php') as $modelclass)
{
    require_once $modelclass;
}

use \fhe\models\Cat;
use \fhe\models\Creature as Animal;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klassen</title>
</head>
<body>

    <?
               $matthias = new \fhe\models\Human('Matthias', 'Gabel', 'male');
               $matthiasCat = new Cat('female');
               $creature = new Animal();
    ?>
    <?=$matthias->speak();?>
    <hr>
    <?=$matthiasCat->speak();?>
    <hr>
    <?=$creature->speak();?>

</body>
</html>