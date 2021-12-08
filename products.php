<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BATHHOUS - Products</title>
    <?php
    require_once ('components/cssTemplate.php');
    require_once ('components/jsTemplate.php');
    require_once ('components/capitalisFont.php');
    require_once ('components/productCard.php');
    ?>
    <style>
        body{
            width: 100%;
            height: 100vh;
            font-family: oxygenFont;
        }
        header{
            padding-top: 5%;
            text-align: center;
            font-size: 50px;
            padding-bottom: 1%;
        }
        container{
            padding-left: 5% ;
            padding-right: 5% ;
        }
        filterSection > * {
            display: block;
            padding-bottom: 5%;
        }
    </style>
    <?php
    require_once('lib/colorSwatch.php');
    ?>
</head>
<body>
<?php
require_once ("components/navbar.php");
?>
<container id="content">
    <header>PRODUCTS</header>
    <container class="row">
        <filter class="col-sm-3">
            <?php
            include_once ('components/productFilter.php');
            ?>
        </filter>
        <main class="col-sm-9">
            <products class="row">
                <?php
                $recordNumber = 10;

                for($i = 0; $i < $recordNumber; $i++){
                    $card = new productCard('name','39x39','wood','39', 'placeholder.png');
                    echo $card->returnProductCard();
                }

                ?>

            </products>
        </main>
    </container>
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