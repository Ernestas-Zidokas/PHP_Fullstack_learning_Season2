<?php

Class ThailandSurprise {

    public $clothes;
    private $balls;

    public function __construct() {
        $this->balls = rand(0, 1);
    }
    
    public function attachBalls(){
        $this->balls = true;
    }
    
    public function detachBalls(){
       $this->balls = false; 
    }
    
    public function getPhoto(){
        if($this->balls) {
            return 'images/trap.gif';
        } else {
            return 'images/skirt.jpg';
        }
    }

}

$surprise = new ThailandSurprise();

$surprise->clothes = 'miniskirt';
$surprise->getPhoto();
?>
<html>
    <head>
        <title>OOP</title>
    </head>
    <body>
        <img src="<?php print $surprise->getPhoto(); ?>">
    </body>
</html>