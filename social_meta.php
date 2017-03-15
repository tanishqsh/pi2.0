<?php

/**
 * Used for generating meta for several social medias
 * User: tanishqsharma
 * Date: 03/03/17
 * Time: 8:08 AM
 */
class twitter_meta
{
    function generateTwitterMeta($title)
    {
        echo "<!-- Twitter Meta -->";
        echo "\n";
        $site = "@pehchaanindia";
        $description = "Pehchaan India is a leading travel solution and custom holiday generator. 
        We sell magnificent experiences which you will remember all your life.";
        echo '<meta name="twitter:card" content="summary" />';
        echo "\n";
        echo '<meta name="twitter:site" content="'.$site.' " />';
        echo "\n";
        echo '<meta name="twitter:title" content="'.$title.'" />';
        echo "\n";
        echo '<meta name="twitter:description" content="'.$description.'" />';
        /* echo '<meta name="twitter:image" content="https://farm6.staticflickr.com/5510/14338202952_93595258ff_z.jpg" />'; */
    }

    function generatefacebookMeta()
    {
        echo '<meta property="og:url"                content="http://pehchaanindia.com/" />';
        echo '<meta property="og:title"              content="Pehchaan India - We Sell Experiences" />';
        echo '<meta property="og:description"        content="Pehchaan India is a leading travel solution and custom holiday generator.
        We sell magnificent experiences which you will remember all your life." />';
        echo '<meta property="og:image"              content="http://pehchaanindia.com/pi2.jpg" />';
    }


    /*
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# product: http://ogp.me/ns/product#">
<meta property="fb:app_id"                       content="302184056577324" />
<meta property="og:type"                         content="product" />
<meta property="og:url"                          content="Put your own URL to the object here" />
<meta property="og:title"                        content="Sample Product" />
<meta property="og:image"                        content="https://s-static.ak.fbcdn.net/images/devsite/attachment_blank.png" />
<meta property="product:original_price:amount"   content="Sample Original Price: " />
<meta property="product:original_price:currency" content="Sample Original Price: " />
<meta property="product:pretax_price:amount"     content="Sample Pre-tax Price: " />
<meta property="product:pretax_price:currency"   content="Sample Pre-tax Price: " />
<meta property="product:price:amount"            content="Sample Price: " />
<meta property="product:price:currency"          content="Sample Price: " />
<meta property="product:shipping_cost:amount"    content="Sample Shipping Cost: " />
<meta property="product:shipping_cost:currency"  content="Sample Shipping Cost: " />
<meta property="product:weight:value"            content="Sample Weight: Value" />
<meta property="product:weight:units"            content="Sample Weight: Units" />
<meta property="product:shipping_weight:value"   content="Sample Shipping Weight: Value" />
<meta property="product:shipping_weight:units"   content="Sample Shipping Weight: Units" />
<meta property="product:sale_price:amount"       content="Sample Sale Price: " />
<meta property="product:sale_price:currency"     content="Sample Sale Price: " />
<meta property="product:sale_price_dates:start"  content="Sample Sale Price Dates: Start" />
<meta property="product:sale_price_dates:end"    content="Sample Sale Price Dates: End" />

<meta property="og:url"                content="http://pehchaanindia.com/" />
<meta property="og:title"              content="Pehchaan India - We Sell Experiences" />
<meta property="og:description"        content="Pehchaan India is a leading travel solution and custom holiday generator.
        We sell magnificent experiences which you will remember all your life." />
<meta property="og:image"              content="http://pehchaanindia.com/pi2.jpg" />
    */
}

?>

