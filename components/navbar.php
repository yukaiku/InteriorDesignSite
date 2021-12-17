<style type="text/css">
    #navbar{
        transition: 1s;
    }
    .sticky{
        position: fixed;
        top: 0;
        width: 100%;
    }
    /*Change NavBar color here*/
    .nav-link{
    color: rgba(0,0,0,.40) !important;
    }
    .searchBar{
        border-radius: 0;
    }
    #searchbar > *{
        border-radius: 0;
    }

</style>

<nav id="navbar" class="navbar sticky navbar-expand-sm navbar-light sourceSansProFont">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo.png" alt="..." height="20px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link cBtn" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cBtn" href="products.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cBtn" href="contactUs.php">Contact Us</a>
                </li>
            </ul>
            <div id="searchbar" class="input-group" style="width: 32%">
                <input class="form-control border-end-0 border" type="search" value="search" id="example-search-input">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary bg-white border ms-n5" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
            <a class="bi bi-cart" style="font-size: 20px; padding: 0 2%; color: black" href="cart.php"></a>
        </div>
    </div>
</nav>

<script>
    $( document ).ready(function() {
        //NAVBAR SCROLL FUNCTION
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {

            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                console.log("scrollFunction");
                document.getElementById("navbar").style.background = "#f8f9fa";
            } else {

                document.getElementById("navbar").style.background = "none";
            }


        }
    });

</script>