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
    public function peeInJacuzzi(Jacuzzi $jacuzzi, $amount){
        $jacuzzi->amount_non_water += $amount;
    }
}

$pliuskupliusku = new Jacuzzi(1000, 200);
print 'water purity: ' . $pliuskupliusku->getWaterPurity();
?>
<html>
    <head>
        <title>OOP</title>
    </head>
    <body>

    </body>
</html>