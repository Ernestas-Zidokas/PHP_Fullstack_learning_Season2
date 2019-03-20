<?php

Class Jacuzzi {

    public $amount_water;
    public $amount_non_water;

    public function __construct($amount_water = 0, $amount_non_water = 0) {
        $this->amount_water = $amount_water;
        $this->amount_non_water = $amount_non_water;
    }

    public function getWaterPurity() {
        return $this->amount_water / ($this->amount_water + $this->amount_non_water) * 100;
    }

}

Class User {

    public function peeInJacuzzi(Jacuzzi $jacuzzi, $amount) {
        $jacuzzi->amount_non_water += $amount;
    }

}

$pliuskupliusku = new Jacuzzi(600);
$petras = new User();
$piotra = new User();
$petras->peeInJacuzzi($pliuskupliusku, rand(0, 200) / 1000);
$piotra->peeInJacuzzi($pliuskupliusku, rand(0, 100) / 1000);

$pliuskupliusku->getWaterPurity();
?>
<html>
    <head>
        <title>OOP</title>
    </head>
    <body>
        <?php print 'Skaidrus vanduo: ' . $pliuskupliusku->amount_water; ?>
        <?php print 'Neskaidrus vanduo: ' . $pliuskupliusku->amount_non_water; ?>
        <?php print 'Vandens skaidrumas: ' . $pliuskupliusku->getWaterPurity(); ?>
    </body>
</html>