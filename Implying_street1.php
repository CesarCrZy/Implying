<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
        <title>Streetwear</title>
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
                <button ><a href="#">Coming Events</a></button>
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
                    header("Location: http://localhost/Proyecto/Implying_street.php");
                   
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
                                <img src="Imagenes/spant.jpg" title="Sporty - Pants" id="amfoot">
                            </div>
                            <div class="name">
                                <a>Sporty - Pants</a>
                            </div>
                            <div class="precio">
                                <a>$25.00</a>
                            </div>
                            <div class="cart">
                                <button>Add To Cart</button>
                            </div>
                        </div>
                        <div class="product-2">
                            <div class="imagen" id="dos">
                                <img src="Imagenes/jwom2.jpg" title="Freezyn - Jacket Woman" id="des">
                            </div>
                            <div class="name">
                                <a>Freezyn - Jacket Woman</a>
                            </div>
                            <div class="precio">
                                <a>$35.00</a>
                            </div>
                            <div class="cart">
                                <button>Add To Cart</button>
                            </div>
                        </div>
                        <div class="product-3">
                            <div class="imagen" id="tres">
                                <img src="Imagenes/jeans.jpg" title="Slim Blue - Slim Man" id="bli">
                            </div>
                            <div class="name">
                                <a>Slim Blue - Slim Man</a>
                            </div>
                            <div class="precio">
                                <a>$19.00</a>
                            </div>
                            <div class="cart">
                                <button>Add To Cart</button>
                            </div>
                        </div>
                        <div class="product-4">
                            <div class="imagen" id="cuatro">
                                <img src="Imagenes/skn.jpg" title="Slim Blue - Skinny Woman" id="neck">
                            </div>
                            <div class="name">
                                <a>Slim Blue - Skinny Woman</a>
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
                                <img src="Imagenes/shirt3.jpg" title="Time Box - Shirt Man" id="chon">
                            </div>
                            <div class="name">
                                <a>Time Box - Shirt Man</a>
                            </div>
                            <div class="precio">
                                <a>$22.00</a>
                            </div>
                            <div class="cart">
                                <button>Add To Cart</button>
                            </div>
                        </div>
                        <div class="product-6">
                            <div class="imagen" id="seis">
                                <img src="Imagenes/brix.jpg" title="Brix - Hat Man" id="mobo">
                            </div>
                            <div class="name">
                                <a>Brix - Hat Man</a>
                            </div>
                            <div class="precio">
                                <a>$18.00</a>
                            </div>
                            <div class="cart">
                                <button>Add To Cart</button>
                            </div>
                        </div>
                        <div class="product-7">
                            <div class="imagen" id="siete">
                                <img src="Imagenes/run2.jpg" title="The Way - Running Pants Man" id="jolis">
                            </div>
                            <div class="name">
                                <a>The Way - Running Pants Man</a>
                            </div>
                            <div class="precio">
                                <a>$30.00</a>
                            </div>
                            <div class="cart">
                                <button>Add To Cart</button>
                            </div>
                        </div>
                        <div class="product-8">
                            <div class="imagen" id="siete">
                                <img src="Imagenes/quick.jpg" title="Kroogen - Baseball T-shirt" id="bn">
                            </div>
                            <div class="name">
                                <a>Kroogen - Baseball T-shirt</a>
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