<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
        .main{
            display: flex;
            padding: 10% 5% 15% 5%;
        }
        .map{
            width: 60%;
            padding-right: 5%;
        }
        .contactForm{
            width: 40%;
        }
        #contactUsTitle{
            font-size: 50px;
            padding-bottom: 2%;
        }
        form > label > *, form > label{
            width: 100%;
        }
        /*Map Custom CSS*/
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }
        footer{
            position: absolute;
            bottom:0;
            width: 100%;
        }
    </style>
    <script>
        function initMap() {
            // The location of Uluru
            const bathhous = { lat: -27.454700, lng: 153.011650 };
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: bathhous,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: bathhous,
                map: map,
            });
        }
    </script>
</head>
<body>
<?php
require_once ("components/navbar.php");
?>
<div class="main">
    <div class="map">
        <div id="map"></div>

        <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
        <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnyz5u-ih-idXO2ZHjJpiM3Zf2mrj3Uh0&callback=initMap&libraries=&v=weekly"
                async
        ></script>
    </div>
    <div class="contactForm">
        <header class="title" id="contactUsTitle">
            Get In Touch
        </header>
        <p>Please call us at PHONE NUMBER HERE or send us an enquiry by completing the form below.</p>
        <form
                action="https://formspree.io/f/xyylqzbv"
                method="POST"
        >
            <label>
                Email:
                <input type="email" name="_replyto">
            </label>
            <br/><br/>
            <label>
                Comment:
                <textarea name="message"></textarea>
            </label>
            <br/>
            <br/>
            <!-- your other form fields go here -->
            <button class="btn btn-outline-dark" type="submit">Send</button>
        </form>
    </div>
</div>


<?php
require_once ('components/footer.php');
?>
</body>



<script>
    $( document ).ready(function() {
        console.log( "document loaded" );
        // Initialize and add the map

    });
</script>
</html>