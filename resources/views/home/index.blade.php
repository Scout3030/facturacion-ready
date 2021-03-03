<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- SEO Meta Tags -->
        <meta
            name="description"
            content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
        <meta name="author" content="Inovatik">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on
        LinkedIn, Facebook, Google+ -->
        <meta property="og:site_name" content=""/>
        <!-- website name -->
        <meta property="og:site" content=""/>
        <!-- website link -->
        <meta property="og:title" content=""/>
        <!-- title shown in the actual shared post -->
        <meta property="og:description" content=""/>
        <!-- description shown in the actual shared post -->
        <meta property="og:image" content=""/>
        <!-- image link, make sure it's jpg -->
        <meta property="og:url" content=""/>
        <!-- where do you want your post to link to -->
        <meta property="og:type" content="article"/>

        <!-- Website Title -->
        <title>JM Soluciones Digitales</title>

        <!-- Styles -->
        @include('home.partials.css')

        <!-- Favicon -->
        <link rel="icon" href="images/favicon.png">
    </head>
    <body data-spy="scroll" data-target=".fixed-top">
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a
            href="https://api.whatsapp.com/send?phone=51993229053"
            class="float"
            target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>

        <!-- Preloader -->
        <div class="spinner-wrapper">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
        <!-- end of preloader -->

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a>
            -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="{{route('home.index')}}"><img src="{{asset('home/images/logo.svg')}}" alt="alternative"></a>

            <button
                class="btn btn-primary "
                onclick="location.href='https://www.jmsolucionesdigitales.com/login'">Ingresar al Administrador</button>

            <!-- Mobile Menu Toggle Button -->
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <!DOCTYPE html>

                    <html>
                        <head>
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width">
                            <title>JS Bin</title>
                            <style></style>
                        </head>

                    </html>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#header">Inicio
                            <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#pricing">Planes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#request">Solicita Aquí</a>
                    </li>

                    <!-- Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle page-scroll"
                            href="#about"
                            id="navbarDropdown"
                            role="button"
                            aria-haspopup="true"
                            aria-expanded="false">Otros Productos</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('home.mercados') }}">
                                <span class="item-text">Sistema para Mercados</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="{{ route('home.escritorio')}}">
                                <span class="item-text">Sistemas de Escritorio</span></a>
                        </div>
                    </li>
                    <!-- end of dropdown menu -->

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">Contacto</a>
                    </li>
                </ul>
                <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="https://www.facebook.com/jmsolucionesdigitales" target="_blank">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a
                            href="https://www.instagram.com/jmsolucionesdigitales/?hl=es-la"
                            target="_blank">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x"></i>
                        </a>
                    </span>
                </span>
            </div>
        </nav>
        <!-- end of navbar -->
        <!-- end of navigation -->

        <!-- Header -->
        <header id="header" class="header">
            <div class="header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="text-container">
                                <h1>
                                    <span class="turquoise">El Sistema de Venta más completo para tu negocio</span>
                                </h1>
                                <p class="p-large">Gestión y Facturación Electrónica
                                </p>
                                <a class="btn-solid-lg page-scroll" href="#pricing">Adquiere tu plan</a>
                            </div>
                            <!-- end of text-container -->
                        </div>
                        <!-- end of col -->
                        <div class="col-lg-6">
                            <div class="image-container">
                                <img
                                    class="img-fluid"
                                    src="{{asset('home/images/header-teamwork.svg')}}"
                                    alt="alternative">
                            </div>
                            <!-- end of image-container -->
                        </div>
                        <!-- end of col -->
                    </div>
                    <!-- end of row -->
                </div>
                <!-- end of container -->
            </div>
            <!-- end of header-content -->
        </header>
        <!-- end of header -->
        <!-- end of header -->

        <!-- Customers -->
        <div class="slider-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h5>Facturación Electrónica para tu negocio en 24 horas</h5>

                        <!-- Image Slider -->
                        <div class="slider-container">
                            <div class="swiper-container image-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img
                                                class="img-responsive"
                                                src="{{asset('home/images/customer-logo-1.png')}}"
                                                alt="alternative">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img class="img-responsive" src="" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img
                                                class="img-responsive"
                                                src="{{asset('home/images/customer-logo-2.png')}}"
                                                alt="alternative">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img class="img-responsive" src="" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img
                                                class="img-responsive"
                                                src="{{asset('home/images/customer-logo-3.png')}}"
                                                alt="alternative">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img class="img-responsive" src="" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-wrapper -->
                            </div>
                            <!-- end of swiper container -->
                        </div>
                        <!-- end of slider-container -->
                        <!-- end of image slider -->

                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of slider-1 -->
        <!-- end of customers -->

        <!-- Services -->
        <div id="services" class="cards-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Con nuestro sistema de facturación electrónica tendrás todo en un solo lugar</h2>
                        <p class="p-heading p-large">Que te ofrece nuestro sistema</p>
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Card -->
                        <div class="card">
                            <img
                                class="card-image"
                                src="{{asset('home/images/services-icon-1.svg')}}"
                                alt="alternative">
                            <div class="card-body">
                                <h4 class="card-title">Sistema Cloud</h4>
                                <p>Tu información estará respaldada en la nube, accesible las 24 horas del día.</p>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <img
                                class="card-image"
                                src="{{asset('home/images/services-icon-2.svg')}}"
                                alt="alternative">
                            <div class="card-body">
                                <h4 class="card-title">Administrador Web</h4>
                                <p>Controla los indicadores de tu negocio en tiempo real desde un panel web de
                                    reportes.</p>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <img
                                class="card-image"
                                src="{{asset('home/images/services-icon-3.svg')}}"
                                alt="alternative">
                            <div class="card-body">
                                <h4 class="card-title">Control total de productos</h4>
                                <p>Administra tu catálogo de productos y controla tu inventario con alertas de
                                    stock.</p>
                            </div>
                        </div>
                        <!-- end of card -->
                        <!-- Card -->
                        <div class="card">
                            <img
                                class="card-image"
                                src="{{asset('home/images/services-icon-4.svg')}}"
                                alt="alternative">
                            <div class="card-body">
                                <h4 class="card-title">Reportes y Finanzas</h4>
                                <p>Visualiza el desarrollo de tu negocio para que te permita tomar nuevas
                                    decisiones financieras para seguir creciendo.</p>
                            </div>
                        </div>
                        <!-- end of card -->
                        <!-- Card -->
                        <div class="card">
                            <img
                                class="card-image"
                                src="{{asset('home/images/services-icon-5.svg')}}"
                                alt="alternative">
                            <div class="card-body">
                                <h4 class="card-title">Servicio de Post Venta</h4>
                                <p>Un área de soporte lista para ayudar y ofrecer mejoras continuas en el sistema.</p>
                            </div>
                        </div>
                        <!-- end of card -->

                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of cards-1 -->
        <!-- end of services -->

        <!-- Details 1 -->
        <div class="basic-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h2>Todas las herramientas que tu negocio necesita</h2>
                            <p>Vende, factura, gestiona tu stock y obtén reportes de tu negocio en tiempo real.</p>
                            <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">Ver herramientas</a>
                        </div>
                        <!-- end of text-container -->
                    </div>
                    <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img
                                class="img-fluid"
                                src="{{asset('home/images/details-1-office-worker.svg')}}"
                                alt="alternative">
                        </div>
                        <!-- end of image-container -->
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of basic-1 -->
        <!-- end of details 1 -->

        <!-- Details Lightboxes -->
        <!-- Details Lightbox 1 -->
        <div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="container">
                <div class="row">
                    <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                    <div class="col-lg-8">
                        <div class="image-container">
                            <img
                                class="img-fluid"
                                src="{{asset('home/images/details-lightbox-1.svg')}}"
                                alt="alternative">
                        </div>
                        <!-- end of image-container -->
                    </div>
                    <!-- end of col -->
                    <div class="col-lg-4">
                        <h3>Principales herramientas</h3>
                        <hr>

                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Facturación Electrónica</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Punto de Venta</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Productos y Clientes</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Reportes en tiempo real</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Informes de Contabilidad</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Permisos y control de usuarios</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Compras y proveedores</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Control de inventarios</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Control de stock</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Finanzas del Negocio</div>
                            </li>
                        </ul>
                        <h5>Tienda Virtual Opcional</h5>
                        <a class="btn-solid-reg mfp-close page-scroll" href="#request">Solicitar</a>
                        <a class="btn-outline-reg mfp-close as-button" href="#screenshots">Atrás</a>
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of lightbox-basic -->
        <!-- end of details lightbox 1 -->

        <!-- Pricing -->
        <div id="pricing" class="cards-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Elige el plan que mejor se adapte a tus necesidades</h2>
                        <p class="p-heading p-large"></p>
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">FACTURADOR</div>
                                <div class="card-subtitle"></div>
                                <hr class="cell-divide-hr">
                                <div class="price">
                                    <span class="currency">S/</span><span class="value">29.90</span>
                                    <div class="frequency">por mes</div>

                                </div>
                                <hr class="cell-divide-hr">
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">100 comprobantes y un usuario administrador</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Facturación electrónica</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Punto de venta</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Productos y clientes ilimitados</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Reportes en tiempo real</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-times"></i>
                                        <div class="media-body">Control de Usuarios</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-times"></i>
                                        <div class="media-body">Compras y proveedores</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-times"></i>
                                        <div class="media-body">Control de stock</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-times"></i>
                                        <div class="media-body">Control de inventarios</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-times"></i>
                                        <div class="media-body">Finanzas</div>
                                    </li>

                                </ul>
                                <div class="button-wrapper">
                                    <a class="btn-solid-reg page-scroll" href="#request">SOLICITAR</a>
                                </div>
                            </div>
                        </div>
                        <!-- end of card -->
                        <!-- end of card -->

                        <!-- Card-->
                        <div class="card">
                            <div class="label">
                                <p class="best-value">Más Vendido</p>
                            </div>
                            <div class="card-body">
                                <div class="card-title">PLUS</div>
                                <div class="card-subtitle"></div>
                                <hr class="cell-divide-hr">
                                <div class="price">
                                    <span class="currency">S/</span><span class="value">59.90</span>
                                    <div class="frequency">por mes</div>
                                </div>
                                <hr class="cell-divide-hr">
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Comprobantes ilimitados y 5 Usuarios</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Facturación electrónica</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Punto de venta</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Productos y clientes ilimitados</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Reportes en tiempo real</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Control de Usuarios</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Compras y proveedores</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Control de stock</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-times"></i>
                                        <div class="media-body">Control de inventarios</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-times"></i>
                                        <div class="media-body">Finanzas</div>
                                    </li>
                                </ul>
                                <div class="button-wrapper">
                                    <a class="btn-solid-reg page-scroll" href="#request">SOLICITAR</a>
                                </div>
                            </div>
                        </div>
                        <!-- end of card -->
                        <!-- end of card -->

                        <!-- Card-->
                        <div class="card">

                            <div class="card-body">
                                <div class="card-title">PREMIUM</div>
                                <div class="card-subtitle"></div>
                                <hr class="cell-divide-hr">
                                <div class="price">
                                    <span class="currency">S/</span><span class="value">79.90</span>
                                    <div class="frequency">por mes</div>
                                </div>
                                <hr class="cell-divide-hr">
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Comprobantes ilimitados y usuarios ilimitados</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Facturación electrónica</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Punto de venta</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Productos y clientes ilimitados</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Reportes en tiempo real</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Control de Usuarios</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Compras y proveedores</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Control de stock</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Control de inventarios</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">Finanzas</div>
                                    </li>
                                </ul>
                                <div class="button-wrapper">
                                    <a class="btn-solid-reg page-scroll" href="#request">SOLICITAR</a>
                                </div>
                            </div>
                        </div>
                        <!-- end of card -->
                        <!-- end of card -->

                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of cards-2 -->
        <!-- end of pricing -->

        <!-- Request -->
        <div id="request" class="form-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h2>Complete el siguiente formulario para solicitar su plan</h2>
                            <p>JM Soluciones Digitales es una empresa desarrolladora de sofware para micro y
                                pequeñas empresas del Perú, permitiendo tener un mejor manejo del negocio.
                            </p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">
                                        <strong class="blue">CALIDAD Y GARANTÍA</strong>
                                    </div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">
                                        <strong class="blue">SEGURIDAD</strong>
                                    </div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">
                                        <strong class="blue">TECNOLOGÍA VANGUARDISTA</strong>
                                    </div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i>
                                    <div class="media-body">
                                        <strong class="blue">INTERFACES INTUITIVAS</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end of text-container -->
                    </div>
                    <!-- end of col -->
                    <div class="col-lg-6">

                        <!-- Request Form -->
                        <div class="form-container">
                            <form id="requestForm" data-toggle="validator" data-focus="false" action="{{ route('home.send-data') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control-input"
                                        id="rname"
                                        name="rname"
                                        required="required">
                                    <label class="label-control" for="rname">Nombre</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input
                                        type="email"
                                        class="form-control-input"
                                        id="remail"
                                        name="remail"
                                        required="required">
                                    <label class="label-control" for="remail">Correo electrónico</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control-input"
                                        id="rphone"
                                        name="rphone"
                                        required="required">
                                    <label class="label-control" for="rphone">Teléfono</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control-select" name="rselect" id="rselect" required="required">
                                        <option class="select-option" value="" disabled="disabled" selected="selected">Plan a elegir...</option>
                                        <option class="select-option" value="Facturador">Facturador</option>
                                        <option class="select-option" value="Plus">Plus</option>
                                        <option class="select-option" value="Premium">Premium</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="form-control-submit-button">SOLICITAR</button>
                                </div>
                                <div class="form-message">
                                    <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                                </div>
                            </form>
                        </div>
                        <!-- end of form-container -->
                        <!-- end of request form -->

                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of form-1 -->
        <!-- end of request -->

        <!-- Contact -->
        <div id="contact" class="form-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Información de Contacto</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address">No dude en llamarnos o enviarnos un mensaje
                            </li>

                            <li>
                                <i class="fas fa-phone"></i>
                                <a class="turquoise" href="tel:+51 993 229 053">993229053</a>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <a class="turquoise" href="tel:+51 981 165 880">981165880</a>
                            </li>

                            <button
                                style="margin: 8px"
                                class="btn-outline-wsp"
                                onclick="location.href='https://api.whatsapp.com/send?phone=51993229053'"
                                target="_blank">WhatsApp</button>

                        </ul>
                    </div>
                    <!-- end of col -->

                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of form-2 -->
    <!-- end of contact -->

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>Sobre JM Soluciones Digitales</h4>
                        <p>Nos apasiona ofrecerte la mejor solución para las necesidades de tu negocio</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Nuestras Redes Sociales</h4>
                        <span class="fa-stack">
                            <a href="https://www.facebook.com/jmsolucionesdigitales" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>

                        <span class="fa-stack">
                            <a
                                href="https://www.instagram.com/jmsolucionesdigitales/?hl=es-la"
                                target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>

                    </span>
                </div>
            </div>
            <!-- end of col -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container -->
</div>
<!-- end of footer -->
<!-- end of footer -->

<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © 2020
                    <a href="https://jmsolucionesdigitales.com">JMSolucionesDigitales</a>
                    - Todos los derechos reservados</p>
            </div>
            <!-- end of col -->
        </div>
        <!-- enf of row -->
    </div>
    <!-- end of container -->
</div>
<!-- end of copyright -->
<!-- end of copyright -->

@include('home.partials.js')
</body>
</html>