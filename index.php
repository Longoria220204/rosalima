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
    <!-- owl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>
    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.pooper.js"></script>
    <script src="./public/js/vue.min.js"></script>
    <style>
        /* estilos del banner dinámico */
        #slider-principal {
            margin-top: -8rem;
            padding-bottom: 5rem;
        }

        #slider-principal .parrafo-slider {
            font-size: 1.1rem;
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
            /* -webkit-animation: banner_animi_1 4s linear infinite alternate; */
        }

        #img-elemento1 img {
            width: 45%;
            opacity: .5;

        }

        #header nav.navbar {
            background-color: white;
            background-color: transparent;
            background-size: 100%;
        }

        #valores .valores_slider .owl-theme .owl-dots .owl-dot span {
            width: 30px;
        }

        #valores.valores_slider .owl-theme .owl-dots .owl-dot.active span {
            /* background-color: red; */
            width: 50px;
        }

        #valores .valores_slider .owl-theme .owl-dots .owl-dot.active span,
        #valoress .valores_slider .owl-theme .owl-dots .owl-dot:hover span {
            background-color: var(--color8);
        }

        #valores .valores_slider .owl-nav button {
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
            background: var(--color3);
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
                box-shadow: 0 0 0 0 #F4FFC3;
            }
        }

        #valores {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        /* eSTILOS */
        .tf__single_category_text:after {
            width: 90%;
            padding: 50px 50px 50px 50px;

        }

        .tf__single_category_text p {
            padding-left: 1px !important;
            font-size: 15px;
            padding-top: 1px;
            margin-bottom: 0px;
        }

        .slide {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;


        }

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

        .tf__single_category.green .tf__single_category_icon {
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
        }


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
            padding-top: 8rem;
            padding-bottom: 5rem;
            position: relative;
        }

        #bienvenidos p {
            text-align: justify;
        }

        #bienvenidos .img-icon-bienvenido {
            position: absolute;
            bottom: -10%;
            left: 15%;
            -webkit-animation: about_animi_1 40s linear infinite;
            /*  animation: about_ani_1 40s linear infinite; */
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

        #niveles .cuerpo-niveles {
            padding-top: 10rem;
        }

        /* seccion publicaciones */
        #publicaciones {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        #publicaciones h2 {
            font-weight: 600;
            color: var(--color1);
        }

        #publicaciones img {
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            width: 100%;
            object-fit: cover;
            height: 420px;
            object-position: center;
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

        #publicaciones .noticias .owl-theme .owl-dots .owl-dot span {
            width: 30px;
        }

        #publicaciones .noticias .owl-theme .owl-dots .owl-dot.active span {
            /* background-color: red; */
            width: 50px;
        }

        #publicaciones .noticias .owl-theme .owl-dots .owl-dot.active span,
        #publicaciones .noticias .owl-theme .owl-dots .owl-dot:hover span {
            background-color: var(--color8);
        }


        /*  #publicaciones .noticias .owl-nav span {
            font-size: 1.8rem;
        } */

        /* #publicaciones .noticias .owl-nav .owl-prev {
            left: -25px !important; */
        /* Ajusta la posición horizontal del botón izquierdo */
        /*  } */

        /* #publicaciones .noticias .owl-nav .owl-next {
            right: -25px !important; */
        /* Ajusta la posición horizontal del botón derecho */
        /*   } */

        /*  #publicaciones .noticias .owl-nav button:hover {
            background: #445d9c !important; */
        /* Color de fondo del botón al pasar el mouse */
        /* } */

        #publicaciones .owl-dots {
            display: block !important;
        }

        #owl-noticias .card i {
            color: var(--color4);
        }

        #owl-noticias .card:hover {
            border-color: var(--color4);
        }

        #publicaciones .noticias .owl-theme .owl-dots .owl-dot span {
            width: 30px;
        }

        #publicaciones .noticias .owl-theme .owl-dots .owl-dot.active span {
            /* background-color: red; */
            width: 50px;
        }

        #publicaciones .noticias .owl-theme .owl-dots .owl-dot.active span,
        #publicaciones .noticias .owl-theme .owl-dots .owl-dot:hover span {
            background-color: var(--color8);
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

        #lema {

            background: linear-gradient(rgba(0, 0, 0, 0.5) 100%, #ffff 10%, #ffff 50%),
                url('./public/img/web/formacion.jpg');
            background-size: 100%;
            background-position: center 60%;
            /*  background-attachment: fixed; */
            background-repeat: no-repeat;
            margin-top: 2rem;
        }

        #lema span {
            text-align: center;
            padding-top: 20rem;
            padding-bottom: 20rem;
            display: flex;
            align-content: center;
            justify-content: center;
            font-size: 3.5rem;
            color: white;
            font-weight: 900;

        }

        @media screen and (max-width:700px) {
            #bienvenidos {
                padding-top: 3rem;
            }

            #slider-principal {
                margin-top: 0rem;
                padding-bottom: 0rem;
            }

            #banner-web {
                height: 100%;
                object-fit: contain;
            }

            #slider-principal .titleC .title {
                font-size: 1rem;
            }

            #slider-principal .titleC {

                padding-top: 10%;
                padding-left: 10%;
                /* width: 65%; */
            }

            #slider-principal .parrafo-slider {
                display: none;
            }

            #slider-principal .titleC .boton {
                color: var(--color7);
                background: var(--color4);
                border-radius: 24px;
                font-weight: 600;
                padding: 8px 30px;
                margin-right: 1rem;
                padding-top: -20px;
            }

            #img-elemento1 {
                display: none;
            }

            #img-elemento2 {
                display: none;
            }

            #niveles {
                padding-left: 0rem;
                padding-right: 0rem;
            }

            #niveles .col-lg-4 {
                margin-top: 5rem;
            }

            #niveles {
                background-image: none;
            }

            #niveles .cuerpo-niveles {
                padding-top: 2rem;
            }

            #lema span {

                padding-top: 6rem;
                padding-bottom: 6rem;
                display: flex;
                align-content: center;
                justify-content: center;
                font-size: 1rem;
                /*  color: white;
            font-weight: 900; */
            }
        }
    </style>
    <?php include_once './partials/header.php'; ?>

    <section id="slider">
        <div id="slider-principal" class="container-fluid content-banner px-0">
            <div id="carouselBanner" class="carousel slide pointer-event" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="position: relative;">
                        <div id="img-elemento1"><img src="./public/img/icons/elemento1.png" alt=""></div>
                        <div id="img-elemento2"><img src="./public/img/icons/elemento2.png" alt=""></div>
                        <div class="titleC overlay">
                            <div>
                                <h2 class="title">¡Bienvenidos al colegio<br>
                                    <span style="color:var(--color3);text-decoration: underline;">Rosa de Lima!</span>
                                </h2>
                                <br>
                                <p class="parrafo-slider">
                                    Aquí, aprendemos haciendo y viviendo. Nuestro enfoque integral,basado en proyectos
                                    <br> inspiran a nuestros estudiantes a ir más allá de los libros, cultivando una
                                    <br> curiosidad constante por aprender.
                                </p>
                                <br>
                                <div class="mt-lg-5">
                                    <a class="boton" href="admision">Admisión</a>
                                    <!--  <a class="boton" href="https://wa.me/+51983149305" target="_blank">Inscríbete</a> -->
                                </div>
                            </div>
                        </div>
                        <img id="banner-web" src="./public/img/banner/banner_jeanv3.png" class="w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section id="bienvenidos">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 px-5 pt-5">
                    <h2>Bienvenidos</h2>
                    <br>
                    <p><b>¡Ave María! Estimada comunidad de la IE “Rosa de Lima”</b>,</p>
                    <p>Con gran alegría damos inicio a un nuevo año escolar, lleno de esperanza y entusiasmo, pues tenemos la dicha de reencontrarnos un año más.
                        Agradecemos a Dios por brindarnos esta nueva oportunidad, llena de expectativas y desafíos, que asumimos con un espíritu renovado y comprometido con el bienestar de todos los que integramos la gran familia Rosina.
                        Extendemos una cálida bienvenida a las familias y estudiantes que este año se incorporan a nuestra institución. Les invitamos a identificarse plenamente con nuestro proyecto educativo y a participar con entusiasmo en las actividades que realizaremos para el beneficio de toda la comunidad Rosina.
                        Agradecemos profundamente la confianza depositada en nosotros al elegir formar parte de nuestra gran familia Dominica.</p>
                    <p>
                        Atentamente,
                        La Dirección
                    </p>
                    <br>
                    <div class="mt-lg-5">
                        <a class="boton2" href="./nosotros">Ver Más</a>
                        <!--  <a class="boton" href="https://wa.me/+51983149305" target="_blank">Inscríbete</a> -->
                    </div>
                </div>
                <div class="col-lg-6 pt-5 px-5 d-flex justify-content-center" style="position:relative;">
                    <img src="./public/img/web/rosa_inicio.jpg" style="width:80%;z-index:99" alt="">
                    <div style="right:20%; bottom:1%; position:absolute;background-color: var(--color4);padding:1rem;z-index:99;border-radius:15px;">
                        <center><i style="color:white;font-size:1.8rem;" class="far fa-check-circle"></i></center>
                        <h4 style="color:white;"><span>+49 años</span></h4>
                    </div>
                    <img width="80" style="position:absolute;top:-1%;right:15%;z-index:1; animation: banner_animi_2 2s linear infinite alternate;" src="./public/img/icons/miselanea1.png" alt="">
                    <img width="80" style="position:absolute;left:5%;bottom:15%;;z-index:1;animation: banner_animi_2 2s linear infinite alternate;" src="./public/img/icons/miselanea2.png" alt="">
                </div>
            </div>
        </div>
        <img class="img-icon-bienvenido" src="./public/img/icons/miselanea4.png" alt="">
    </section>
    <br>
    <br>
    <br>
    <section id="niveles">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg">
                    <h2 style="color:var(--color6);text-align:center;">Nuestros Niveles</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid cuerpo-niveles ">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 px-4 py-5">
                    <div class="content-valores h-100" style="background-color:#9C0A12;
