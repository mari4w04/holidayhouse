<?php

$sInjectCss = '<link rel="stylesheet" href="css/index.css">';
  

require_once __DIR__.'/top.php'; 
?>

    <div class="page">

<form action="apis/api-be-host.php" method="POST"> 
    <div class="row home-type">
        <h3 class="post-titles">Home Type</h3>
        <div class="post-content">
            <input type="text" name="" placeholder="Apartment">
            <input type="text" name="" placeholder="House">
            <input type="text" name="" placeholder="Condo">
            <input type="text" name="" placeholder="Villa">
        </div>
    </div>
    <div class="row">
        <h3 class="post-titles">Accommodates</h3>
        <div class="post-content col-2">
            <div class="select-css">
                <select name="txtAccommodates">
                    <option value="accommodates1">1</option>
                    <option value="accommodates2">2</option>
                    <option value="accommodates3">3</option>
                    <option value="accommodatesMore">3+</option>
                </select>
            </div>
        <div>
        <label for="">Family Friendly</label>
        <input id="familyFriendly" name="bFamilyFriendly" type="checkbox">
        </div>
        </div>
    </div>

    <div class="row">
        <h3 class="post-titles">Amenities</h3>
        <div class="col-2 post-content">
            <div class="checkbox">
                <label for="">Amenity 1</label>
                <input name="" type="checkbox">
            </div>
            <div class="checkbox">
                <label for="">Amenity 2</label>
                <input name="" type="checkbox">
            </div>
            <div class="checkbox">
                <label for="">Amenity 3</label>
                <input name="" type="checkbox">
            </div>
            <div class="checkbox">
                <label for="">Amenity 4</label>
                <input name="" type="checkbox">
            </div>
            <div class="checkbox">
                <label for="">Amenity 5</label>
                <input name="" type="checkbox">
            </div>
        </div>
    </div> 
    <div class="row">
        <h3 class="post-titles">Cancellation</h3>
        <div class="select-css">
        <select>
            <option value="apartment">7 days prior</option>
            <option value="house">72 hours prior</option>
            <option value="villa">48 hours prior</option>
            <option value="condo">24 hours prior</option>
        </select>
        </div>
    </div>     
    <div class="row">
        <h3 class="post-titles">House Rules</h3>
        <div class="col-2 post-content">
            <div class="checkbox">
                <label for="">Rule 1</label>
                <input name="" type="checkbox">
            </div>
            <div class="checkbox">
                <label for="">Rule 2</label>
                <input name="" type="checkbox">
            </div>
            <div class="checkbox">
                <label for="">Rule 3</label>
                <input name="" type="checkbox">
            </div>
            <div class="checkbox">
                <label for="">Rule 4</label>
                <input name="" type="checkbox">
            </div>
            <div class="checkbox">
                <label for="">Rule 5</label>
                <input name="" type="checkbox">
            </div>
        </div>
    </div>  
    <div class="row">
        <h3 class="post-titles">Price per night</h3>
        <div class="post-content post-price">
            <label for="">400 DKK/night is a recommended price for your area</label>
                <div class="price-input">
                <input id="iPriceNight" name="iPriceNight" type="text" placeholder="Price per night" value="">
                <div class="currency">DKK</div>
            </div>
        </div>
    </div>       
        <button class="btn post-titles">Continue</button>
            </form>


        </div>
    </div>


<?php
require_once __DIR__.'/bottom.php'; 