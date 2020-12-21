<!DOCTYPE html>
<html lang="uk">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Mariposas Puppies - Contact Us</title>
  <link rel="icon" type="image/gif" href="./img/PuppyLogo.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
  <?php include 'header.html'; ?>

  <div class="container">

    <div class="contact-heading">
      <address>
        Get in touch with one of our agents. <br>
        Let us know your choice of puppy by calling us or dropping us a message.<br>
        <a style="color:#ffffff" href="mailto:mariposaspuppies@gmail.com">Mariposa Puppy</a><br>
      </address>
    </div>
    <div class="row">
      <div class="column">
        <img src="/img/call-us.png" style="width:100%">
      </div>
      <div class="column">
        <!-- <form method="post" action="contact.php"> -->
        <form method="post" action="contact-email.php" value="<?php echo $_SERVER["REQUEST_URI"]; ?>">
          <label class="label for=" fname">Name</label><label class="star">*</label>
          <input type="text" id="fname" name="Name" placeholder="Your name.." required>
          <label class="label for=" lname">Email address</label><label class="star">*</label>
          <input type="text" id="email" name="Email" placeholder="Contact email address.." required>
          <label class="label for=" fname">Phone number</label><label class="star">*</label>
          <input type="text" id="pnumber" name="Number" placeholder="Contact number.." required>
          <label class="label for=" country">Country</label><label class="star">*</label>
          <select id="country" name="Country" required>
            <option value="">Select Country</option>
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
          </select>
          <label class="label for=" fname">Delivery Address</label><label class="star">*</label>
          <input type="text" id="daddress" name="Address" placeholder="Complete delivery address.." required>
          <label class="label for=" puppy">Puppy</label><label class="star">*</label>
          <select id="puppy" name="Puppy" required>
            <option value="">Choose puppy</option>
            <option value="avalanche">Avalanche</option>
            <option value="fargo">Fargo</option>
            <option value="pitbull">Pitbull</option>
            <option value="pitbull">Pitbull</option>
            <option value="pitbull">Pitbull</option>
            <option value="pitbull">Pitbull</option>
            <option value="pitbull">Pitbull</option>
            <option value="pitbull">Pitbull</option>
            <option value="pitbull">Pitbull</option>
            <option value="pitbull">Pitbull</option>
            <option value="pitbull">Pitbull</option>
            <option value="pitbull">Pitbull</option>
            <option value="pitbull">Pitbull</option>
            <option value="pitbull">Pitbull</option>
          </select>
          <label class="label for=" subject">Subject</label><label class="star">*</label>
          <textarea id="subject" name="Message" placeholder="Write something.." style="height:170px" required></textarea>
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>


  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/5fb82526a1d54c18d8ebcb48/default';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>

  <?php include 'footer.html'; ?>
</body>

</html>