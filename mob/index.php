<?php
    ini_set('display_errors', 1);
    require_once('../TwitterAPIExchange.php');
    require_once('../query.php');
    $TotalTweets = count($tweetsArray['statuses']);
    $AllTweets = $TotalTweets;

    $TweetsLeft = 60 - $TotalTweets;
    
    // if($TotalTweets < 3){
    //     $TweetsLeft = 3 - $TotalTweets;
    // }elseif($TotalTweets < 7){
    //     $TweetsLeft = 7 - $TotalTweets;
    // }elseif($TotalTweets < 13){
    //     $TweetsLeft = 13 - $TotalTweets;
    // }elseif($TotalTweets < 19){
    //     $TweetsLeft = 19 - $TotalTweets;
    // }elseif($TotalTweets < 25){
    //     $TweetsLeft = 25 - $TotalTweets;
    // }elseif($TotalTweets < 31){
    //     $TweetsLeft = 31 - $TotalTweets;
    // }elseif($TotalTweets < 37){
    //     $TweetsLeft = 37 - $TotalTweets;
    // }elseif($TotalTweets < 43){
    //     $TweetsLeft = 43 - $TotalTweets;
    // }elseif($TotalTweets < 49){
    //     $TweetsLeft = 49 - $TotalTweets;
    // }elseif($TotalTweets < 55){
    //     $TweetsLeft = 55 - $TotalTweets;
    // }elseif($TotalTweets < 61){
    //     $TweetsLeft = 61 - $TotalTweets;
    // }elseif($TotalTweets < 67){
    //     $TweetsLeft = 67 - $TotalTweets;
    // }elseif($TotalTweets < 73){
    //     $TweetsLeft = 73 - $TotalTweets;
    // }elseif($TotalTweets < 79){
    //     $TweetsLeft = 79 - $TotalTweets;
    // }elseif($TotalTweets < 85){
    //     $TweetsLeft = 85 - $TotalTweets;
    // }elseif($TotalTweets < 91){
    //     $TweetsLeft = 91 - $TotalTweets;
    // }elseif($TotalTweets < 97){
    //     $TweetsLeft = 97 - $TotalTweets;
    // }elseif($TotalTweets < 103){
    //     $TweetsLeft = 103 - $TotalTweets;
    // }elseif($TotalTweets < 109){
    //     $TweetsLeft = 109 - $TotalTweets;
    // }elseif($TotalTweets < 115){
    //     $TweetsLeft = 115 - $TotalTweets;
    // }elseif($TotalTweets < 121){
    //     $TweetsLeft = 121 - $TotalTweets;
    // }elseif($TotalTweets < 127){
    //     $TweetsLeft = 127 - $TotalTweets;
    // }elseif($TotalTweets < 133){
    //     $TweetsLeft = 133 - $TotalTweets;
    // }elseif($TotalTweets < 139){
    //     $TweetsLeft = 139 - $TotalTweets;
    // }elseif($TotalTweets < 145){
    //     $TweetsLeft = 145 - $TotalTweets;
    // }elseif($TotalTweets < 151){
    //     $TweetsLeft = 151 - $TotalTweets;
    // }elseif($TotalTweets < 157){
    //     $TweetsLeft = 157 - $TotalTweets;
    // }elseif($TotalTweets < 163){
    //     $TweetsLeft = 163 - $TotalTweets;
    // }elseif($TotalTweets < 169){
    //     $TweetsLeft = 169 - $TotalTweets;
    // }elseif($TotalTweets < 175){
    //     $TweetsLeft = 175 - $TotalTweets;
    // }elseif($TotalTweets < 181){
    //     $TweetsLeft = 181 - $TotalTweets;
    // }elseif($TotalTweets < 187){
    //     $TweetsLeft = 187 - $TotalTweets;
    // }elseif($TotalTweets < 193){
    //     $TweetsLeft = 193 - $TotalTweets;
    // }elseif($TotalTweets < 199){
    //     $TweetsLeft = 199 - $TotalTweets;
    // }elseif($TotalTweets < 205){
    //     $TweetsLeft = 205 - $TotalTweets;
    // }elseif($TotalTweets < 211){
    //     $TweetsLeft = 211 - $TotalTweets;
    // }elseif($TotalTweets < 217){
    //     $TweetsLeft = 217 - $TotalTweets;
    // }elseif($TotalTweets < 223){
    //     $TweetsLeft = 223 - $TotalTweets;
    // }elseif($TotalTweets < 229){
    //     $TweetsLeft = 229 - $TotalTweets;
    // }elseif($TotalTweets < 235){
    //     $TweetsLeft = 235 - $TotalTweets;
    // }elseif($TotalTweets < 241){
    //     $TweetsLeft = 241 - $TotalTweets;
    // }elseif($TotalTweets < 247){
    //     $TweetsLeft = 247 - $TotalTweets;
    // }elseif($TotalTweets < 253){
    //     $TweetsLeft = 253 - $TotalTweets;
    // }elseif($TotalTweets < 259){
    //     $TweetsLeft = 259 - $TotalTweets;
    // }elseif($TotalTweets < 265){
    //     $TweetsLeft = 265 - $TotalTweets;
    // }elseif($TotalTweets < 271){
    //     $TweetsLeft = 271 - $TotalTweets;
    // }elseif($TotalTweets < 277){
    //     $TweetsLeft = 277 - $TotalTweets;
    // }elseif($TotalTweets < 283){
    //     $TweetsLeft = 283 - $TotalTweets;
    // }elseif($TotalTweets < 289){
    //     $TweetsLeft = 289 - $TotalTweets;
    // }elseif($TotalTweets < 295){
    //     $TweetsLeft = 295 - $TotalTweets;
    // }elseif($TotalTweets < 301){
    //     $TweetsLeft = 301 - $TotalTweets;
    // }elseif($TotalTweets < 307){
    //     $TweetsLeft = 307 - $TotalTweets;
    // }elseif($TotalTweets < 313){
    //     $TweetsLeft = 313 - $TotalTweets;
    // }elseif($TotalTweets < 319){
    //     $TweetsLeft = 319 - $TotalTweets;
    // }elseif($TotalTweets < 325){
    //     $TweetsLeft = 325 - $TotalTweets;
    // }elseif($TotalTweets < 331){
    //     $TweetsLeft = 331 - $TotalTweets;
    // }elseif($TotalTweets < 337){
    //     $TweetsLeft = 337 - $TotalTweets;
    // }elseif($TotalTweets < 343){
    //     $TweetsLeft = 343 - $TotalTweets;
    // }elseif($TotalTweets < 349){
    //     $TweetsLeft = 349 - $TotalTweets;
    // }elseif($TotalTweets < 365){
    //     $TweetsLeft = 365 - $TotalTweets;
    // }elseif($TotalTweets < 400){
    //     $TweetsLeft = 0;
    // }

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pinche Blasfemia</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="BLASFEMIA
        Es en realidad la libertad de expresarte sin limitaciones,
        romper las barreras de la moral y la sociedad 
        para dejar salir a tu yo verdadero.

        Es cierto que las palabras pueden ser balas, pero muchas veces solo 
        apuntan al aire y no a la persona, puedes relajarte y gritar lo que te plazca.

        Libérate, blasfema..." />
        <meta name="keywords" content="Blasfemia, blasfemia, Pinche, pinche, Vida, vida, Zine, zine, México, méxico, MX, mx, ilustracion, ilustración, ilustration, Andrew, andrew, Alva, alva, interactive, interactivo, digital, pinche blasfemia" />

    
        <meta property="og:title" content="Pinche Blasfemia" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="http://luckyideas.mx/blasfemia/img/share-graph.jpg" />
        <meta property="og:url" content="http://luckyideas.mx/blasfemia/" />
        <meta property="og:description" content="BLASFEMIA
        Es en realidad la libertad de expresarte sin limitaciones,
        romper las barreras de la moral y la sociedad 
        para dejar salir a tu yo verdadero.

        Es cierto que las palabras pueden ser balas, pero muchas veces solo 
        apuntan al aire y no a la persona, puedes relajarte y gritar lo que te plazca.

        Libérate, blasfema..." />

        <link rel="icon" 
        type="image/png" 
        href="../favicon.png">

        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/main-mob.css">
        <script src="../js/vendor/modernizr-2.6.2.min.js"></script>

        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '1593759844211289',
              xfbml      : true,
              version    : 'v2.3'
            });
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>
        
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <div id="bg-mobile"></div>

        
        <div id="loader">
            <img src="imgs/loader.png" alt="">
        </div>
        
        <div id="fullwrapper" class="hidden">
            <div id="blasfemiamenu-btn">
            </div>

            <div id="about-btn">
                
            </div>

            <div id="share-btn">
                <a href="https://www.facebook.com/sharer/sharer.php?app_id=1593759844211289&sdk=joey&u=http%3A%2F%2Fluckyideas.mx%2Fblasfemia&display=popup&ref=plugin" target="_blank"></a>
            </div>

            <div id="blasfemiamenu-wrapper">
                <a class="twitter-timeline" href="https://twitter.com/hashtag/PincheBlasfemia" data-widget-id="597135752145670144"><span class="pincheinter">#PINCHE INTERNET!</span> <br> Recarga la pagina</a>

            </div>


            <div id="about-wrapper">
                <h1> Blasfemia </h1>
                <p> Por cada <span class="hashtag">#PincheBlasfemia</span> que dejes salir estarás rompiendo
                    la prisión que te encierra. Después de gritar tu Blasfemia recarga la página para verlo. <br><br>

                    Para vivir una experiencia distinta visita el sitio desde tu Tablet / Computadora. <br><br>
            
                    <span class="reminder">
                        <?php
                            echo "Llevamos ";


                            echo "<span class='hashtag'>".$AllTweets."</span>";


                            if($AllTweets == 1){
                                echo " Blasfemia!";
                            }else{
                                echo " Blasfemias!";
                            }
                            
                        ?>

                        <br><br>*La pagina se recarga automaticamente cada 90 segundos.
                    </span>
                </p>

            </div>


            <div class="vignete">
                <img src="imgs/Blasfemia-Vignete-Mob.png" alt="">

            </div>


            <div id="blasfemiawrapper">

                <div id="svgswrapper">
                    <div id="spitwrapper">

                        <div id="spithere" class="svgbox spitpos layer laying" data-depth="1.00">
                            <img src="imgs/Purple Spit.png" alt="">
                            
                        </div>
                        <div id="spithere" class="svgbox spitpos layer laying" data-depth="2.00">
                            <img src="imgs/Red Spit.png" alt="">
                            
                        </div>
                        <div id="spithere" class="svgbox spitpos layer laying" data-depth="0.40">
                            <img src="imgs/Blue Spit.png" alt="">
                            
                        </div>
                    </div>


                
                    <div id="lights" class="svgbox">
                        <img class="layer" src="imgs/Lightframe.png" alt="Pinche Blasfemia" data-depth="0.05">
                        
                    </div>

                
                    <div id="statue" class="stonebox">

                        <?php
                            if ($TotalTweets < 1) {
                                echo "<img src='../img/stone-frames/Frame00.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 2) {
                                echo "<img src='../img/stone-frames/Frame01.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 3) {
                                echo "<img src='../img/stone-frames/Frame02.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 4) {
                                echo "<img src='../img/stone-frames/Frame03.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 5) {
                                echo "<img src='../img/stone-frames/Frame04.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 6) {
                                echo "<img src='../img/stone-frames/Frame05.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 7) {
                                echo "<img src='../img/stone-frames/Frame06.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 8) {
                                echo "<img src='../img/stone-frames/Frame07.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 9) {
                                echo "<img src='../img/stone-frames/Frame08.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 10) {
                                echo "<img src='../img/stone-frames/Frame09.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 11) {
                                echo "<img src='../img/stone-frames/Frame10.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 12) {
                                echo "<img src='../img/stone-frames/Frame11.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 13) {
                                echo "<img src='../img/stone-frames/Frame12.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 14) {
                                echo "<img src='../img/stone-frames/Frame13.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 15) {
                                echo "<img src='../img/stone-frames/Frame14.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 16) {
                                echo "<img src='../img/stone-frames/Frame15.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 17) {
                                echo "<img src='../img/stone-frames/Frame16.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 18) {
                                echo "<img src='../img/stone-frames/Frame17.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 19) {
                                echo "<img src='../img/stone-frames/Frame18.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 20) {
                                echo "<img src='../img/stone-frames/Frame19.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 21) {
                                echo "<img src='../img/stone-frames/Frame20.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 22) {
                                echo "<img src='../img/stone-frames/Frame21.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 23) {
                                echo "<img src='../img/stone-frames/Frame22.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 24) {
                                echo "<img src='../img/stone-frames/Frame23.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 25) {
                                echo "<img src='../img/stone-frames/Frame24.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 26) {
                                echo "<img src='../img/stone-frames/Frame25.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 27) {
                                echo "<img src='../img/stone-frames/Frame26.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 28) {
                                echo "<img src='../img/stone-frames/Frame27.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 29) {
                                echo "<img src='../img/stone-frames/Frame28.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 30) {
                                echo "<img src='../img/stone-frames/Frame29.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 31) {
                                echo "<img src='../img/stone-frames/Frame30.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 32) {
                                echo "<img src='../img/stone-frames/Frame31.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 33) {
                                echo "<img src='../img/stone-frames/Frame32.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 34) {
                                echo "<img src='../img/stone-frames/Frame33.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 35) {
                                echo "<img src='../img/stone-frames/Frame34.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 36) {
                                echo "<img src='../img/stone-frames/Frame35.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 37) {
                                echo "<img src='../img/stone-frames/Frame36.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 38) {
                                echo "<img src='../img/stone-frames/Frame37.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 39) {
                                echo "<img src='../img/stone-frames/Frame38.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 40) {
                                echo "<img src='../img/stone-frames/Frame39.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 41) {
                                echo "<img src='../img/stone-frames/Frame40.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 42) {
                                echo "<img src='../img/stone-frames/Frame41.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 43) {
                                echo "<img src='../img/stone-frames/Frame42.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 44) {
                                echo "<img src='../img/stone-frames/Frame43.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 45) {
                                echo "<img src='../img/stone-frames/Frame44.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 46) {
                                echo "<img src='../img/stone-frames/Frame45.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 47) {
                                echo "<img src='../img/stone-frames/Frame46.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 48) {
                                echo "<img src='../img/stone-frames/Frame47.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 49) {
                                echo "<img src='../img/stone-frames/Frame48.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 50) {
                                echo "<img src='../img/stone-frames/Frame49.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 51) {
                                echo "<img src='../img/stone-frames/Frame50.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 52) {
                                echo "<img src='../img/stone-frames/Frame51.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 53) {
                                echo "<img src='../img/stone-frames/Frame52.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 54) {
                                echo "<img src='../img/stone-frames/Frame53.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 55) {
                                echo "<img src='../img/stone-frames/Frame54.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 56) {
                                echo "<img src='../img/stone-frames/Frame55.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 57) {
                                echo "<img src='../img/stone-frames/Frame56.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 58) {
                                echo "<img src='../img/stone-frames/Frame57.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 59) {
                                echo "<img src='../img/stone-frames/Frame58.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 60) {
                                echo "<img src='../img/stone-frames/Frame59.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 61) {
                                echo "<img src='../img/stone-frames/Frame60.png' alt='Libérate'>";
                            }
                            
                        ?>
                        
                        <?php
                            // if ($TotalTweets < 3) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame00.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 7) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame01.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 13) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame02.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 19) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame03.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 25) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame04.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 31) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame05.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 37) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame06.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 43) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame07.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 49) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame08.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 55) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame09.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 61) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame10.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 67) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame11.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 73) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame12.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 79) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame13.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 85) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame14.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 91) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame15.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 97) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame16.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 103) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame17.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 109) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame18.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 115) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame19.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 121) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame20.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 127) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame21.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 133) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame22.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 139) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame23.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 145) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame24.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 151) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame25.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 157) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame26.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 163) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame27.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 169) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame28.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 175) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame29.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 181) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame30.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 187) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame31.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 193) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame32.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 199) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame33.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 205) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame34.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 211) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame35.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 217) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame36.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 223) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame37.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 229) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame38.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 235) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame39.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 241) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame40.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 247) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame41.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 253) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame42.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 259) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame43.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 265) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame44.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 271) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame45.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 277) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame46.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 283) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame47.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 289) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame48.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 295) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame49.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 301) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame50.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 307) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame51.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 313) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame52.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 319) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame53.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 325) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame54.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 331) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame55.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 337) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame56.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 343) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame57.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 349) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame58.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 365) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame59.png' alt='Libérate' data-depth='0.05'>";
                            // }elseif ($TotalTweets < 400) {
                            //     echo "<img class='layer' src='../img/stone-frames/Frame60.png' alt='Libérate' data-depth='0.05'>";
                            // }
                            
                        ?>

                    </div>

                    


                </div>

                <div class="blasfemiastotales">
                    <?php
                        if($TweetsLeft == 1){
                            echo "<p> Falta ";
                        }else{
                            echo "<p> Faltan ";
                        }


                        echo $TweetsLeft;


                        if($TweetsLeft == 1){
                            echo " Tweet! </p>";
                        }else{
                            echo " Tweets! </p>";
                        }
                        
                    ?>
                    
                </div>

            </div>


        </div>
        
                    








        <script src="../js/parallax.js"></script>
        <script>
            var spits = document.getElementById('spitwrapper');
            var parallax = new Parallax(spits);

            var statue = document.getElementById('statue');
            var parallax2 = new Parallax(statue);
            
            var lights = document.getElementById('lights');
            var parallax3 = new Parallax(lights);



        </script>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="../js/plugins.js"></script>
        <script src="../js/main-mob.js"></script>

        <script type="text/javascript">
            $(window).load(function() {
                $("#loader").fadeOut('slow');
                $('#fullwrapper').removeClass('hidden');
            });
        </script>

        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-63516008-1');ga('send','pageview');
        </script>
    </body>
</html>

