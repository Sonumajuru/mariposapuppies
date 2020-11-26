<?php
if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "mariposaspuppies@gmail.com"; //you@yourdomain.com
    $email_subject = "New Subscription";

    function problem($error)
    {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['Email']) ||
        !isset($_POST['Password']) ||
        !isset($_POST['PswRepeat'])
    ) {
        problem('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $email = $_POST['Email']; // required
    $password = $_POST['Password']; // required
    $pswrepeat = $_POST['PswRepeat']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    // if (!preg_match($string_exp, $name)) {
    //     $error_message .= 'The Name you entered does not appear to be valid.<br>';
    // }

    // if (strlen($message) < 2) {
    //     $error_message .= 'The Message you entered do not appear to be valid.<br>';
    // }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Password: " . clean_string($pupasswordppy) . "\n";
    $email_message .= "PswRepeat: " . clean_string($pswrepeat) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

    <!-- include your success message below -->

    Thank you for subscribing to Mariposa Puppies. We will make sure to keep you updated with our newest puppies.

<?php
}
?>