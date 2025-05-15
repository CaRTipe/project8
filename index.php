<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1>HOMEPAGE</h1>
    <?php

    $credentials = array("Name" => "Blair", "Age" => "18 years", "PhoneNumber" => "078453625");
    krsort($credentials);


    $vehicles = array(
        array("Mountain Bike", "BMX bike", "Electric Bike", "Road Bicycle"),
        array("Nissan", "Volvo", "BMW", "Mercedes Benz"),
        array("Electric train", "Cargo train", "Mine train", "Militarized train"),
        array("Cargo plane", "Passenger plane", "Military plane", "Helicopter")

    );



    ?>
    <ol>
        <?php
        foreach ($credentials as $x => $value) {
            echo "<li>" . $x . ":  " . $value  .  "</li>";
        }
        #loop
        ?>
    </ol>

    <table>
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
        <div style="display: flex; flex-direction: row;">
            <label for="option">Choose Number 1-5</label>
            <input type="number" id="option">
            <button id="button" onclick="showSwitch()">544 Code</button>
        </div>
        <div id="inside1">

        </div>
        <div id="inside2">

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



    <script src="./script.js"></script>
</body>

</html>