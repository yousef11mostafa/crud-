<?php

require('input.php');

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];

    $fname = filter_var($fname, FILTER_SANITIZE_STRING);
    $lastname = filter_var($lname, FILTER_SANITIZE_STRING);
    $mail = filter_var($mail, FILTER_SANITIZE_URL);
    $phone = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);

    require('validate.php');
    $errors = validate($fname, $lname, $phone);

    if (empty($errors)) {
        require('connect.php');
        $sql = " insert into students (first_name,last_name,email,phone)  values('$fname','$lname','$mail','$phone')";
        $res = mysqli_query($conn, $sql);
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>crud system</title>
</head>

<body>

    <h2 class="text-center fw-b my-5">registeration form</h2>
    <div class="container">
        <form action="" method="post">
            <!--start alert danger  -->
            <?php
            if (!empty($errors)) {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>errors</strong><br>
                    <?php
                    foreach ($errors as $error) {
                        echo $error . "<br>";
                    }
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>
            <!-- end alert danger-->
            <!-- start alert succesfuly -->
            <?php
            if (empty($errors)) {
                if (isset($fname)) {
            ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        the <?php echo $fname . ' ' . $lname ?> has registerd succesfuly
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
            <?php
                }
            }
            ?>
            <!-- end alert succesfuly -->
            <?php
            inputfield("text", 'fname', 'firstname');
            inputfield("text", 'lname', 'lastname');
            inputfield("email", 'mail', 'email');
            inputfield("text", 'phone', "phone");
            ?>
            <input type="submit" value="register" class="btn btn-primary ">
            <a href="index.php" class="btn btn-primary">back</a>
        </form>
    </div>



    <!-- bootstrap link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>

</html>