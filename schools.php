<?php
 class Schools {
    private $schoolname;
    private $foundedyear;
    private $population;
    private $vacant = true;


    public function setSchoolHistory($name, $year, $newpopulation) {
        $this->schoolname = $name;
        $this->foundedyear = $year;
        $this->population = $newpopulation;
    }
    private function checkVacancy() {
        if ($this->vacant == true) {
            return "There's vacancy for more students";
        }
        else {
            return "School is currently full";
        }
    }
    
    public function getHistory() {
        $history = array( "School Name: " . $this->schoolname, "Year Founded: " . $this->foundedyear, "Current Population:  " . $this->population, $this->checkVacancy());
        return $history;
    }
}
// create an object
$school = new Schools();
$school->setSchoolHistory(
        "Bridgewater High School",
        1945,
        40000
        
);
$bridge = $school->getHistory();
for ($key=0; $key < count($bridge); $key++) {
    echo $bridge[$key] . "<br>";
}
print_r($school->getHistory());

?>