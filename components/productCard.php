<style type="text/css">
    productContainer{
        padding-top: 1%;
        padding-bottom: 1%;
    }
    product{
        display: block;
        padding: 5% 5%;
        background: white;
        border: black 1px solid !important;
        height: 100%;
    }
    .productImg{
        display: block;
        width: 50%;
        object-fit: contain;
        margin-left: auto;
        margin-right: auto;
        padding-bottom: 3%;
    }
    productName{
        font-weight: bold;
        display: block;
    }
    productDetails{
        display: block;
        float: left;
        font-size: 8px;
        padding-bottom: 5%;
    }
    price{
        display: block;
        float: right;
        font-weight: bold;
    }
</style>
<?php


class productCard
{

    private $productName, $productDimensions, $surfaceFinish, $price, $imgSrc;

    function __construct($productName, $productDimensions, $surfaceFinish, $price, $imgSrc)
    {
        $this->productName = $productName;
        $this->productDimensions = $productDimensions;
        $this->surfaceFinish = $surfaceFinish;
        $this->price = $price;
        $this->imgSrc = $imgSrc;
    }

    function set_productName($productName){
        $this->productName = $productName;
    }
    function set_productDimensions($productDimensions){
        $this->productDimensions = $productDimensions;
    }
    function set_surfaceFinish($surfaceFinish){
        $this->surfaceFinish = $surfaceFinish;
    }
    function set_price($price){
        $this->price = $price;
    }
    function set_imgSrc($imgSrc){
        $this->imgSrc = $imgSrc;
    }

    function returnProductCard(){
        $productCard = '
        <productContainer class="col-sm-4">
        <a href="product.php" class="btn-light">
        <product>
        <img class="productImg" src="img/'. $this->imgSrc .'"/>
        <productName>' . $this->productName . '</productName>
        <productDetails>
        <productDimensions>' . $this->productDimensions . '</productDimensions>
        <br/>
        <surfaceFinish>' . $this->surfaceFinish . '</surfaceFinish>
        </productDetails>
        <price>$' . $this->price . '/sqm</price>
        </product>
        </a>
        </productContainer>
        ';
        return $productCard;
    }

}