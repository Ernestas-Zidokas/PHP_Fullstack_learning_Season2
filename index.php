<?php

Class ThailandSurprise {

    public $clothes;
    private $balls;
    private $name;

    public function __construct($name) {
        $this->balls = rand(0, 1);
        $this->name = $name;
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

$surprise = new ThailandSurprise('Ballzzeryte');

$surprise->clothes = 'miniskirt';
?>
<html>
    <head>
        <title>OOP</title>
    </head>
    <body>
        <img src="<?php print $surprise->getPhoto(); ?>">
    </body>
</html>