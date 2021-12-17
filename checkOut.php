<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BATHHOUS - Check Out | Cart</title>
    <?php
    require_once ('components/cssTemplate.php');
    require_once ('components/jsTemplate.php');
    require_once ('components/styles.php');
    require_once ('lib/formValidation.php');
    ?>
    <style>
        body{
            width: 100%;
        }
        container{
            height: 90vh;
            display: block;
            padding-left: 5%;
            padding-right: 5%;
            padding-bottom: 10%;

        }
        container > * > h4{
            padding-top: 15%;
        }
        @media screen and (max-width: 922px) {
            container{
                height: fit-content;
            }
        }
    </style>

</head>
<body>
<?php
require_once ("components/navbar.php");
require_once ("components/checkoutProductCard.php");
?>
<container>
    <div class="col-md-7 col-lg-8">
        <h4 class="mb-3 title">Billing Address</h4>
        <form class="needs-validation" novalidate="">
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>

                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" required="">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="col-12">
                    <label for="address" class="form-label">Billing Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St, Brisbane City, Qld 4000" required="">
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                    <p style="font-size: 15px; color: grey;">For addresses with a unit number, please use unit number / street number. Eg. U1410 / 70 Mary st.</p>
                </div>

                <div class="col-12">
                    <label for="address2" class="form-label">Shipping Address <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" placeholder="Enter if different from billing address">
                </div>
            </div>

            <hr class="my-4">

            <h4 class="mb-3 title">Payment</h4>

            <div class="my-3">
                <p>An email will be sent containing payment method and details,
                once the payment is made, shipment will be delivered within 14 days.</p>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-outline-dark btn-lg source sourceSansProFont" type="submit">Checkout</button>
        </form>
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