">
                        <h3>Nivel Inicial</h3>
                        <p>Fomentamos la autonomía y las habilidades comunicativas de los estudiantes a través de experiencias de aprendizaje significativas y materiales manipulables.</p>
                        <a href="inicial">
                            <i style="color:var(--color8);" class="fas fa-long-arrow-right"></i>
                        </a>
                        <img class="img-bg-niveles" src="./public/img/icons/miselanea3.png" alt="">
                        <img class="img-niveles" src="./public/img/web/nivel_inicial.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4 px-4 py-5">
                    <div class="content-valores h-100" style="background-color:#A37C0D;">
                        <h3>Nivel Primaria</h3>
                        <p>Promover un aprendizaje dinámico y personalizado mediante metodologías innovadoras que respondan a las necesidades de cada grupo de estudiantes.</p>
                        <a href="primaria">
                            <i style="color:var(--color3);" class="fas fa-long-arrow-right"></i>
                        </a>
                        <img class="img-bg-niveles" src="./public/img/icons/miselanea3.png" alt="">
                        <img class="img-niveles" src="./public/img/web/nivel_primaria.jpg" alt="">
                    </div>
                </div>
                <!-- <div class="col-lg-4 px-4 py-5">
                    <div class="content-valores h-100" style="background-color: #1ab69d;">
                        <h3>Nivel Secundaria</h3>
                        <p>El nivel secundario tiene como objetivo formar integralmente al estudiante para la vida social, el trabajo, los estudios superiores y la ciudadanía.</p>
                        <a href="secundaria">
                            <i style="color:var(--color4);" class="fas fa-long-arrow-right"></i>
                        </a>
                        <img class="img-bg-niveles" src="./public/img/icons/miselanea3.png" alt="">
                        <img class="img-niveles" src="./public/img/web/pe-secundaria2025.jpg" alt="">
                    </div>
                </div> -->
            </div>
        </div>

    </section>
    <section id="lema">
        <span>"Formación académica y humana para un futuro exitoso"</span>
    </section>
    <section id="valores" class="tf__categories mt_95">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-6 col-md-8 col-lg-6 m-auto wow fadeInUp">
                    <div class="tf__heading_area mb_15 text-center">
                        <h2>Valores Institucionales</h2>
                    </div>
                </div>
            </div>
            <!-- <div class="row d-flex justify-content-center"> -->
            <div class="row cursos_content_slider owl-carousel owl-theme">
                <div class="valores_slider">
                    <div class="content-valores-curso">
                        <div class=" wow fadeInUp">
                            <div class="tf__single_category light_blue">
                                <div class="tf__single_category_icon"><i class="far fa-american-sign-language-interpreting"></i></div>
                                <div class="tf__single_category_text">
                                    <h3>Ética</h3>
                                    <p>Fomenta la conciencia moral y la responsabilidad para una convivencia armoniosa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="valores_slider">
                    <div class="content-valores-curso">
                        <div class=" wow fadeInUp">
                            <div class="tf__single_category orange">
                                <div class="tf__single_category_icon"><i class="fas fa-balance-scale"></i></div>
                                <div class="tf__single_category_text">
                                    <h3>Equidad</h3>
                                    <p>Garantiza igualdad de oportunidades en un sistema educativo inclusivo y de calidad.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="valores_slider">
                    <div class="content-valores-curso">
                        <div class=" wow fadeInUp">
                            <div class="tf__single_category light_blue">
                                <div class="tf__single_category_icon"><i class="fas fa-hands-helping"></i>
                                </div>
                                <div class="tf__single_category_text">
                                    <h3>Inclusión</h3>
                                    <p>Integra a personas con discapacidad y grupos vulnerables, promoviendo igualdad y justicia social.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="valores_slider">
                    <div class="content-valores-curso">
                        <div class="wow fadeInUp">
                            <div class="tf__single_category gray">
                                <div class="tf__single_category_icon"><i class="fas fa-trophy"></i>
                                </div>
                                <div class="tf__single_category_text">
                                    <h3>Calidad</h3>
                                    <p>Proporciona educación integral, flexible e innovadora, orientada a la transformación y el aprendizaje permanente.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="valores_slider">
                    <div class="content-valores-curso">
                        <div class="wow fadeInUp">
                            <div class="tf__single_category light_blue">
                                <div class="tf__single_category_icon"><i class="fas fa-landmark"></i>
                                </div>
                                <div class="tf__single_category_text">
                                    <h3>Democracia</h3>
                                    <p>Respeta los derechos humanos, fomenta la ciudadanía activa y el fortalecimiento del Estado de Derecho.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="valores_slider">
                    <div class="content-valores-curso">
                        <div class="wow fadeInUp">
                            <div class="tf__single_category gray">
                                <div class="tf__single_category_icon"><i class="fas fa-globe"></i>
                                    </i></div>
                                <div class="tf__single_category_text">
                                    <h3>Interculturalidad</h3>
                                    <p>Valora la diversidad cultural como base para una convivencia armónica y enriquecedora</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="valores_slider">
                    <div class="content-valores-curso">
                        <div class=" wow fadeInUp">
                            <div class="tf__single_category orange">
                                <div class="tf__single_category_icon"><i class="fas fa-recycle"></i>
                                </div>
                                <div class="tf__single_category_text">
                                    <h3>Conciencia Ambiental</h3>
                                    <p>Promueve el cuidado del entorno natural como base para una vida sostenible.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="valores_slider">
                    <div class="content-valores-curso">
                        <div class="wow fadeInUp">
                            <div class="tf__single_category gray">
                                <div class="tf__single_category_icon"><i class="fas fa-rocket"></i>

                                </div>
                                <div class="tf__single_category_text">
                                    <h3>Creatividad e Innovación</h3>
                                    <p>Impulsa el desarrollo de nuevos conocimientos, soluciones y perspectivas creativas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
        </div>
    </section>
    <!-- <section id="publicaciones">
        <div class="container-fluid " style="padding-left: 4%;padding-right:4%;">
            <div class="row">
                <div class="col-lg">
                    <h2 style="color:var(--color6);text-align:center;">Talleres</h2>
                </div>
            </div>
            <br>
            <div class="row noticias">
                <div class="owl-carousel owl-theme" id="owl-noticias">
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <a href="view2?id=1">
                            <div class="card shadow h-100" style="border-radius:5px;">
                                <div class="card1">
                                    <img src="./public/img/galeria/taller-folklorico.jpg" alt="">
                                </div>
                                <div class="cardbody1 mx-3 py-3">
                                    <div class="fecha-pub pb-1 d-flex justify-content-between">
                                        <div style="background-color:var(--color4);color:white;border-radius:5px;padding:.3rem;"><span>Talleres</span></div>
                                        <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;04-11-2024</p>
                                    </div>
                                    <br>
                                    <div class="titulo">
                                        <h5>FOLCLÓRICO: ¡El alma de nuestras raíces!</h5>
                                    </div>
                                    <div class="detalle">
                                        <p>En el Colegio Jean Piaget, nuestro taller Folclórico no solo despierta el talento artístico de nuestros estudiantes, sino que también los conecta con la magia y el legado de nuestra música andina.</p>
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
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <a href="view2?id=2">
                            <div class="card shadow h-100" style="border-radius:5px;">
                                <div class="card1">
                                    <img src="./public/img/galeria/taller-instrumental.jpg" alt="">
                                </div>
                                <div class="cardbody1 mx-3 py-3">
                                    <div class="fecha-pub pb-1 d-flex justify-content-between">
                                        <div style="background-color:var(--color4);color:white;border-radius:5px;padding:.3rem;"><span>Talleres</span></div>
                                        <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;04-11-2024</p>
                                    </div>
                                    <br>
                                    <div class="titulo">
                                        <h5>INSTRUMENTAL: ¡Descubre tu pasión por la música! </h5>
                                    </div>
                                    <div class="detalle">
                                        <p>En el Colegio Jean Piaget, nuestro Taller Instrumental es el espacio perfecto para que nuestros estudiantes desarrollen su talento musical, aprendan a interpretar diferentes instrumentos y descubran la magia de la música.</p>
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
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <a href="view2?id=3">
                            <div class="card shadow" style="border-radius:5px;">
                                <div class="card1">
                                    <img src="./public/img/galeria/taller-futsal.jpg" alt="">
                                </div>
                                <div class="cardbody1 mx-3 py-3">
                                    <div class="fecha-pub pb-1 d-flex justify-content-between">
                                        <div style="background-color:var(--color4);color:white;border-radius:5px;padding:.3rem;"><span>Talleres</span></div>
                                        <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;04-11-2024</p>
                                    </div>
                                    <br>
                                    <div class="titulo">
                                        <h5>FUTSAL: ¡Pasión por el deporte y el trabajo en equipo!</h5>
                                    </div>
                                    <div class="detalle">
                                        <p>En el Colegio Jean Piaget, el futsal es más que un deporte: es una experiencia que fomenta disciplina, compañerismo y liderazgo en cada jugada.</p>
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
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <a href="view2?id=4">
                            <div class="card shadow" style="border-radius:5px;">
                                <div class="card1">
                                    <img src="./public/img/galeria/taller-cambrigde.jpg" alt="">
                                </div>
                                <div class="cardbody1 mx-3 py-3">
                                    <div class="fecha-pub pb-1 d-flex justify-content-between">
                                        <div style="background-color:var(--color4);color:white;border-radius:5px;padding:.3rem;"><span>Talleres</span></div>
                                        <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;04-11-2024</p>
                                    </div>
                                    <br>
                                    <div class="titulo">
                                        <h5>CAMBRIDGE</h5>
                                    </div>
                                    <div class="detalle">
                                        <p>En el Colegio Jean Piaget contamos con más de 4 años de experiencia como centro oficial de preparación para la Certificación Cambridge.</p>
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
                </div>
            </div>
        </div>
    </section> -->
    <br>
    <br>



    </ /?php include_once './partials/redes.php' ; ?>
    <?php include_once './partials/footer.php'; ?>
</body>
<!-- carrousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $(".cursos_content_slider").owlCarousel({
            loop: true,
            margin: 50,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 7000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            },
            navText: ["&#10094;", "&#10095;"] // Flechas personalizadas (← y →)
        });
    });
</script>
<script>
    $('.hub-slider-slides ul').hubSlider({
        selector: $('li'),
        button: {
            next: $('.hub-slider-arrow_next'),
            prev: $('.hub-slider-arrow_prev')
        },
        transition: '0.9s',
        startOffset: 30,
        auto: true,
        time: 3, // secondly
    });
</script>
<script>
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml6 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml6 .letter',
            translateY: ["1.2em", 0],
            translateZ: 0,
            duration: 1200,
            delay: (el, i) => 50 * i
        }).add({
            targets: '.ml6',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
</script>