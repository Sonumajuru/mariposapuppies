<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mariposas Puppies - Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
    <?php include 'header.html'; ?>
    <div class="container">
        <div class="titles">
            <h1>Mariposa Puppies </h1>
            <p>
                We do not make music we create music. with one heart we try to bring people together, experiment the different genres.
            </p>
        </div>

        <div class="slideshow-container">
            <div class="mySlides1">
                <img src="/img/img1.jpg" style="width:100%">
            </div>

            <div class="mySlides1">
                <img src="/img/img2.jpg" style="width:100%">
            </div>

            <div class="mySlides1">
                <img src="/img/img3.jpg" style="width:100%">
            </div>

            <div class="mySlides1">
                <img src="/img/img4.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
            <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
        </div>

        <div class="header">
            <h1>Mariposa Puppies</h1>
            <p>Mariposa Puppy is the perfect place to find your family dog. Bringing you the best puppies with a kind and loving personality.</p>
        </div>

        <div class="row">
            <div class="side">
                <h2>About Me</h2>
                <h5>Photo of me:</h5>
                <img src="/img/pop.jpg" alt="Geeks Image" />
                <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
                <h3>More Text</h3>
                <p>Lorem ipsum dolor sit ame.</p>
                <button class="btnsignup" type="button" onclick="document.getElementById('id01').style.display='block'" style="height:60px;">Subscribe Now</button><br>
                <button class="btnsignup" type="button" onclick="location.href='our-puppies.php';" style="height:60px;">Go to available puppies</button><br>
                <button class="btnsignup" onclick=" window.open('https://instagram.com/mariposapuppies/ ', '_blank'); return false;">Follow us <i class="fa fa-instagram"></i></button>

                <div id="id01" class="modal">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <form class="modal-content" method="post" action="subscribe.php">
                        <div class="container">
                            <h1>Subscribe Now</h1>
                            <p>Please fill in this form to get the latest updates about our newest available puppies.</p>
                            <hr>
                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" required>
                            <span class="text-danger hidden" id="emailError"></span>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password" required>

                            <label for="psw-repeat"><b>Repeat Password</b></label>
                            <input type="password" placeholder="Repeat Password" name="pswrepeat" required>

                            <label>
                                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                            </label>

                            <p>By creating an account you agree to our <a href="privacy.php" style="color:dodgerblue">Terms & Privacy</a>.</p>

                            <div class="clearfix">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                <button type="save" name="submit" value="add" class="signupbtn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="main">
                <h2>TITLE HEADING</h2>
                <h5>Title description, Dec 7, 2017</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                <br>
                <h2>TITLE HEADING</h2>
                <h5>Title description, Sep 2, 2017</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
        </div>

    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <script>
        var slideIndex = [1, 1];
        var slideId = ["mySlides1", "mySlides2"]
        showSlides(1, 0);
        showSlides(1, 1);

        function plusSlides(n, no) {
            showSlides(slideIndex[no] += n, no);
        }

        function showSlides(n, no) {
            var i;
            var x = document.getElementsByClassName(slideId[no]);
            if (n > x.length) {
                slideIndex[no] = 1
            }
            if (n < 1) {
                slideIndex[no] = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex[no] - 1].style.display = "block";
        }
    </script>

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