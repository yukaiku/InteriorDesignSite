<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BATHHOUS - HOME</title>
    <?php
    require_once ('components/cssTemplate.php');
    require_once ('components/jsTemplate.php');
    require_once ('components/capitalisFont.php');
    ?>
    <style>
        body{
            width: 100%;
            height: 100vh;
            font-family: oxygenFont;
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

        .cBtn{
            text-align: center;
            vertical-align: middle;
            border-width: 0px;
            border-color: black;
            border-style: solid;
            background-color: transparent;
            display: inline-block;
            text-transform:uppercase;
            /*text-shadow: 1px 1px grey;*/
        }
        .cBtn:after{
            display:block;
            content: '';
            border-bottom: solid 1px black;
            transform: scaleX(0);
            transition: transform 250ms ease-in-out;
        }
        .cBtn:hover:after{
            transform: scaleX(1);
        }
    </style>

</head>
<body>
<?php
require_once ("components/navbar.php");
?>
<container id="homeBanner">

    <header>
        <p style="font-size:30px; padding-bottom: 2%;">Welcome to</p><img src="img/logo.png" alt="..." height="80px">
    </header>
    <br/><br/>
    <subtitle>
        Shop Now
    </subtitle>
    <div class="row">
    <shopButton class="col-md-6">
        <a href="products.php" type="button" class="btn cBtn">Consumer</a>
    </shopButton>
    <shopButton class="col-md-6">
        <a type="products.php" class="btn cBtn">Commercial</a>
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