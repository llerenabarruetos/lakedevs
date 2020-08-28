<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>LakeDevs | Get A Quote</title>
        <link rel="shortcut icon" href="images/LakeDevsLogo.png" type="image/x-icon"/>
        <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link rel = "stylesheet" href = "styles/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <!--- Header Start -->
        <?php require "includes/header.php"?>
        <!--- End Header -->

        <!--- Title Card Start -->
        <div id="AboutCard" class="text-center aboutContainer headerSpacer">
            <h1>Let's Get In Contact</h1>
            <p>Send us an email through the form below or at lakedeepllc@gmail.com. You can also text us (561) - 410 - 4532) to get a quote today!</p>
            <p>Let us know details of your desired website such as the number of pages and functionality features.</p>
        </div>
        <!--- Title Card End -->

        <!--- Contact Form Start -->
        <div class="text-center pastWorkEntry contactFormContainer">
            <form action="includes/sendEmail.php" method="post" class="contactForm">
                <p style="margin: 0 0 0.4rem;">Name</p>
                <input type="text" name="name" placeholder="Your Name*" required="required" oninvalid="this.setCustomValidity('Please Enter Your Name')" oninput="setCustomValidity('')">
                <p>Email</p>
                <input type="text" name="email" placeholder="Your Email*" required="required" oninvalid="this.setCustomValidity('Please Enter Your Email')" oninput="setCustomValidity('')">
                <p>Subject</p>
                <input type="text" name="subject" class="subjectOfMessage" placeholder="Subject of Message*" required="required" oninvalid="this.setCustomValidity('Please Enter a Subject')" oninput="setCustomValidity('')">
                <p>Message</p>
                <textarea name="message" placeholder="Tell us about your Big-Project.html...*" required="required" oninvalid="this.setCustomValidity('Please Enter a Message')" oninput="setCustomValidity('')"></textArea>
                <button type="submit" name="submit" class="btn btn-light">Send Message</button>
            </form>
        </div>
        <!--- Contact Form End -->

        <!--- Start Footer -->
        <?php require "includes/footer.php"?>
        <!--- End Footer -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
        <script>
            // Highlighting current tab's button on the header
            var getAQuoteBtn = document.getElementById("getAQuoteBtn");
            getAQuoteBtn.classList.add("active");

            // Header bg black and allow scroll
            const header = document.querySelector("#headerContainer");
            header.style.background = "black";
            document.body.style.overflowY = "scroll";
        </script>
    </body>
</html>