<?php
declare (strict_types = 1);

Class Gerimas {

    private $data;

    public function __construct() {
        $this->data = [
            'name' => null,
            'amount_ml' => null,
            'abarot' => null
        ];
    }

    public function setName(string $name) {
        $this->data['name'] = $name;
    }

    public function setAmount(int $amount) {
        $this->data['amount_ml'] = $amount;
    }

    public function setAbarot(float $abarot) {
        $this->data['abarot'] = $abarot;
    }

    public function getName() {
        return $this->data['name'];
    }

    public function getAmount() {
        return $this->data['amount_ml'];
    }

    public function getAbarot() {
        return $this->data['abarot'];
    }

}
?>
<html>
    <head>
        <title>OOP</title>
    </head>
    <body>

    </body>
</html>