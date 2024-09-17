<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>OfERR - Organisation for Eelam Refugees,Rehabilitation</title>

    <link rel="icon" href="images/logo.png" />
    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/oferr.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!--TemplateMo 581 Kind Heart Charity
https://templatemo.com/tm-581-kind-heart-charity-->
<style>
    /* .gallery img {
        width: 300px;
        height: 250px;
        margin: 20px;
        border-radius: 20px;
    } */
    body {
        width: 100%;
    background-color: #434c50;
    min-height: 100vh;
    font: normal 16px sans-serif;
    padding: 40px 0;
}

.container.gallery-container {
    background-color: #fff;
    color: #35373a;
    min-height: 100vh;
    padding: 30px 50px;
}

.gallery-container h1 {
    text-align: center;
    margin-top: 50px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    margin: 25px auto;
    font-size: 18px;
    color: #999;
}

.tz-gallery {
    padding: 40px;
}

/* Override bootstrap column paddings */
.tz-gallery .row > div {
    padding: 2px;
}

.tz-gallery .lightbox img {
    width: 100%;
    border-radius: 0;
    position: relative;
}

.tz-gallery .lightbox:before {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -13px;
    margin-left: -13px;
    opacity: 0;
    color: #fff;
    font-size: 26px;
    font-family: 'Glyphicons Halflings';
    content: '\e003';
    pointer-events: none;
    z-index: 9000;
    transition: 0.4s;
}


.tz-gallery .lightbox:after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    background-color: rgba(46, 132, 206, 0.7);
    content: '';
    transition: 0.4s;
}

.tz-gallery .lightbox:hover:after,
.tz-gallery .lightbox:hover:before {
    opacity: 1;
}

.baguetteBox-button {
    background-color: transparent !important;
}

@media(max-width: 768px) {
    body {
        padding: 0;
    }
}
</style>
</head>
<body id="section_1">

<?php
include 'header.php';
?>

<!-- <div class="container gallery">
  <div class="row gap">
    <div class="col"><img src="./images/gallery/1/Livehood-1.jpg" alt=""></div>
    <div class="col"><img src="./images/gallery/1/Livehood-1.jpg" alt=""></div>
    <div class="col"><img src="./images/gallery/1/Livehood-1.jpg" alt=""></div>
    <div class="col"><img src="./images/gallery/1/Livehood-1.jpg" alt=""></div>
    <div class="col"><img src="./images/gallery/1/Livehood-1.jpg" alt=""></div>
    <div class="col"><img src="./images/gallery/1/Livehood-1.jpg" alt=""></div>
    <div class="col"><img src="./images/gallery/1/Livehood-1.jpg" alt=""></div>
    <div class="col"><img src="./images/gallery/1/Livehood-1.jpg" alt=""></div>
    <div class="col"><img src="./images/gallery/1/Livehood-1.jpg" alt=""></div>
  </div>
  <div class="row">
  </div>
</div> -->


<div class="container gallery-container">

    <h1>OfERR Gallery</h1>

    <p class="page-description text-center">Fluid Layout With Overlay Effect</p>
    
    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="./images/gallery/1/Livehood-1.jpg">
                    <img src="./images/gallery/1/Livehood-1.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="./images/gallery/1/Livehood-3.jpg">
                    <img src="./images/gallery/1/Livehood-3.jpg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="./images/gallery/1/Livehood-2.jpg">
                    <img src="./images/gallery/1/Livehood-2.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-12 col-md-8">
                <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/traffic.jpg">
                    <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/traffic.jpg" alt="Traffic">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/rails.jpg">
                    <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/rails.jpg" alt="Coast">
                </a>
            </div> 
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/coast.jpg">
                    <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/coast.jpg" alt="Rails">
                </a>
            </div>

        </div>

    </div>

</div>

<?php
include "./footer.php";
?>

    <!-- JAVASCRIPT FILES -->
    <!-- <script src="js/protection.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>

</body>

</html>