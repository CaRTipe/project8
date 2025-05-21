<?php
    class Vehicles {
        private $brand;
        private $type;
        private $releaseyear;
        private $topspeed;
        private $isdamaged = true;


        public function setProperty($newbrand, $newtype, $newreleaseyear, $newtopspeed) {
            $this->brand = $newbrand;
            $this->type = $newtype;
            $this->releaseyear = $newreleaseyear;
            $this->topspeed = $newtopspeed;
        }
        private function checkCondition() {
            if ($this->isdamaged == true) {
                return "Car is damaged";
            }
            else {
                return "Car is in good condition";
            }
        }

        public function getProperty() {
            $specs = array("Car Brand: " . $this->brand, "Car Type: " . $this->type, "Release year: " . $this->releaseyear, "Top Speed: " . $this->topspeed, $this->checkCondition());
            return $specs;
        }
    }

    // Object Creation
    $vehicle = new Vehicles();
    $vehicle->setProperty(
        "Toyota",
        "Manual",
        2004,
        "120 mph"
    );
    $key = 0;
    $toyota = $vehicle->getProperty();
    while ($key <= count($toyota) - 1) {
        echo $vehicle->getProperty()[$key] . "<br>";
        $key ++;
    }
?>