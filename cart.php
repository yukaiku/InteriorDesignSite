<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BATHHOUS - Check Out | Cart</title>
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
        container{
            display: block;
            padding-left: 5%;
            padding-right: 5%;
        }
        header{
            padding: 5% 0 2% 0;
            text-align: center;
            font-size: 50px;
        }
        productHeader{
            background-color: #f9fafb;
            padding: 1% 0;
        }
        products{
            padding: 1% 0;
        }
    </style>

</head>
<body>
<?php
require_once ("components/navbar.php");
require_once ("components/checkoutProductCard.php");
?>
<container>
    <header>
        Cart Details
    </header>
    <main>
        <div class="row">
            <div class="col-sm-9">
                <productHeader class="row">
                    <div class="col-sm-5">Product</div>
                    <div class="col-sm-2">Price</div>
                    <div class="col-sm-2">Quantity</div>
                    <div class="col-sm-2">Subtotal</div>
                    <div class="col-sm-1"></div>
                </productHeader>
                <?php
                $recordNumber = 10;

                for($i = 0; $i < $recordNumber; $i++){
                    $card = new checkoutProductCard('1','Black Tile ' . strval($i),'400 x 400', 'Matt Tile', 'Black and White', '100', '49', 'placeholder.png');
                    echo $card->returnCheckoutCard();
                }
                ?>
            </div>
            <div class="col-sm-3">
                <div style="background-color: #f9fafb; padding: 5% 5%">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Total</p>
                            <p style="font-size:8px">Including GST*</p>
                        </div>
                        <div class="col-sm-6">
                            $99
                        </div>
                    </div>
                    <button class="btn btn-outline-dark">Update Cart</button>
                    <a class="btn btn-dark" href="checkOut.php">Checkout</a>
                </div>

            </div>
    </main>
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