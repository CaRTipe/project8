<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <form action="process.php" method="post" class="d-flex flex-column align-items-center justify-content-center">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control-lg" id="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control-lg" id="password">
        </div>
        <div class="mb-4">
            <input type="radio" name="gender" value="female" class="form-check-input" id="female">Female
            <input type="radio" name="gender" value="Male" class="form-check-input" id="male">Male
            <input type="radio" name="gender" value="other" class="form-check-input" id="other">Rather not say
        </div>

        <div>
            <button class="btn btn-danger px-5 mx-5" type="submit" name="submit">Submit</button>
        </div>
    </form>
    <?php
    include "new.php";
    $person1 = new Person();
    $person1->setPersonDetails(
        "John",
        30,
        "6'1",
        "70 kgs"
    );
    echo $person1->getPersonDetails();
    ?>
</body>

</html>