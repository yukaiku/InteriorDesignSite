<?php


class checkoutProductCard
{
    private $productId, $productName, $productDimensions, $surfaceFinish, $colour, $quantity, $price, $subtotal, $imgSrc;

    function __construct($productId, $productName, $productDimensions, $surfaceFinish, $colour, $quantity, $price, $imgSrc)
    {
        $this->productId = $productId;
        $this->productName = $productName;
        $this->productDimensions = $productDimensions;
        $this->surfaceFinish = $surfaceFinish;
        $this->colour = $colour;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->imgSrc = $imgSrc;
        $this->subtotal = $quantity * $price;
    }

    function returnCheckoutCard(){
        $checkoutCard = '
        <products class="row" style="height: 30vh;">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="img/'. $this->imgSrc .'" style="width: 50%;">
                    </div>
                    <div class="col-sm-6">
                        <div style="width: 50%">
                            <p>' . $this->productName . '</p>
                            <p style="font-size: 13px">Size (mm): ' . $this->productDimensions . ' <br/>
                                Surface Finish: ' . $this->surfaceFinish . '<br/>
                                Colour: ' . $this->colour . '</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1">$' . $this->price . '/sqm</div>
            <div class="col-sm-1">
                <input style="width: 100%" value="'. $this->quantity .'" placeholder="quantity" name="quantity" id="quantity' . $this->productId . '">
            </div>
            <div class="col-sm-1 subtotal" id="subtotal' . $this->productId . '" >$' . $this->subtotal . '</div>
            <div class="col-sm-1">
            <a href="" class="cancelButton" value="productId"><i class="bi bi-x"></i></a>
            </div>
            <hr/>
        </products>
        ';
        return $checkoutCard;
    }
}