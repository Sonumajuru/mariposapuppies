<?php
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$repeatpswd = filter_input(INPUT_POST, 'pswrepeat');

$link = "index.php";

$servername = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "mariposapuppies";
// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
} else {
    $sql = "INSERT INTO subscription (email, password, repeatpswd) values ('$email','$password', '$repeatpswd')";
    if ($conn->query($sql)) {
        // echo "New record is inserted sucessfully";
        echo "<script type='text/javascript'>alert('You have successfully subscribed to Mariposa Puppies!')</script>";
        echo '<script>window.location ="' . $link . '"</script>';

    } else {
        echo "Error: " . $sql . "" . $conn->error;
    }
    $conn->close();
}
