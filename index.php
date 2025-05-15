<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
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

    <table class="table mb-3">
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



    <script src="./script.js"></script>
</body>

</html>