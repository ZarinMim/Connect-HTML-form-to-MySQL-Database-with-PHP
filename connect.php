<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $con = new mysqli('localhost', 'root', 'zarinmim5!', 'form');
    if ($con) {
        $sql = "INSERT INTO `data` (name, email, gender, mobile, password) VALUES ('$name', '$email', '$gender', '$mobile', '$password')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            echo "Data inserted successfully";
        } else {
            die("Error: " . mysqli_error($con));
        }
    } else {
        die("Connection failed: " . mysqli_connect_error());
    }
}
?>
