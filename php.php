<?php

class Universities
{
    private $name;
    private $yearestablished;
    private $location;
    private $founder;
    private $nofostudents;
    private $bankrupt;


    public function __construct($name, $yearestablished, $location, $founder, $nofostudents, $bankrupt)
    {
        $this->name = $name;
        $this->yearestablished = $yearestablished;
        $this->location = $location;
        $this->founder = $founder;
        $this->nofostudents = $nofostudents;
        $this->bankrupt = $bankrupt;
    }
    private function isBankrupt()
    {
        if ($this->bankrupt == true) {
            return "Institution is currently bankrupt :(";
        } else {
            return "Institution is okay!!! :)";
        }
    }
    public function getUni()
    {
        $uni = ["Institution Name: " . $this->name, "Established year: " . $this->yearestablished, "Location: " . $this->location, "Founder: " . $this->founder, "No of Students: " . $this->nofostudents, $this->isBankrupt()];
        return $uni;
    }
}
$university = new Universities("Kenyatta University", 1945,"Nairobi, Kenya","Livingstone Kamau",500000, true);
$results = $university->getUni();
for ($key = 0; $key < count($results); $key++) {
    echo $results[$key] . "<br>";
}
