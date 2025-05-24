<?php
 class Countries {
    private $name;
    private $independenceyear;

    public function __construct($name, $independenceyear) {
        $this->name = $name;
        $this->independenceyear = $independenceyear;
    }
    
    public function getHistory() {
        $history = array("Country Name: " . $this->name, "Independence Year: " . $this->independenceyear);
        return $history;
    }


 }
 $country = new Countries("Kenya", "1963");
 $country1 = new Countries("South Africa", "1994");
 $key = 0;
 while ($key < 2) {
    echo $country->getHistory()[$key] . "<br>";
    $key++;
 }
 $key = 0;
 while ($key < 2) {
    echo $country1->getHistory()[$key] . "<br>";
    $key++;
 }

?>