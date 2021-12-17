<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BATHHOUS - HOME</title>
    <?php
    require_once ('components/cssTemplate.php');
    require_once ('components/jsTemplate.php');
    require_once ('components/styles.php');
    ?>
    <style>
        body{
            width: 100%;
            height: 100vh;
        }
        #homeBanner{
            width: 100%;
            height: 100vh;
            position: relative;
            top: 30%;
            transform: translateY(-50%);
            text-align: center;
        }
        header{
            font-size: 45px;
        }
        subtitle{
            display: block;
        }
        shopButton:nth-child(1){
            text-align: right;
        }
        shopButton:nth-child(2){
            text-align: left;
        }

        /*Only for index page*/
        footer{
            position: absolute;
            bottom:-20px;
            width: 100%;
            margin: 0 !important;
        }
        /*When in landscape on mobile */
        @media screen and (max-width: 920px){
            footer{
                top: 150vh;
            }
        }
    </style>

</head>
<body>
<?php
require_once ("components/navbar.php");
?>
<container id="homeBanner">

    <header class="sourceSansProFont">
        <p style="font-size:30px; padding-bottom: 2%;">Welcome to</p><img src="img/logo.png" alt="..." height="80px">
    </header>
    <br/><br/>
    <subtitle class="sourceSansProFont" style="padding-top: 4%">
        Shop Now
    </subtitle>
    <div class="sourceSansProFont" style="padding-top: 1%; width: 100%;">
    <shopButton style="width: 49%; padding-right: 1%">
        <a href="products.php" type="button" class="btn btn-outline-dark">Consumer</a>
    </shopButton>
    <shopButton style="width: 49%; padding-left: 1%">
        <a type="products.php" class="btn btn-outline-dark">Commercial</a>
    </shopButton>
    </div>
</container>
<?php
require_once ('components/footer.php');
?>

</body>



<script>
    $( document ).ready(function() {
        console.log( "document loaded" );
    });
</script>
</html>