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
        /* #portada {
            margin-top: -8rem;
            padding-bottom: 2rem;
        }
 */
        #portada {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
                url('./public/img/web/banner_inicial.jpg');
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
            height: 600px;
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
        #valores  .owl-theme .owl-dots .owl-dot span {
            width: 30px;
        }

        #valores  .owl-theme .owl-dots .owl-dot.active span {
            /* background-color: red; */
            width: 50px;
        }

        #valores  .owl-theme .owl-dots .owl-dot.active span,
        #valores  .owl-theme .owl-dots .owl-dot:hover span {
            background-color: var(--color8);
        }

        #valores  .owl-nav button {
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

        #valores .owl-nav span {
            font-size: 1.8rem;
        }

        #valores .owl-nav .owl-prev {
            left: -25px !important;
            /* Ajusta la posición horizontal del botón izquierdo */
        }

        #valores .owl-nav .owl-next {
            right: -25px !important;
            /* Ajusta la posición horizontal del botón derecho */
        }

        #valores .owl-nav button:hover {
            background: #445d9c !important;
            /* Color de fondo del botón al pasar el mouse */
        }

        #valores .owl-dots {
            display: block !important;
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
            /* position: relative; */
            background-image: url('./public/img/web/fondo2.png');
            background-repeat: no-repeat;
            background-size: 140%;
            background-position: bottom;
            /*  padding-top: 8rem;*/
            position: relative;
            padding-bottom: 4rem !important;
            /* margin-bottom: 3rem; */
        }

        #bienvenidos p {
            text-align: justify;
        }

        #bienvenidos .img-icon-bienvenido {
            position: absolute;
            top: -1%;
            left: 10%;
            animation: banner_animi_2 2s linear infinite alternate;
            /*  -webkit-animation: about_animi_1 40s linear infinite; */
            /* animation: about_ani_1 40s linear infinite; */
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

        h1,
        h2,
        h3,
        h4 {
            color: var(--color4)
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

            /*  background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.8) 100%,
                    #ffff 10%,
                    #ffff 50%),
                url("http://localhost/jean/public/img/web/fachada.jpg"); */
            background: url('./public/img/web/fondo-cursos.jpg');
            background-size: cover !important;
            background-position: center;
            padding: 10px;
            color: white;
            font-size: 16px;
            text-align: center;

        }

        #publicaciones {
            background-color: var(--color4);
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        #publicaciones h2 {
            text-align: center;
            font-weight: 600;
            color: var(--color7);
        }

        /* #publicaciones img {
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            width: 100%;
            object-fit: cover;
            height: 420px;
            object-position: center;
        } */

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

        #owl-noticias .card i {
            color: var(--color4);
        }

        #owl-noticias .card:hover {
            border-color: var(--color4);
        }

        /* Estilos de alianzas */
        .content1 {
            border: 1px solid #ddd;
            background: var(--color7);
            text-align: center;
            padding: 40px;
            border-top-right-radius: 70px;
            border-bottom-left-radius: 70px;
            margin-top: 25px;
            transition: all .3s linear;
            -webkit-transition: all .3s linear;
            -moz-transition: all .3s linear;
            -ms-transition: all .3s linear;
            -o-transition: all .3s linear
        }

        .content1 span {
            display: block;
            width: 100px;
            height: 100px;
            background: var(--color7);
            line-height: 100px;
            font-size: 40px;
            border-radius: 50%;
            color: var(--colorWhite);
            margin: 0 auto;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%
        }

        .content1 img {

            width: 25% !important;
        }
        .content1 h3 {
            padding-top: 2rem !important;
        }

        /* .item:hover .content1::after {
            position: absolute;
            content: "";
            width: 85%;
            height: 65%;
            border: 1px dashed white;
            border-top-right-radius: 70px;
            border-bottom-left-radius: 70px;
            top: 22%;
            left: 8%;
        } */

        .item:hover .content1 {
            background-color: var(--color2);

        }

        #portada {
            position: relative;
        }

        #portada .breadcrumb-item a {
            font-weight: 700;
            color: white;

        }

        #portada h1 {
            font-size: 3rem;
        }

        #bienvenidos .accordion .accordion-body {
            line-height: 2;
        }

        #bienvenidos .accordion-button:not(.collapsed) {
            color: white;
            background: var(--color4);
        }

        #bienvenidos .accordion-button:focus {
            border-color: var(--color4);
            box-shadow: 0 0 0 0.25rem rgb(255 255 255 / 25%);
        }

        #bienvenidos .accordion-button {
            background: var(--color4);
            color: white;
            font-weight: bold;
        }

        #bienvenidos {
            padding-top: 1rem;
            padding-bottom: 3rem;
        }

        /* para ocultar los iconos por defecto*/

        .accordion-button:not(.collapsed)::after {
            display: none;
            content: "";

            background-image: url("");

        }



        .accordion-button::after {
            display: none;
            width: 0px;

            height: 0px;

            content: "";

            background-image: url("");

            background-size: 0px;

        }


        #convenios {
            padding-top: 3rem;
            padding-bottom: 5rem;
        }

        #convenios h2 {
            text-align: center;
            /*    color: var(--color1); */
            padding-bottom: 4rem;
        }

        #convenios img {
            width: 100%;
            transition: ease-in-out .8s;
        }

        #convenios img:hover {
            transform: scale(1.1);
        }

        @media screen and (max-width:700px) {
            #portada {
                margin-top: 0rem;
                padding-bottom: 5rem;
            }

            #portada h1 {
                font-size: 2rem;
            }

            #portada .content-portada {

                bottom: 40%;
                left: 10%;
            }
        }
    </style>
    <?php include_once './partials/header.php'; ?>

    <!--     <section id="portada">
        <img src="./public/img/web/banner_inicial.jpg" width="100%" alt="">

    </section>

 -->
    <div class="container-fluid" id="portada">
        <div class="container content-portada">
            <div class="row">
                <div class="col-12 animate__animated animate__fadeInLeft">
                    <h2 class="page_title">INICIAL</h2>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Niveles</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="bienvenidos">
        <div class="container">
            <!-- <div class="content-bienvenidos">
                <div class="container">
                    <div class="row">
                        <div class="d-flex justify-content-center pt-5">
                            <div class="col-12">
                                <div class="tf__breadcrumb_text">
                                    <h1>Inicial</h1>
                                    <div class="page_breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item" ><a href="./" style="color:var(--color4);">Inicio</a></li>
                                                <li class="breadcrumb-item" style="color:var(--color4);font-weight:700;">Niveles</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="d-felx justify-content-center pt-5">
                    <!-- <img class="img-icon-bienvenido" src="./public/img/icons/miselanea3.png" alt="">   -->
                    <div class="pt-5 ">
                        <h2>Nivel Inicial</h2>
                    </div>
                    <div class="pt-5 ">
                        <h3>Propuesta Pedagógica para el Nivel Inicial</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 px-5" style="position:relative;">
                    <div class=" py-2 pt-5">
                        <p>Reconociendo la importancia de contextualizar el proceso de enseñanza-aprendizaje en el nivel inicial, y en el marco del Currículo Nacional de la Educación Básica, nuestra propuesta busca diversificar los desempeños en las cuatro áreas principales del plan de estudios, integrándolos dentro del plan anual y las unidades didácticas (aprendizajes, proyectos y módulos).</p>
                        <br>
                        <p>De manera específica, implementaremos las siguientes estrategias:</p>
                        </p>

                        <!-- <video src="./public/video-web/interno_inicial.mp4" controls autoplay width="50%" muted style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4); border-radius: 8px;"></video> -->
                    </div>
                    <div class="row">
                        <div class="col-lg col-md my-auto" id="info">
                            <div class="accordion" id="accordionPanelsStayOpenExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                        <button class="accordion-button d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            1.- Integración de las Áreas Curriculares
                                            <i class="fas fa-chevron-down ms-auto"></i>
                                        </button>

                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">

                                            <p>Las áreas de Psicomotricidad, Matemática, Comunicación, Personal Social, Ciencia y Tecnología y Formación Religiosa se abordarán de manera integrada, promoviendo el desarrollo de capacidades de investigación y toma de decisiones en los estudiantes. Esta estrategia estará orientada a temas contextualizados en la problemática del entorno, como el cuidado del medioambiente, la salud y el desarrollo de valores.</p>
                                            <p>Fomentaremos la participación activa de los estudiantes en la construcción de sus aprendizajes.
                                                Involucraremos a los padres de familia como aliados clave en el proceso educativo, promoviendo su acompañamiento en el aprendizaje de sus hijos e hijas.
                                            </p>

                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                        <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                            2.- Desarrollo de la Psicomotricidad Fina
                                            <i class="fas fa-chevron-down ms-auto"></i>
                                        </button>

                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                        <div class="accordion-body">
                                            <p>Potenciaremos las habilidades motoras finas a través de la manipulación de materiales concretos. Esta práctica se integrará de manera constante en todas las áreas curriculares, favoreciendo la coordinación y precisión en los estudiantes.

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                        <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            3.- El Juego como Herramienta Pedagógica
                                            <i class="fas fa-chevron-down ms-auto"></i>
                                        </button>

                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingthree">
                                        <div class="accordion-body">
                                            <p> Incorporaremos el juego de forma permanente en las actividades pedagógicas, proponiendo situaciones de aprendizaje motivadoras que estimulen: </p>
                                            <p><b>Creatividad:</b> Exploración y generación de ideas originales.
                                                Autonomía: Desarrollo de la capacidad de resolver problemas de manera independiente.
                                            </p>
                                            <p><b>Autonomía:</b> Desarrollo de la capacidad de resolver problemas de manera independiente.</p>
                                            <p><b>Cooperación y trabajo en equipo: </b> Creación de espacios para la interacción y colaboración entre los estudiantes.</p>
                                            <p><b>Asimilación de normas y valores:</b> Aprendizaje dinámico y divertido que refuerce principios como el respeto, la solidaridad y la responsabilidad.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-5 px-5 ">
                    <div class="mx-5">
                        <div class="d-flex justify-content-center">
                            <img src="./public/img/web/rosa_inicial.jpg" alt="" width="100%" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4);border-radius: 2px;">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center pt-5">
                        <img src="./public/img/icons/elemento2.png" width="100" style="animation: banner_animi_2 2s linear infinite alternate;" alt="">
                    </div>
                </div>

            </div>
        </div>
        <!-- <img class="img-icon-bienvenido" src="./public/img/icons/miselanea3.png" alt=""> -->
    </section>
    
    <!-- <section id="niveles">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg">
                    <h2 style="color:var(--color6);text-align:center;">Nuestros Niveles</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="padding-top: 10rem;">
            <div class="row">
                <div class="col-lg-4 px-4 py-5">
                    <div class="content-valores h-100" style="background-color: var(--color8);">
                        <h3>Nivel Inicial</h3>
                        <p>Fomentamos la autonomía y las habilidades comunicativas de los estudiantes a través de experiencias de aprendizaje significativas y materiales manipulables.</p>
                        <a href="#">
                            <i style="color:var(--color8);" class="fas fa-long-arrow-right"></i>
                        </a>
                        <img class="img-bg-niveles" src="./public/img/icons/miselanea3.png" alt="">
                        <img class="img-niveles" src="./public/img/web/p-inicial.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4 px-4 py-5">
                    <div class="content-valores h-100" style="background-color: var(--color3);">
                        <h3>Nivel Primaria</h3>
                        <p>Promover un aprendizaje dinámico y personalizado mediante metodologías innovadoras que respondan a las necesidades de cada grupo de estudiantes.</p>
                        <a href="#">
                            <i style="color:var(--color3);" class="fas fa-long-arrow-right"></i>
                        </a>
                        <img class="img-bg-niveles" src="./public/img/icons/miselanea3.png" alt="">
                        <img class="img-niveles" src="./public/img/web/p-primaria.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4 px-4 py-5">
                    <div class="content-valores h-100" style="background-color: var(--color4);">
                        <h3>Nivel Secundaria</h3>
                        <p>El nivel secundario tiene como objetivo formar integralmente al estudiante para la vida social, el trabajo, los estudios superiores y la ciudadanía.</p>
                        <a href="#">
                            <i style="color:var(--color4);" class="fas fa-long-arrow-right"></i>
                        </a>
                        <img class="img-bg-niveles" src="./public/img/icons/miselanea3.png" alt="">
                        <img class="img-niveles" src="./public/img/web/p-secundaria.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section> -->

    <section id="publicaciones">
        <div class="container-fluid " style="padding-left: 4%;padding-right:4%;">
            <div class="row">
                <div class="col-lg">
                    <h2>Listado de Cursos</h2>
                </div>
            </div>
            <br>
            <div class="row noticias">
                <div class="owl-carousel owl-theme" id="owl-noticias">
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item ">
                        <div class="content1 ">
                             <center><img src="./public/img/icons/matematica.png" alt=""></center>
                            <h3>MATEMATICA</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1 ">
                            <center><img src="./public/img/icons/comunicacion.png" alt=""></center>
                            <h3>COMUNICACIÓN</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1">
                            <center><img src="./public/img/icons/personalsocial.png" alt=""></center>
                            <h3>PERSONAL SOCIAL</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1">
                             <center><img src="./public/img/icons/ciencia-tecnologia.png" alt=""></center>
                            <h3>CIENCIA Y TECNOLOGIA</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1">
                             <center><img src="./public/img/icons/educacion-religiosa.png" alt=""></center>
                            <h3>FORMACIÓN RELIGIOSA</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1">
                            <center><img src="./public/img/icons/arte.png" alt=""></center>
                            <h3>ARTE</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1">
                            <center><img src="./public/img/icons/musica.png" alt=""></center>
                            <h3>MUSICA</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1">
                            <center><img src="./public/img/icons/psicomotricidad.png" alt=""></center>
                            <h3>PSICOMOTRICIDAD</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1">
                            <center><img src="./public/img/icons/informatica.png" alt=""></center>
                            <h3>INFORMATICA</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1">
                            <center><img src="./public/img/icons/ingles.png" alt=""></center>
                            <h3>INGLES</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="valores" class="tf__categories mt_95">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-6 col-md-8 col-lg-6 m-auto wow fadeInUp">
                    <div class="tf__heading_area mb_15 text-center">
                        <h2>Valores</h2>
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
                                    <h3>Oración</h3>
                                    <p>Fuente de espiritualidad y conexión con Dios.</p>
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
                                    <h3>Estudio</h3>
                                    <p>Desarrollo de habilidades y capacidades cognitivas.</p>
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
                                    <h3>Verdad</h3>
                                    <p>Transparencia y honestidad en palabras y acciones.</p>
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
                                    <h3>Respeto</h3>
                                    <p>Aprecio y valoración de cada miembro de la comunidad educativa.</p>
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
                                    <h3>Puntualidad</h3>
                                    <p>Gestión eficiente del tiempo y las prioridades.</p>
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
                                    <h3>Responsabilidad</h3>
                                    <p>Compromiso con el bien común y los objetivos institucionales.</p>
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
                                    <h3>Perseverancia</h3>
                                    <p>Constancia para superar obstáculos y alcanzar metas.</p>
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
                                    <h3>Creatividad</h3>
                                    <p>Innovación en la búsqueda de soluciones.</p>
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
                                    <h3>Amistad</h3>
                                    <p>Fomento de relaciones profundas y constructivas.</p>
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
                                    <h3>Solidaridad</h3>
                                    <p>Apoyo mutuo y cuidado del entorno.</p>
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
                                    <h3>Caridad</h3>
                                    <p>Humildad y disposición para ayudar a los demás.</p>
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
                                    <h3>Empatía</h3>
                                    <p>Comprensión y conexión con los sentimientos de los otros.</p>
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
    <!-- <section id="convenios">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg">
                    <h2>Convenios Estratégicos</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3 d-flex justify-content-center pt-5"><a href="#">
                        <center><img src="./public/img/icons/logo-ucv.jpeg" width="100%" alt=""></center>
                    </a></div>
                <div class="col-lg-3 d-flex justify-content-center pt-5"><a href="#">
                        <center><img src="./public/img/icons/cambridge.png" width="10%" alt=""></center>
                    </a></div>

            </div>
        </div>
    </section> -->



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