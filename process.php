<?php
$name = $_POST["username"];
$password = $_POST["password"];
$gender = isset($_POST["gender"])?$_POST["gender"]:"";
$nameerror = "";
$passworderror = "";
$genderror = "";



// if (!isset($_POST["gender"])) {
//     echo "Insert Values <br>";
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (empty($_POST["username"])) {
//         $nameerror = "Name is required";
//     } else {
//         $name = test_input($_POST["username"]);
//     }
//     if (empty($_POST["password"])) {
//         $passworderror = "Password is required";
//     } else {
//         $password = test_input($_POST["password"]);
//     }
//     if (empty($_POST["gender"])) {
//         $genderror = "Select Gender";
//     }
//     else {
//         $gender = test_input($_POST["gender"]);
//     }
// }
// else {

// }




// function test_input($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

// echo "Name is: " . $name;
// echo "<br>";
// echo "Password is: " . $password;
// echo "<br>";
// echo "Is " . $gender;
// echo $passworderror;
// echo "<br>";
// echo $nameerror;
// echo "<br>";
// echo $genderror;


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = htmlspecialchars($_REQUEST["username"]);
    $password = htmlspecialchars($_REQUEST["password"]);
    if (empty($name)) {
        echo "Name is required";
    } else {
        echo $name;
    }
    echo "<br>";
    if (empty($password)) {
        echo "Password is required";
    } else {
        echo $password;
    }
}
