<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>LakeDevs | We Develop Websites</title>
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

        <!--- Banner Start -->
        <div class="thankYouLanding"></div>

        <div class="caption thankYouCaption text-center">
            <h1>Thank You!</h1>
            <h3>We'll get back to you as soon as we can.</h3>
        </div>
        <!--- Banner End -->

        <!--- Start Footer -->
        <?php require "includes/footer.php"?>
        <!--- End Footer -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
        <script>
            // Header bg black and allow scroll
            const header = document.querySelector("#headerContainer");
            header.style.background = "black";
            document.body.style.overflowY = "scroll";
        </script>
    </body>
</html>