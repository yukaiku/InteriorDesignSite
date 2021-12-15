<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BATHHOUS - Product</title>
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
        imgArea{
            padding-top: 15%;
            width: 100%;
            height: 100vh;
            padding-bottom: 15%;
            background-color: #e3e3e3;
            text-align: center;
            vertical-align: center;
        }
        #productImage{
            width: 50%;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }
        mainContent{
            height: 100vh;
        }
        mainContent > *{
            padding-left: 10%;
            padding-right: 10%;
        }
        mainContent > hr{
            width: 90%;
            margin-right: auto;
            margin-left: auto;
        }
        header{
            padding-top: 15%;
            font-size: 40px;
            padding-bottom: 1%;
        }
        productDescription{
            display: block;
        }
        #productSpecificationToggleBtn{
            margin-bottom: 0;
        }
        #productSpecificationContent{
            font-size: 10px;
        }
        .noShow{
            padding-top: 0;
        }
        .collapsing{
            padding-top: 5% !important;
        }
        .show{
            padding-top: 5% !important;
        }

    </style>

</head>
<body>
<?php
require_once ('lib/colorSwatch.php');
require_once ("components/navbar.php");
?>
<main class="row">

    <imgArea class="col-sm-6">
<!--        <a href="javascript:history.back()" class="btn bi bi-arrow-left-short"></a>-->
        <img id="productImage" src="img/placeholder.png">
    </imgArea>
    <mainContent class="col-sm-6">
        <header class="title">FANCY DARK TILE</header>
        <price>$49/sqm</price>
        <hr/>
        <productDescription>
            <p>Color: Black and White</p>
            <div class="colors">
                <div class="color" style="background-color: #e1e851" data-hex="#e1e851"></div>
                <div class="color" style="background-color: #8cd147" data-hex="#8cd147"></div>
                <div class="color" style="background-color: #4a9ccf" data-hex="#4a9ccf"></div>
                <div class="color" style="background-color: #661f45" data-hex="#661f45"></div>
                <div class="color" style="background-color: #1e2024" data-hex="#1e2024"></div>
            </div>
            <input name="quantity" value="" placeholder="Quantity">
            <hr/>
            <p>Total: $0</p>
            <a class="btn btn-outline-dark sourceSansProFont" style="width: 100%; margin-bottom: 2%">Add to Cart</a>
            <a class="btn btn-dark sourceSansProFont" href="cart.php" style="width: 100%;">Check Out</a>
            <hr/>
            <productSpecification>
                    <p id="productSpecificationToggleBtn" data-bs-toggle="collapse" href="#productSpecification" role="button" aria-expanded="false" aria-controls="productSpecification">Product Specification </p>
                <div id="productSpecificationContent" class="row">
                    <div class="col">
                        <div class="collapse multi-collapse noShow" id="productSpecification">
                            <p>Sku: </p>
                            <p>Series: </p>
                            <p>Warranty: </p>
                            <p>Size(mm): </p>
                            <p>Surface Finish: </p>
                            <p>Colour: </p>
                            <p>Material: </p>
                        </div>
                    </div>
                </div>
                <hr/>
            </productSpecification>
        </productDescription>
    </mainContent>
</main>

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