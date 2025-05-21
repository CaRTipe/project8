<?php
class Student
{
    private $fname;
    private $lname;
    private $birthyear;
    private $grade;
    private $gender;

    public function setStudentDetails($firstname, $lastname, $year, $class, $newgender)
    {
        $this->fname = $firstname;
        $this->lname = $lastname;
        $this->birthyear = $year;
        $this->grade = $class;
        $this->gender = $newgender;
    }
    public function getStudentDetails()
    {
        $details = array("First Name: " . $this->fname, "Last Name: " . $this->lname, "Birth Year: " . $this->birthyear, "Grade: " . $this->grade, "Gender: " . $this->gender);
        return $details;
    }
}
$student = new Student();
$student->setStudentDetails(
    "James",
    "Curry",
    2025,
    "Grade 4",
    "Male"
);
for ($key = 0; $key <=4; $key++) {
    echo $student->getStudentDetails()[$key];
    echo "<br>";
}
