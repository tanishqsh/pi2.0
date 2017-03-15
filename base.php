<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pehchaan India - We sell experiences!</title>

    <?php include "import-dilect.php"; ?>

    <?php include 'social_meta.php';
    $meta_var = new twitter_meta();
    $meta_var->generateTwitterMeta("Pehchaan India - We sell experiences!");
    $meta_var->generatefacebookMeta();
    ?>

</head>

<style>
    @media only screen and (max-width: 1000px) {
        .homeMods {
           display: none;
        }

        .MobMods{
            display: inherit;
        }

        .copyrightBar{
            margin-top: 50px;
            margin-left:10px;
            margin-right:10px;
            position: relative;
            text-align: left;
        }

        .pikeFooter .col-sm-4{
            padding-top:20px;
            text-align: center;
        }

        .connectWithUs{
            text-align: left;
        }

        .Footer1, .Footer2, .Footer3{
            text-align: left;
        }

        .pehchaanIndiaFooter{
            margin-left:10px;
            margin-right:10px;
        }

        .copyText, .paymentLogo{
            text-align: center;
        }

        .onlyMobile{
            display: none;
        }

        .homeScreen{
            height:80vh;
        }

        .hideOnDesktop{
            display: inherit;
        }

        .holidayModule:nth-child(2n){
        }

        .bigFrontText{
            margin-top: 30px;
        }
    }
</style>

<body>

<!-- Starts -->

<div id="homeS" style="position:relative;" class="container-fluid homeScreen text-center">
    <div style="" class="blackOverlay">

        <?php include 'navigation.php' ?>


        <!-- New Section -->
        <div class="container-fluid text-center" style="color: #FFF; margin-top:50px; margin-bottom:50px; margin:75px; min-height:65vH;">
            <div class="row">
                <div class="col-sm-12">

                    <p  class="bigFrontText"><img width="150px" class="frontImage" src="svgs/clienticon1-pehchaanindia.png"> <a id="discoverButton" style="text-decoration:none; color: #ededed;"><button style="margin-top: 20px;"  onclick="scrollToPackages()" class="btn goodH2 discoverButton"  > Explore </button></a> </p>
                    <!-- GET IN TOUCH BUTTON MESSENGER LINK -->
                </div>
            </div>

            <!-- Mobile Mods -->
            <div style="" class="row hideOnDesktop MobMods">
                <div id="firstFeatureMod" class="col-xs-3">
                    <img  width="30px" src="svgs/suitcase.svg"/>
                    <p style="margin-top: 20px;" class="goodH2"> Exotic Itenery </p>
                </div>
                <div class="col-xs-3">
                    <img  width="30px" src="svgs/telemarketer.svg"/>
                    <p style="margin-top: 20px;" class="goodH2"> Create Custom Packages </p>
                </div>
                <div class="col-xs-3">
                    <img  width="30px" src="svgs/24-hours-support.svg"/>
                    <p style="margin-top: 20px;" class="goodH2"> 24/7 Customer Service </p>
                </div>
                <div class="col-xs-3">
                    <img  width="30px" src="payment-icons/tripadvisor.png"/>
                    <p style="margin-top: 20px;" class=""> Excellence Awards' Hotels </p>
                </div>
            </div>

            <!-- Mobile Mods Ends -->

            <div style="" class="row homeMods">
                <div id="firstFeatureMod" class="col-sm-3">
                    <img  width="48px" src="svgs/suitcase.svg"/>
                    <h4 style="margin-top: 20px;" class="goodH2"> Exotic Itenery </h4>
                </div>
                <div class="col-sm-3">
                    <img  width="48px" src="svgs/telemarketer.svg"/>
                    <h4 style="margin-top: 20px;" class="goodH2"> Create Custom Packages </h4>
                </div>
                <div class="col-sm-3">
                    <img  width="48px" src="svgs/24-hours-support.svg"/>
                    <h4 style="margin-top: 20px;" class="goodH2"> 24/7 Customer Service </h4>
                </div>
                <div class="col-sm-3">
                    <img  width="48px" src="payment-icons/tripadvisor.png"/>
                    <h4 style="margin-top: 20px;" class="goodH2"> Excellence Awards' Hotels </h4>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Packages -->
