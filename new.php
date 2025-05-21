<?php


class Person {
    private $name;
    private $age;
    private $gender;
    private $height;
    private $weight;
    private $walk;
    private $run;
    private $eat;  
    private $sleep;
    private $speak;  

    public function write() {
        echo "Hello, I am " . $this->name . ". " ."<br>" . "I am " . $this->age . " years old. I am  able to " . $this->walk . ", " . $this->run . ", " . $this->eat . ", " . $this->sleep . ", and " . $this->speak . ".<br>";
            
    }
    public function setPersonDetails($newname, $newage, $newheight, $newweight) {
        $this->name = $newname;
        $this->age = $newage;
        $this->height = $newheight;
        $this->weight = $newweight; 
    }
    public function getPersonDetails() {
        return "Hi, I'm " . $this->name . " and I am " . $this->age . " years old. <br>" . "My height is " . $this->height . " and my weight is " . $this->weight ;

    }


    

}
// create an object
// $person = new Person();
// $person1 = new Person();
// $person1->setPersonDetails(
//     "John", 30, "6'1", "70kgs"
// );
// echo $person1->getPersonDetails();

