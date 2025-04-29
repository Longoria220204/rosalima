<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="#">
    <title>Colegio I.E.P Rosa de Lima</title>
    <link rel="shortcut icon" href="./public/img/icons/escudo_rosa.png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="./public/css/animate.min.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/web.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Carousel video -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <!-- carrousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.pooper.js"></script>
    <script src="./public/js/vue.min.js"></script>
    <style>
        /* estilos del banner dinámico */
        #portada {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)),
                url('./public/img/web/portada_dominicos.jpg');
            background-size: cover;
            background-position: center 30%;
            /*   padding: 550px 0 10px; */
            position: relative;
        }

        #portada .page_title {
            font-size: 50px;
            font-weight: bold;
            color: #fff;
        }

        #portada .breadcrumb-item+.breadcrumb-item::before {
            color: white;
        }

        #portada .breadcrumb-item {
            font-size: 22px;
        }

        #portada .breadcrumb-item a {
            color: #fff;
            font-size: 22px;
        }

        #portada {
            height: 450px;
            padding-bottom: 1rem;
        }

        #portada .content-portada {
            position: absolute;
            bottom: 15%;
            left: 8%;
            color: white;
        }

        #banner-web {
            height: 106vh;
            object-fit: cover;
        }

        div.content-banner .frame-responsive {
            position: relative;
            height: 0;
            overflow: hidden;
            padding-bottom: 56.2%;
            margin-bottom: 20px;
        }

        div.content-banner .frame-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: <?= $dataBanner['opciones']['dimensionar'] ? 'calc(100vh - 90px)' : '100%' ?>;
        }

        div.content-banner video {
            width: 100%;
            height: <?= $dataBanner['opciones']['dimensionar'] ? 'calc(100vh - 90px)' : '100%' ?>;
        }

        /* Estilos de los elementos del banner */
        #img-elemento1 {
            position: absolute;
            top: 10%;
            left: 0;
            animation: banner_animi_1 4s linear infinite alternate;
            -webkit-animation: banner_animi_1 4s linear infinite alternate;
        }

        #img-elemento1 img {
            width: 45%;
            opacity: .5;

        }

        @keyframes banner_animi_1 {
            0% {
                top: 150px;
            }

            to {
                top: 200px;
            }
        }

        #img-elemento2 {
            position: absolute;
            top: 13%;
            right: 2%;
            animation: banner_animi_2 2s linear infinite alternate;
            -webkit-animation: banner_animi_2 2s linear infinite alternate;

        }

        #img-elemento2 img {
            width: 90%;
        }

        @keyframes banner_animi_2 {
            0% {
                transform: scale(1);
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1)
            }

            to {
                transform: scale(1.2);
                -webkit-transform: scale(1.2);
                -moz-transform: scale(1.2);
                -ms-transform: scale(1.2);
                -o-transform: scale(1.2)
            }
        }

        #slider-principal .titleC {
            position: absolute;
            /* left: 14%; */
            display: flex;
            /* justify-content: center; */
            align-items: flex-end;
            /* height: 100%; */
            padding-top: 20%;
            padding-left: 15%;
            width: 65%;
        }

        #slider-principal .titleC .title {
            color: var(--color6);
            font-size: 4rem;
            /* filter: drop-shadow(16px 16px 20px white); */
        }

        #slider-principal .titleC .title2 {
            color: white;
            font-size: 30px;
            /* filter: drop-shadow(16px 16px 20px white); */
        }

        #slider-principal .titleC .boton {
            color: var(--color7);
            background: var(--color4);
            border-radius: 24px;
            font-weight: 600;
            padding: 18px 40px;
            margin-right: 1rem;
        }

        #slider-principal .titleC .boton:hover {
            animation: pulse 1s;
            box-shadow: 0 0 0 1em transparent;
            -webkit-animation: pulse 1s
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 #faa392;
            }
        }

        #valores {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        /* eSTILOS */
        .tf__single_category {
            position: relative;
            margin-top: 25px
        }

        .tf__single_category_icon {
            width: 100px;
            height: 100px;
            background: red;
            line-height: 100px;
            text-align: center;
            color: var(--color7);
            font-size: 40px;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 0;
            z-index: 1;
            transition: all .3s linear;
            transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            -webkit-transition: all .3s linear;
            -moz-transition: all .3s linear;
            -ms-transition: all .3s linear;
            -o-transition: all .3s linear
        }

        .tf__single_category_text {
            background: url(/_next/static/media/categiry_bg.4e3dba12.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50%;
            margin-left: 50px;
            padding: 50px 50px 50px 80px;
            position: relative;
            border-radius: 5px;
            border-left: 3px solid red;
            overflow: hidden;
            transform: skewX(-10deg);
            -webkit-transform: skewX(-10deg);
            -moz-transform: skewX(-10deg);
            -ms-transform: skewX(-10deg);
            -o-transform: skewX(-10deg);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px
        }

        .tf__single_category_text:after {
            position: absolute;
            content: "";
            width: 100%;
            height: 100%;
            background: #f3f7fb;
            top: 0;
            left: 0;
            transition: all .3s linear;
            -webkit-transition: all .3s linear;
            -moz-transition: all .3s linear;
            -ms-transition: all .3s linear;
            -o-transition: all .3s linear
        }

        .tf__single_category_text h3 {
            font-size: 22px;
            font-weight: 700;
            text-transform: capitalize;
            margin-bottom: 10px
        }

        .tf__single_category_text h3,
        .tf__single_category_text p {
            position: relative;
            z-index: 1;
            transition: all .3s linear;
            transform: skewX(10deg);
            -webkit-transform: skewX(10deg);
            -moz-transform: skewX(10deg);
            -ms-transform: skewX(10deg);
            -o-transform: skewX(10deg);
            -webkit-transition: all .3s linear;
            -moz-transition: all .3s linear;
            -ms-transition: all .3s linear;
            -o-transition: all .3s linear
        }

        .tf__single_category_text p {
            padding-left: 8px
        }

        .tf__single_category:hover .tf__single_category_text:after {
            opacity: .85
        }

        .tf__single_category:hover .tf__single_category_icon {
            background: var(--color7) !important
        }

        .tf__single_category:hover h3,
        .tf__single_category:hover p {
            color: var(--color7);
        }

        .tf__single_category.light_blue .tf__single_category_icon {
            background: var(--color8);
        }

        .tf__single_category.light_blue .tf__single_category_text {
            border-color: var(--color8);
        }

        .tf__single_category.light_blue:hover .tf__single_category_text:after {
            background: var(--color8);
        }

        .tf__single_category.light_blue:hover .tf__single_category_icon {
            color: var(--color8);
        }

        .tf__single_category.blue .tf__single_category_icon {
            background: var(--color1);
        }

        .tf__single_category.blue .tf__single_category_text {
            border-color: var(--color1);
        }

        .tf__single_category.blue:hover .tf__single_category_text:after {
            background: var(--color1);
        }

        .tf__single_category.blue:hover .tf__single_category_icon {
            color: var(--color1);
        }

        /* .tf__single_category.green .tf__single_category_icon {
            background: var(--color4);
        }

        .tf__single_category.green .tf__single_category_text {
            border-color: var(--color4);
        }

        .tf__single_category.green:hover .tf__single_category_text:after {
            background: var(--color4);
        }
        .tf__single_category.green:hover .tf__single_category_icon {
            color: var(--color4);
        }*/


        .tf__single_category.gray .tf__single_category_icon {
            background: var(--color4);
        }

        .tf__single_category.gray .tf__single_category_text {
            border-color: var(--color4);
        }

        .tf__single_category.gray:hover .tf__single_category_text:after {
            background: var(--color4);
        }

        .tf__single_category.gray:hover .tf__single_category_icon {
            color: var(--color4);
        }

        .tf__single_category.orange .tf__single_category_icon {
            background: var(--color3);
        }

        .tf__single_category.orange .tf__single_category_text {
            border-color: var(--color3);
        }

        .tf__single_category.orange:hover .tf__single_category_text:after {
            background: var(--color3);
        }

        .tf__single_category.orange:hover .tf__single_category_icon {
            color: var(--color3);
        }

        .tf__single_category.red .tf__single_category_icon {
            background: var(--color4)
        }

        .tf__single_category.red .tf__single_category_text {
            border-color: var(--color4)
        }

        .tf__single_category.red:hover .tf__single_category_text:after {
            background: var(--color4)
        }

        .tf__single_category.red:hover .tf__single_category_icon {
            color: var(--color4)
        }

        #bienvenidos {
            position: relative;
            /*  background-image: url('./public/img/web/fondo.png');
            background-repeat: no-repeat;
            background-size: 100% 600px;  */
            padding-top: 6rem;

            position: relative;
        }

        #bienvenidos p {
            text-align: justify;
        }

        #bienvenidos .img-icon-bienvenido {
            position: absolute;
            top: -7%;
            left: -4%;
            animation: about_animi_1 40s linear infinite;
        }

        @keyframes about_animi_1 {
            0% {
                transform: rotate(0deg);
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn);
                -webkit-transform: rotate(1turn);
                -moz-transform: rotate(1turn);
                -ms-transform: rotate(1turn);
                -o-transform: rotate(1turn)
            }
        }

        .boton2 {
            color: var(--color7);
            background: var(--color4);
            border-radius: 24px;
            font-weight: 600;
            padding: 18px 40px;
            margin-right: 1rem;
        }

        .boton2:hover {
            color: white;
            animation: pulse 1s;
            box-shadow: 0 0 0 1em transparent;
            -webkit-animation: pulse 1s;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 #faa392;
            }
        }

        #niveles {
            background-image: url('./public/img/web/bg2.jpg');
            background-repeat: no-repeat;
            background-size: 100% 600px;
            padding-top: 5rem;
            padding-left: 4rem;
            padding-right: 4rem;

        }

        #niveles .content-valores {
            border-radius: 10px;
            color: white;
            text-align: center;
            padding: 2rem 2rem 10rem 2rem;
            position: relative;
            transition: ease-in-out .6s;
        }

        #niveles .content-valores a {
            display: flex;
            text-align: center;
            line-height: 50px;
            align-items: center;
            justify-content: center;
            position: absolute;
            z-index: 1;
            width: 70px;
            height: 70px;
            background: white;
            border-radius: 50%;
            left: 50%;
            bottom: 3%;
            transform: translate(-50%, -50%);
            text-decoration: none;
        }

        #niveles .content-valores i {
            font-size: 1.6rem;
        }

        #niveles .content-valores:hover {
            transform: translateY(-30px);
        }

        #niveles .content-valores:hover .img-bg-niveles {
            opacity: .2;
        }


        #niveles h3 {
            padding-top: 8rem;
        }

        #niveles .img-niveles {
            border-radius: 50% 50%;
            border: 8px solid white;
            width: 280px;
            height: 280px;
            position: absolute;
            left: 50%;
            top: 0;
            transform: translate(-50%, -50%);
            object-fit: cover;
        }

        #niveles .img-bg-niveles {
            position: absolute;
            width: 65%;
            bottom: -8%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: ease-in-out .4s;
        }

        /* seccion publicaciones */
        #publicaciones {
            padding-top: 6rem;
            padding-bottom: 4rem;
        }

        #publicaciones h2 {
            font-weight: bold;
            color: var(--color1);
        }

        #publicaciones img {
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            width: 100%;
            object-fit: cover;
            height: 420px;
            object-position: top;
        }

        #publicaciones .titulo h5 {
            font-weight: bold;
            color: var(--color6);
        }

        #publicaciones .fecha-pub {
            color: var(--color1);
        }

        #publicaciones .pub-leer-mas h5 {
            padding: .5rem;
            color: var(--color6);
        }

        #publicaciones .detalle p {
            display: -webkit-box;
            /* Para navegadores WebKit (Chrome, Safari) */
            -webkit-box-orient: vertical;
            /* Orientación vertical del box */
            -webkit-line-clamp: 3;
            /* Número de líneas que deseas mostrar */
            overflow: hidden;
            /* Ocultar el texto que sobrepasa las 3 líneas */
            text-overflow: ellipsis;
            /* Mostrar puntos suspensivos (...) al final del texto cortado */
            color: var(--color1);
            text-align: justify;
        }


        #publicaciones a:hover .pub-leer-mas i {
            transition: ease-in-out .9s;
        }

        #publicaciones a:hover .pub-leer-mas i {
            transform: translateX(8px);
        }

        /* Estilos del carousel owl */
        #publicaciones .noticias .owl-theme .owl-dots .owl-dot span {
            width: 30px;
        }

        #publicaciones .noticias .owl-theme .owl-dots .owl-dot.active span {
            /* background-color: red; */
            width: 50px;
        }

        #publicaciones .noticias .owl-theme .owl-dots .owl-dot.active span,
        #publicaciones .noticias .owl-theme .owl-dots .owl-dot:hover span {
            background-color: var(--color4);
        }

        #publicaciones .noticias .owl-nav button {
            background: var(--color4) !important;
            /* Color del fondo del botón */
            border: none !important;
            /* Quita el borde */
            color: white !important;
            /* Color del texto */
            /*  padding: 10px !important; */
            /* Espacio interno del botón */
            border-radius: 50% !important;
            /* Hace el botón circular */
            position: absolute !important;
            /* Posiciona el botón de manera absoluta */
            top: 50% !important;
            /* Centra verticalmente el botón */
            transform: translateY(-50%) !important;
            /* Ajusta la posición vertical */
            width: 45px !important;
            height: 45px !important;
        }

        #publicaciones .noticias .owl-nav span {
            font-size: 1.8rem;
        }

        #publicaciones .noticias .owl-nav .owl-prev {
            left: -25px !important;
            /* Ajusta la posición horizontal del botón izquierdo */
        }

        #publicaciones .noticias .owl-nav .owl-next {
            right: -25px !important;
            /* Ajusta la posición horizontal del botón derecho */
        }

        #publicaciones .noticias .owl-nav button:hover {
            background: #445d9c !important;
            /* Color de fondo del botón al pasar el mouse */
        }

        #publicaciones .owl-dots {
            display: block !important;
        }



        #publicaciones .card:hover {
            border-color: var(--color4);
        }

        #portada {
            position: relative;
        }

        #portada h1 {
            font-size: 4rem;
        }
    </style>
    <?php include_once './partials/header.php'; ?>

    <div class="container-fluid" id="portada">
        <div class="container content-portada">
            <div class="row">
                <div class="col-12 animate__animated animate__fadeInLeft">
                    <h2 class="page_title">PASTORAL DOMINICOS
                    </h2>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php" style="color:white;">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Pastoral</li>
                                <li class="breadcrumb-item text-white">Pastoral Dominicos</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="bienvenidos">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 px-5" style="position:relative;">
                    <div class="mx-4">
                        <h2 style="color:black;">Pastoral Dominicos</h2>
                        <br>
                        <p style="text-align:justify;">Este año 2025 iniciamos este proyecto pastoral educativo con la finalidad de acompañar a nuestros niños y niñas en su crecimiento espiritual y formativo, guiados por el carisma dominico. A través de actividades lúdicas, educativas y de reflexión, buscamos fortalecer su fe, valores y sentido de comunidad, promoviendo un desarrollo integral en un ambiente de amor, respeto y fe.

                            Este proyecto es una oportunidad para que nuestros estudiantes descubran y vivan su fe de manera sencilla y significativa, aprendiendo a ser pequeños dominicos en su día a día.</p>

                    </div>
                    <img class="img-icon-bienvenido" src="./public/img/icons/miselanea4.png" alt="">
                </div>
                <div class="col-lg-6 pt-5 px-5 d-flex justify-content-center my-auto" style="position:relative;">
                    <div style="z-index:99;">
                        <img src="./public/img/web/pi_pastoral_dominicos.jpeg" alt="" style="width:100%;border-radius:20px;">
                    </div>
                    <img width="80" style="position:absolute;top:-1%;right:15%;z-index:1; animation: banner_animi_2 2s linear infinite alternate;" src="./public/img/icons/miselanea1.png" alt="">
                    <img width="80" style="position:absolute;left:1%;bottom:15%;;z-index:1;animation: banner_animi_2 2s linear infinite alternate;" src="./public/img/icons/miselanea2.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="publicaciones">
        <div class="container-fluid " style="padding-left: 4%;padding-right:4%;">
            <div class="row">
                <div class="col-lg">
                    <h2 style="color:var(--color6);text-align:center;">Publicaciones</h2>
                </div>
            </div> 
            <br>
            <br>
        
            <div class="row noticias d-flex justify-content-center">
                <div class="col-12 col-md-4 p-md-4 my-3 my-md-0 item">
                    <a href="view2.php?id=2">
                        <div class="card shadow" style="border-radius:5px;">
                            <div class="card1">
                                <img src="./public/img/galeria/p_dominicos.jpeg" alt="">
                            </div>
                            <div class="cardbody1 mx-3 py-3">
                                <div class="fecha-pub pb-1 d-flex justify-content-between">
                                    <div style="background-color:var(--color4);color:white;border-radius:5px;padding:.3rem;"><span>Pastoral Dominicos</span></div>
                                    <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;10-01-2025</p>
                                </div>
                                <br>
                                <div class="titulo">
                                    <h5>FE Y VIDA CRISTIANA</h5>
                                </div>
                                <div class="detalle">
                                    <p>Como parte de la formación de nuestros estudiantes esta la pastoral educativa que busca fortalecer la FE Y VIDA CRISTIANA de nuestros estudiantes y sus familias.</p>
                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="pub-leer-mas">
                                    <h5>Leer Más&nbsp;&nbsp;<i class="fas fa-chevron-circle-right"></i></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- <div class="col-12 col-md-4 p-md-4 my-3 my-md-0 item">
                    <a href="view.php?id=5">
                        <div class="card shadow" style="border-radius:5px;">
                            <div class="card1">
                                <img src="./public/img/galeria/p_referencia_colegio.jpg" alt="">
                            </div>
                            <div class="cardbody1 mx-3 py-3">
                                <div class="fecha-pub pb-1 d-flex justify-content-between">
                                    <div style="background-color:var(--color4);color:white;border-radius:5px;padding:.3rem;"><span>Documentos</span></div>
                                    <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;10-01-2025</p>
                                </div>
                                <br>
                                <div class="titulo">
                                    <h5>REFERENCIA DEL COLEGIO DE PROCEDENCIA</h5>
                                </div>
                                <div class="detalle">
                                    <p>El Colegio Rosa de Lima solicita el Informe de Referencia del Colegio de Procedencia como parte fundamental del proceso de admisión.</p>
                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="pub-leer-mas">
                                    <h5>Leer Más&nbsp;&nbsp;<i class="fas fa-chevron-circle-right"></i></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 p-md-4 my-3 my-md-0 item">
                    <a href="view.php?id=4">
                        <div class="card shadow" style="border-radius:5px;">
                            <div class="card1">
                                <img src="./public/img/galeria/p_informe_economico.jpg" alt="">
                            </div>
                            <div class="cardbody1 mx-3 py-3">
                                <div class="fecha-pub pb-1 d-flex justify-content-between">
                                    <div style="background-color:var(--color4);color:white;border-radius:5px;padding:.3rem;"><span>Documentos</span></div>
                                    <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;10-01-2025</p>
                                </div>
                                <br>
                                <div class="titulo">
                                    <h5>INFORME ECONÓMICO ADMISIÓN 2025</h5>
                                </div>
                                <div class="detalle">
                                    <p>El Colegio Rosa de Lima pone a disposición el Informe Económico de Admisión, documento fundamental para garantizar la transparencia en el proceso de matrícula y establecer los compromisos financieros entre la institución y las familias.</p>
                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="pub-leer-mas">
                                    <h5>Leer Más&nbsp;&nbsp;<i class="fas fa-chevron-circle-right"></i></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 p-md-4 my-3 my-md-0 item">
                    <a href="view.php?id=3">
                        <div class="card shadow" style="border-radius:5px;">
                            <div class="card1">
                                <img src="./public/img/galeria/p_declaracion_jurada_admision.jpg" alt="">
                            </div>
                            <div class="cardbody1 mx-3 py-3">
                                <div class="fecha-pub pb-1 d-flex justify-content-between">
                                    <div style="background-color:var(--color4);color:white;border-radius:5px;padding:.3rem;"><span>Documentos</span></div>
                                    <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;10-01-2025</p>
                                </div>
                                <br>
                                <div class="titulo">
                                    <h5>DECLARACIÓN JURADA DE ADMISIÓN 2025</h5>
                                </div>
                                <div class="detalle">
                                    <p>El Colegio Rosa de Lima pone a disposición de las familias postulantes la Declaración Jurada de Admisión, documento oficial que forma parte esencial del proceso de ingreso a nuestra institución educativa.</p>
                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="pub-leer-mas">
                                    <h5>Leer Más&nbsp;&nbsp;<i class="fas fa-chevron-circle-right"></i></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 p-md-4 my-3 my-md-0 item">
                    <a href="view.php?id=2">
                        <div class="card shadow" style="border-radius:5px;">
                            <div class="card1">
                                <img src="./public/img/galeria/p_reglamento_admision.jpg" alt="">
                            </div>
                            <div class="cardbody1 mx-3 py-3">
                                <div class="fecha-pub pb-1 d-flex justify-content-between">
                                    <div style="background-color:var(--color4);color:white;border-radius:5px;padding:.3rem;"><span>Documentos</span></div>
                                    <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;10-01-2025</p>
                                </div>
                                <br>
                                <div class="titulo">
                                    <h5>REGLAMENTO DE ADMISIÓN 2025</h5>
                                </div>
                                <div class="detalle">
                                    <p>El presente Reglamento de Admisión establece los principios, normas y procedimientos que rigen nuestro proceso de ingreso, con el objetivo de garantizar un sistema transparente, equitativo y eficiente para todos los postulantes.</p>
                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="pub-leer-mas">
                                    <h5>Leer Más&nbsp;&nbsp;<i class="fas fa-chevron-circle-right"></i></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 p-md-4 my-3 my-md-0 item">
                    <a href="view.php?id=1">
                        <div class="card shadow" style="border-radius:5px;">
                            <div class="card1">
                                <img src="./public/img/galeria/p_solicitud_postulante.jpg" alt="">
                            </div>
                            <div class="cardbody1 mx-3 py-3">
                                <div class="fecha-pub pb-1 d-flex justify-content-between">
                                    <div style="background-color:var(--color4);color:white;border-radius:5px;padding:.3rem;"><span>Documentos</span></div>
                                    <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;10-01-2025</p>
                                </div>
                                <br>
                                <div class="titulo">
                                    <h5>SOLICITUD DEL POSTULANTE 2025</h5>
                                </div>
                                <div class="detalle">
                                    <p>El Colegio Rosa de Lima pone a disposición de las familias interesadas el Formulario de Solicitud de Admisión para el proceso de ingreso.
                                    </p>
                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="pub-leer-mas">
                                    <h5>Leer Más&nbsp;&nbsp;<i class="fas fa-chevron-circle-right"></i></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> -->


            </div>
        </div>
    </section>
    <br>
    <br>
    <br>



    </ /?php include_once './partials/redes.php' ; ?>
    <?php include_once './partials/footer.php'; ?>
</body>
<!-- carrousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    let owlNoticias = $('#owl-noticias');
    owlNoticias.owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 5000,
        // autoplayHoverPause: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            800: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
</script>