<div  id="packages" class="container-fluid section text-center">
    <!-- Section Heading -->
    <div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
            <!-- Blank content -->
            <p class="titleText"> Our Featured Holidays </p>
        </div>
        <div class="col-sm-4">
            <!-- Blank content -->
        </div>
    </div>
    <!-- Section Contents -->
    <!-- A Single Row -->
    <div class="row">

        <div id="module2" class="col-xs-2 onlyMobile">
        </div>
        <div class="col-sm-4">
            <div onclick="goToModule1()" class="holidayModule">
                <div class="holidayOver">
                    <div class="goodH2">
                        <p class="insideHolidayTitle text-left"> Magical Solang <br> 5D, 6N </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div style="background: url('packages/himachal-beautiful.jpg'); background-position:center; background-size:cover;" class="holidayModule">
                <div class="holidayOver">
                    <div class="goodH2">
                        <p class="insideHolidayTitle text-left"> Himachal Pradesh <br> 5D, 6N</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="module2" class="col-xs-2 onlyMobile">

        </div>
    </div>
    <!-- Single Row Ends -->
    <!-- A Single Row -->
    <div class="row">

        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
        </div>
    </div>
    <!-- Single Row Ends -->
</div>

<div class="container-fluid section text-center">
    <!-- Section Heading -->
    <div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
            <!-- Blank content -->
            <p class="titleText"> Featured Escapes </p>

        </div>
        <div class="col-sm-4">
            <!-- Blank content -->
        </div>
    </div>

    <!-- Single Description - Picture Panel -->
    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-4 text-right">
            <h5>Signature Elegance Of Solang Valley </h5>
            <p style="text-align: justify"> Solang Nala (Valley) derives its name from combination of words Solang (Nearby village) and Nullah (water stream). It is a side valley at the top of the Kullu Valley in Himachal Pradesh, I
                ndia 14 km northwest of the resort town Manali on the way to Rohtang Pass, and is known for its summer and winter sport conditions. </p>
        </div>

        <div class="col-sm-4">

            <div onclick="goToModule1()" class="holidayModule">
                <div class="holidayOver">
                    <div class="goodH2">
                        <p class="insideHolidayTitle text-left"> Magical Solang <br> 5D, 6N </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-2">

        </div>
    </div>
    <!-- Single Description - Picture Panel Ends -->
    <!-- Single Description - Picture Panel -->
    <div class="row">
        <div class="col-sm-2">

        </div>


        <div class="col-sm-4">
            <div onclick="goToModule1()" style="background: url('packages/himachal-beautiful.jpg'); background-position:center; background-size:cover;" class="holidayModule">
                <div class="holidayOver">
                    <div class="goodH2">
                        <p class="insideHolidayTitle text-left"> Himachal Pradesh <br> 5D, 6N</p>
                    </div>
                </div>
            </div>
        </div>

        <div  class="col-sm-4 text-left">
            <h5> Himachal Pradesh </h5>
            <p style="text-align: justify"> Himachal Pradesh is a northern Indian state in the Himalayas. It's home to scenic mountain towns and resorts such as Dalhousie.
                Host to the Dalai Lama, Himachal Pradesh has a strong Tibetan presence.
                This is reflected in its Buddhist temples and monasteries, as well as its vibrant Tibetan New Year celebrations. </p>
        </div>
        <div class="col-sm-2">

        </div>
    </div>
    <!-- Single Description - Picture Panel Ends -->

</div>

<div class="whitespace"></div>

<?php include "footer.php"; ?>

</body>
</html>