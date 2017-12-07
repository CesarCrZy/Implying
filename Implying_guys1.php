<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
        <title>Guys</title>
        <link rel="stylesheet" href="css/bootstrap-1.css">
        <link rel="stylesheet" href="css/Estilo_IMLRE_products.css">
        <link rel="shortcut icon" type="image/x-icon" href="Iconos/favicon.ico">
    </head>
    <body>
    <body onload="setInterval('Blink()',500)">
        <nav class="navbar navbar-inverse navbar-dark navbar-fixed-top bg-dark">
            <section id="titulo">
                <h1><span><b>Implying Mexicans Listen Real Emo</b></span></h1>
                <h1><blink>Merch for everybody!</blink></h1>
            </section>
            <section id="left">
                <button><a href="Implying1.php">Home</a></button>
                <button><a href="Implying_merch1.php">Merch</a></button>
                <button><a href="#">Coming Events</a></button>
                <button><a href="#">Blog</a></button>
                <button><a href="#">Features</a></button>
                <button><a href="#">Contact Us</a></button>
            </section>
            <section id="login">
            <div id="d">
            <?php
                session_start();
                if(isset($_SESSION["login"])){
                    echo "<h1> $_SESSION[login]</h1>";
                }
                else{
                    header("Location: http://localhost/Proyecto/Implying_guys.php");
                   
                }
            
            
             ?>
            </div>
            <button><h1>Cart</h1></button>
            <button><a href="logout.php">Log out</a></button>
            </section>   
        </nav>
        <nav id="main-nav">
            <section class="renglon">   
                <div class="seccion-1" id="menu" name="Main Menu">
                    <div class="link">
                        <section id="main menu-nav">
                            <button><a href="Implying1.php">Home</a></button>
                            <button><a href="Implying_street1.php">Streetwear</a></button>
                            <button><a href="Implying_guys1.php">Guys</a></button>
                            <button><a href="Implying_girls1.php">Girls</a></button>
                            <button><a href="Implying_merch1.php">Music</a></button>
                        </section>
                    </div>
                </div>
            </section>
        </nav>
        <nav class="products">
            <section class="products-grid">
                <div class="every">
                    <section class="merch-1">
                        <div class="product-1">
                            <div class="imagen" id="uno">
                                <img src="Imagenes/vans.jpg" title="Vans Logo - T-shirt" id="amfoot">
                            </div>
                            <div class="name">
                                <a>Vans Logo - T-shirt</a>
                            </div>
                            <div class="precio">
                                <a>$15.00</a>
                            </div>
                            <div class="cart">
                                <button>Add To Cart</button>
                            </div>
                        </div>
                        <div class="product-2">
                            <div class="imagen" id="dos">
                                <img src="Imagenes/sweater.jpg" title="Bye Bye - Sweater Gray" id="des">
                            </div>
                            <div class="name">
                                <a>Bye Bye - Sweater Gray</a>
                            </div>
                            <div class="precio">
                                <a>$15.00</a>
                            </div>
                            <div class="cart">
                                <button>Add To Cart</button>
                            </div>
                        </div>
                        <div class="product-3">
                            <div class="imagen" id="tres">
                                <img src="Imagenes/doge.jpg" title="Doge - Christmas Sweater" id="bli">
                            </div>
                            <div class="name">
                                <a>Doge - Christmas Sweater</a>
                            </div>
                            <div class="precio">
                                <a>$16.00</a>
                            </div>
                            <div class="cart">
                                <button>Add To Cart</button>
                            </div>
                        </div>
                        <div class="product-4">
                            <div class="imagen" id="cuatro">
                                <img src="Imagenes/jack.jpg" title="Men's Dryzzle - Jacket" id="neck">
                            </div>
                            <div class="name">
                                <a>Men's Dryzzle - Jacket</a>
                            </div>
                            <div class="precio">
                                <a>$18.00</a>
                            </div>
                            <div class="cart">
                                <button>Add To Cart</button>
                            </div>
                        </div>
                        <div class="product-5">
                            <div class="imagen" id="cinco">
                                <img src="Imagenes/strip.jpg" title="Revealed - Long Fit" id="chon">
                            </div>
                            <div class="name">
                                <a>Revealed - Long Fit</a>
                            </div>
                            <div class="precio">
                                <a>$12.00</a>
                            </div>
                            <div class="cart">
                                <button>Add To Cart</button>
                            </div>
                        </div>
                        <div class="product-6">
                            <div class="imagen" id="seis">
                                <img src="Imagenes/vader.jpg" title="Star Wars - Vader T-shirt" id="mobo">
                            </div>
                            <div class="name">
                                <a>Star Wars - Vader T-shirt</a>
                            </div>
                            <div class="precio">
                                <a>$11.00</a>
                            </div>
                            <div class="cart">
                                <button>Add To Cart</button>
                            </div>
                        </div>
                        <div class="product-7">
                            <div class="imagen" id="siete">
                                <img src="Imagenes/puni.jpg" title="The Punisher - Skull T-shirt" id="jolis">
                            </div>
                            <div class="name">
                                <a>The Punisher - Skull T-shirt</a>
                            </div>
                            <div class="precio">
                                <a>$12.00</a>
                            </div>
                            <div class="cart">
                                <button>Add To Cart</button>
                            </div>
                        </div>
                        <div class="product-8">
                            <div class="imagen" id="siete">
                                <img src="Imagenes/mario.jpg" title="Nintendo - SMB T-shirt" id="bn">
                            </div>
                            <div class="name">
                                <a>Nintendo - SMB T-shirt</a>
                            </div>
                            <div class="precio">
                                <a>$14.00</a>
                            </div>
                            <div class="cart">
                                <button>Add To Cart</button>
                            </div>
                        </div>
                    </section>
                </div>
            </section>    
        </nav>
        <div class="connect">
                <section class="metodos">
                    <button><div class="contact-phone">
                        <img src="Iconos/if_aiga_telephone_bg_134149.png"/>
                        <a>(+52) 618-169-2852</a>
                    </div></button>
                </section>
                <section class="contact-profiles">
                    <button><img src="Iconos/if_facebook-hex_278405.png"/></button>
                    <button><img src="Iconos/if_twitter-hex_278387.png"/></button>
                    <button><img src="Iconos/if_instagram-hex_278398.png"/></button>
                    <button><img src="Iconos/if_yt-hex_278390.png"/></button>
                </section>
            </div>
            <div class="down">
                <section class="copy">
                    <p>©Implying Mexicans Listen Real Emo a divison of Group IMLRE</p>
                </section>
                <section id="titulo-bajo">
                    <img src="banner.jpg"/>
               </section>
               <section id="down-buttom">
                    <button><a href="Implying1.php">Home</a></button>
                    <button><a href="Implying_merch1.php">Merch</a></button>
                    <button ><a href="#">Coming Events</a></button>
                    <button><a href="#">Blog</a></button>
                    <button><a href="#">Features</a></button>
                    <button><a href="#">Contact Us</a></button>
                </section>
               <section class="pay">
                    <img src="Iconos/if_visa_2593666.png"/>
                    <img src="Iconos/if_Mastercard-Straight_70594.png"/>
                    <img src="Iconos/if_american-express-curved_38590.png"/>
                    <img src="Iconos/if_payment_method_paypal_206675.png"/>
                </section>
            </div>
            <script>
       function Blink()
        {
            var ElemsBlink = document.getElementsByTagName('blink');
            for(var i=0;i<ElemsBlink.length;i++)
                ElemsBlink[i].style.visibility = ElemsBlink[i].style.visibility
                =='visible' ?'hidden':'visible';
                }
    </script>
    </body>
</html>