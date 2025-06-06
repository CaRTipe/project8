<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <h1 class="h1"><b>
            HOMEPAGE
        </b></h1>
    <?php



    $vehicles = array(
        array("Mountain Bike", "BMX bike", "Electric Bike", "Road Bicycle"),
        array("Nissan", "Volvo", "BMW", "Mercedes Benz"),
        array("Electric train", "Cargo train", "Mine train", "Militarized train"),
        array("Cargo plane", "Passenger plane", "Military plane", "Helicopter")

    );


    // $people = array(
    //     array("Angel Mika", "19", ["0712321453"], ["Nairobi"]),
    //     array("John Doe", "20", ['0754567432'], ['Nakuru', 'Kisii']),
    //     array("Mary Doe", "32", ['0798543231', '0745676942'],  ["Kisumu"]),
    //     array("James Charles", "41", ['0786594321'], ["Eldoret"]),
    //     array("James Charles", "41", ['0786594321'], ["Eldoret"])

    // );
    include "people_array.php";



    ?>

    <h1 class="h2"><b>Example 1</b></h1>
    <table class="table table-danger table-striped-columns">
        <tr>
            <th>Bicycles</th>
            <th>Cars</th>
            <th>Train</th>
            <th>Planes</th>
        </tr>
        <tr>
            <?php
            foreach ($vehicles as $vehicle) {
                foreach ($vehicle as $key => $value) {
                    if ($key == 0)
                        echo "<td>" . $value . "</td>";
                }
            }
            ?>
        </tr>
        <tr>
            <?php
            foreach ($vehicles as $vehicle) {
                foreach ($vehicle as $key => $value) {
                    if ($key == 1)
                        echo "<td>" . $value . "</td>";
                }
            }
            ?>

        </tr>
        <tr>
            <?php
            foreach ($vehicles as $vehicle) {
                foreach ($vehicle as $key => $value) {
                    if ($key == 2)
                        echo "<td>" . $value . "</td>";
                }
            }
            ?>
        </tr>
        <tr>
            <?php
            foreach ($vehicles as $vehicle) {
                foreach ($vehicle as $key => $value) {
                    if ($key == 3)
                        echo "<td>" . $value . "</td>";
                }
            }
            ?>
        </tr>
    </table>
    <div id="container">
        <h1 class="h3"><b>SAFARICOM</b></h1>
        <div style="display: flex; flex-direction: row; align-items: center; margin-top: 5px;">
            <label for="option" class="form-label">Choose Number 1-5</label>
            <input type="number" id="option" class="form-control-sm px-0 mx-3">
            <button class="btn btn-secondary" id="button" onclick="showSwitch()">544 Code</button>
        </div>
        <div id="inside1" style="display: flex; flex-direction: row; align-items: center; margin-top: 5px;">

        </div>
        <div id="inside2" style="display: flex; flex-direction: row; align-items: center; margin-top: 5px;">

        </div>
    </div>



    <div>
        <p id="book">

        </p>
        <p id="fordatadeals">

        </p>
        <p id="forOfa">

        </p>
    </div>

    <table class="table">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Age</th>
            <th>Phone Number</th>
            <th>Place</th>
        </tr>
        <?php
        foreach ($people as $key=>$person) {
            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $person[0] . "</td>";
            echo "<td>" . $person[1] . "</td>";
            
            echo "<td>";
              foreach($person[2]  as $place) {
                    echo $place . "<br>";
              }
            echo "</td>";
            echo "<td>";
                foreach ($person[3] as $phone) {
                    echo $phone . "<br>";
                }
            echo "</td>";
            // echo "<td>" . $person[3] . "</td>";
            echo "</tr>";
            
        }
        ?>
    </table>



    <script src="./script.js"></script>
</body>

</html>