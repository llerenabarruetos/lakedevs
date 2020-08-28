<!-- Version 1.0 | May 20, 2020 -->
<!-- Website made by Sebastian L.-->
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
        <div id="mainLogo" class="mainLogoContainer">
            <img class="mainLogo" src="images/LakeDevsLogo.png">
        </div>
        <div id="caption" class="oldCaption">
            <h1>An Online Presence is Important</h1>
            <h3>We Want To Help By Developing Your Website</h3>
            <a id="captionBtn" class="oldBtn" href="#">Our Past Work</a>
        </div>

        <div class="curtain"></div>
        
        <div class="landing"></div>
        <!--- Banner End -->

        <!--- About/Benefits Card Start -->
        <div id="AboutCard" class="text-center aboutContainer">
            <h1>Who We Are</h1>
            <p>The LakeDevs are two college students wanting to help people with creating and hosting their website. Learn more about the team at:</p>
            <a class="btn btn-light btn-lg aboutTeamBtn" href="http://lakedeep.org/about" target="_blank">About The Team</a>
        </div>
        <div class="text-center benefitsContainer">
            <div class="row">
                <div class="col-sm benefitsText">
                    <h2>The Power of a Website:</h2>
                    <p>We believe in benefits of a website for any business and what it can offer to you, your business, and public branding.</p>
                </div>
                <div class="col-sm">
                    <img class="benefitsImg" src="images/LakeDevsBenefits.png">
                </div>
            </div>
        </div>
        <!--- About/Benefits Card End -->

        <!--- Start Footer -->
        <?php require "includes/footer.php"?>
        <!--- End Footer -->
        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
        <script src="js/animation.js"></script>
        <script>
            //Highlighting current tab's button on the header
            var headerHomeBtn = document.getElementById("homeBtn");
            headerHomeBtn.classList.add("active");

            //Making header's background go dark as you go past welcome banner
            var contentBegin = document.getElementById("AboutCard").offsetTop;
            var headerContainer = document.getElementById("headerContainer");
            window.onscroll = function() {
                if (window.pageYOffset > (contentBegin/3)) {
                    var opacity = (window.pageYOffset / contentBegin) - 0.1;       
                    headerContainer.style.background = "rgba(17, 17, 17, " + opacity + ")";
                }
                else {
                    headerContainer.style.background = "rgba(17, 17, 17, 0)";
                }
            }
        </script>
    </body>
</html>