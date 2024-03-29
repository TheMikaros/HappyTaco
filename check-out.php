<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>HappyTaco - Checkout </title>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

    <!--  Stylesheets  -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- Bootstrap CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link href="img/logo.png" rel="shortcut icon" />


</head>

<body>
    <!-- barra de navegacion -->
    <?php
    include 'nav.php';
    ?>
    <!-- Main-->
    <!-- Header Info Begin -->
    <div class="header-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 text-left text-lg-center">
                    <div class="header-item">
                        <img src="img/icons/delivery.png" alt="">
                        <p>Envio Gratis En Orden Mayor a $500 Mx</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-lg-center">
                    <div class="header-item">
                        <img src="img/icons/voucher.png" alt="">
                        <p>20% Descuento para Estudihambres</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-lg-center">
                    <div class="header-item">
                        <img src="img/icons/sales.png" alt="">
                        <p>30% Descuento en una mamaduki usando el codigo: FMamaduki</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Info End -->
    <br>


    <hr><br>

    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container text-lg-center">
            <div class="row">

                <img width="100%" height="153" src="img/add.jpg" alt="">

            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <br>
    <hr>
    <br>


    <!-- Cart Total Page Begin -->
    <section class="cart-total-page spad">
        <div class="container">
            <form action="#" class="checkout-form">
                <div class="row">


                    <div class="col-lg-9">

                        <div class="col-lg-12">
                            <hr>
                            <div>
                                <h3>Tu Informacion</h3>
                            </div>
                            <hr>
                        </div>


                        <div id="direccion">
                            <div class="row">
                                <div class="col-lg-2">
                                    <p class="in-name">Nombre*</p>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" placeholder="Nombres">
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" placeholder="Apellido">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <p class="in-name">Direccion*</p>
                                </div>
                                <div class="col-lg-10">
                                    <input type="text">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <p class="in-name">Municipio*</p>
                                </div>
                                <div class="col-lg-10">
                                    <select class="nice-select cart-select country-usa">
                                        <option value="0">Selecciona Alguno</option>
                                        <option value="1">Aguascalientes</option>
                                        <option value="2">Asientos</option>
                                        <option value="3">Calvillo</option>
                                        <option value="4">Cosio</option>
                                        <option value="5">Jesus Maria</option>
                                        <option value="6">Pabellon de Arteaga</option>
                                        <option value="7">Rincon de Romos</option>
                                        <option value="8">San Jose de Gracia</option>
                                        <option value="9">Tepezala</option>
                                        <option value="10">El Llano</option>
                                        <option value="11">San Francisco de los Romo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <p class="in-name">Localidad *</p>
                                </div>
                                <div class="col-lg-10">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <p class="in-name">Codigo Postal/ZIP*</p>
                                </div>
                                <div class="col-lg-10">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <p class="in-name">Telefono*</p>
                                </div>
                                <div class="col-lg-10">
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--  script que me llene la tabla  -->
                    <div class="col-lg-3-disp-table">
                        <div class="order-table" id="table2">
                            <section class="contact-section">
                                <h2>Tu Carrito Esta Vacio!</h2>
                                <hr>
                                <h4>No Hay TAQUITOS!!</h4>
                                <img src="img/espera.gif" alt="nave" style="height: 90%;
											width: 90%;">
                                <h5>Los taquitos probablemente se fueron volando...</h5>
                                <h6>deberias probar comprar mas...</h6>
                                <br>
                            </section>
                        </div>
                    </div>
                </div>

                <!-- Metodos de pago -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="payment-method diff-addr">
                            <hr>
                            <h3>Metodos de Pago</h3>
                            <div>
                                <div>
                                    <button onclick="pagoPaypal()" class="site-btn clear-btn">Paypal
                                        <img src="img/paypal.jpg" alt=""> </button>
                                    <span id="paypal"></span>
                                </div>
                                <div>
                                    <button onclick="pagoTarjeta()" class="site-btn clear-btn">Tarjeta Credito / Debito<img src="img/mastercard.jpg" alt=""></button>
                                    <span id="tarjeta"></span>
                                </div>
                                <div>
                                    <button class="site-btn update-btn" onclick="pagoOXXO()">Pago Mediante Oxxo<img src="img/oxxo.jpg" alt=""></button>
                                    <span id="oxxo"></span>
                                </div>
                                <hr>
                                <br>

                                <div class="row">
                                <div class="col-lg-12 text-right">
                                    <button class="site-btn update-btn"><a href="pago.php" class="primary-btn chechout-btn">Proceder a Pagar</a></button>
                                </div>
                            </div>
                                
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </section>
    <!-- Cart Total Page End -->
    <br><br><br><br>

    <!-- End Main -->
    <script src="js/carritoout.js"></script>

    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- Bootstrap JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>