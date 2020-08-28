<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>LakeDevs | Past Work</title>
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
            <h1>Our Experience</h1>
            <p>Our past clients allowed us to help them with their online goals and improve our web development skills.</p>
            <p>These are our previous clients as well as our own personal or school web projects.</p>
        </div>
        <!--- Title Card End -->

        <!--- Experience Listing Start -->
        <div class="text-center pastWorkEntry">
            <div class="row clientRow">
                <div class="col-sm pastWorkText">
                    <div class="verticalAlign">
                        <h2>VidaBuys</h2>
                        <p>Client | Car Selling</p>
                        <a class="btn btn-light btn-sm btn-outline-light clientSiteBtn" href="http://vidabuys.com/old/" target="_blank">First Site</a>
                        <a class="btn btn-light btn-sm btn-outline-light clientSiteBtn" style="margin-left: 1rem;" href="http://vidabuys.com/" target="_blank">Second Site</a>
                    </div>
                </div>
                <div class="col-sm pastWorkText">
                    <img class="clientSiteImg" src="images/VidaBuys.PNG">
                </div>
            </div>
            <div class="row clientRow">
                <div class="col-sm pastWorkText">
                    <img class="clientSiteImg" src="images/Lolas.PNG">
                </div>
                <div class="col-sm pastWorkText">
                    <div class="verticalAlign">
                        <h2>Lola's Insurance</h2>
                        <p>Client | Insurance</p>
                        <a class="btn btn-light btn-sm btn-outline-light clientSiteBtn" href="http://lolasinsurance.com/" target="_blank">Visit Site</a>
                    </div>
                </div>
            </div>
            <div class="row clientRow">
                <div class="col-sm pastWorkText">
                    <div class="verticalAlign">
                        <h2>LifesCoin</h2>
                        <p>Personal Project | Social Media</p>
                        <a class="btn btn-light btn-sm btn-outline-light clientSiteBtn" href="http://www.lifescoin.com/" target="_blank">Visit Site</a>
                    </div>
                </div>
                <div class="col-sm pastWorkText">
                    <img class="clientSiteImg" src="images/LifesCoin.PNG">
                </div>
            </div>
            <div class="row clientRow">
                <div class="col-sm pastWorkText">
                    <img class="clientSiteImg" src="images/ClassGuru.PNG">
                </div>
                <div class="col-sm pastWorkText">
                    <div class="verticalAlign">
                        <h2>ClassGuru</h2>
                        <p>School Project | Educational Platform</p>
                        <a class="btn btn-light btn-sm btn-outline-light clientSiteBtn" href="http://classguru.org/old/" target="_blank">Visit Site</a>
                    </div>
                </div>
            </div>
            <div class="row clientRow">
                <div class="col-sm pastWorkText">
                    <div class="verticalAlign">
                        <h2>LakeDeep</h2>
                        <p>Personal Project | Videogame Publisher</p>
                        <a class="btn btn-light btn-sm btn-outline-light clientSiteBtn" href="http://www.lakedeep.org/" target="_blank">Visit Site</a>
                    </div>
                </div>
                <div class="col-sm pastWorkText">
                    <img class="clientSiteImg" src="images/LakeDeep.PNG">
                </div>
            </div>
        </div>
        <!--- Experience Listing End -->

        <!--- Start Footer -->
        <?php require "includes/footer.php"?>
        <!--- End Footer -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
        <script>
            // Highlighting current tab's button on the header
            var headerPastWorkBtn = document.getElementById("pastWorkBtn");
            headerPastWorkBtn.classList.add("active");

            // Header bg black and allow scroll
            const header = document.querySelector("#headerContainer");
            header.style.background = "black";
            document.body.style.overflowY = "scroll";
        </script>
    </body>
</html>