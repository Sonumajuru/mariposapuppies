<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$number = filter_input(INPUT_POST, 'number');
$country = filter_input(INPUT_POST, 'country');
$address = filter_input(INPUT_POST, 'address');
$puppy = filter_input(INPUT_POST, 'puppy');
$subject = filter_input(INPUT_POST, 'subject');

$link = "contact-us.php";

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
    $sql = "INSERT INTO contact (name, email, number, country, address, puppy, subject) 
            values ('$name','$email','$number', '$country','$address','$puppy', '$subject')";
    if ($conn->query($sql)) {
        echo "<script type='text/javascript'>alert('Submitted successfully! Thanks for contacting Us')</script>";
        echo '<script>window.location ="' . $link . '"</script>';
    } else {
        echo "Error: " . $sql . "" . $conn->error;
    }
    $conn->close();
}
