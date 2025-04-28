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
        #portada {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)),
                url('./public/img/web/p-documentos.jpg');
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

        /* estilos del banner dinámico */
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
            padding-top: 8rem;
            padding-bottom: 5rem;
            position: relative;
        }

        #bienvenidos p {
            text-align: justify;
        }

        #bienvenidos .img-icon-bienvenido {
            position: absolute;
            top: -1%;
            left: 10%;
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

       

        #portada h1 {
            font-size: 4rem;
        }

        .card {
            padding: 2.5rem;
            /* background-color:rgba(0, 0, 0, 0.8) ; */
            /* background-color: rgba(0, 2, 0, .4); */
        }


        #input-formulario {
            display: block;
            width: 100%;
            padding: 1rem 1rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border-right: 1px solid #969696;
            border-bottom: 1px solid #969696;
            border-top: 1px solid #969696;
            border-left: 1px solid #969696;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        #input-formulario:focus {
            color: #212529;
            background-color: #fff;
            border-color: var(--color1);
            outline: 0;

            box-shadow: 0 0 0 .25rem rgba(36, 40, 127, 0);
        }

        #terminos {
            font-size: 1rem;
            color: var(--color7);
        }


        .select-form {

            display: block;
            width: 100%;
            padding: 1rem 2.25rem 1rem .75rem;
            -moz-padding-start: calc(.75rem - 3px);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: black;
            background-color: #fff;
            background-image: url('./public/img/icons/abajo-icon.png');
            background-repeat: no-repeat;
            background-position: right .75rem center;
            background-size: 16px 12px;
            border-right: 1px solid #969696;
            border-bottom: 1px solid #969696;
            border-top: 1px solid #969696;
            border-left: 1px solid #969696;
            -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .select-form:focus {

            color: #212529;
            background-color: #fff;
            border-color: var(--color1);
            outline: 0;
            box-shadow: 0 0 0 .25rem rgba(36, 40, 127, 0);
        }

        .select-form option {
            color: black;
        }

        /* Eliminar las flechas en navegadores como Chrome, Safari y Edge */
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        #contacto {
            background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.5) 100%,
                    #ffff 10%,
                    #ffff 50%),
                url("./public/img/web/foto-admision.jpg");
            background-size: cover !important;
            background-position: center;
            padding: 9rem 1rem 9rem 1rem;
            color: white;
            font-size: 16px;
            text-align: center;
        }

        .boton {
            border: none;
            color: var(--color7);
            background: var(--color3);
            border-radius: 24px;
            font-weight: 600;
            padding: 18px 40px;
            margin-right: 1rem;
        }

        .boton:hover {
            animation: pulse 1s;
            box-shadow: 0 0 0 1em transparent;
            -webkit-animation: pulse 1s
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 #faa392;
            }
        }

        #form-portada {
            position: relative;
        }

        #form-portada .img-icon-bienvenido {
            position: absolute;
            top: -3%;
            left: 0;


        }
    </style>
    <?php include_once './partials/header.php'; ?>
    <!--   <section id="portada">
        <img src="./public/img/web/portada-nosotros.png" width="100%" alt="">

    </section> -->
    <div class="container-fluid" id="portada">
        <div class="container content-portada">
            <div class="row">
                <div class="col-12 animate__animated animate__fadeInLeft">
                    <h2 class="page_title">ADMISIÓN</h2>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php" style="color:white;">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Admisión</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="publicaciones">
        <div class="container-fluid " style="padding-left: 4%;padding-right:4%;">
            <!-- <div class="content-portada">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tf__breadcrumb_text">
                                <h1>Admisión</h1>
                                <div class="page_breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="./">Inicio</a></li>
                                            <li class="breadcrumb-item" style="color:var(--color4);font-weight:700;">Admisión</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br> -->
            <div class="row noticias">
                <div class="col-12 col-md-4 p-md-4 my-3 my-md-0 item">
                    <a href="view.php?id=1">
                        <div class="card shadow" style="border-radius:5px;">
                            <div class="card1">
                                <img src="./public/img/galeria/p-reglamento.jpg" alt="">
                            </div>
                            <div class="cardbody1 mx-3 py-3">
                                <div class="fecha-pub pb-1 d-flex justify-content-between">
                                    <div style="background-color:var(--color4);color:white;border-radius:5px;padding:.3rem;"><span>Documentos</span></div>
                                    <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;04-11-2024</p>
                                </div>
                                <br>
                                <div class="titulo">
                                    <h5>Reglamento Interno</h5>
                                </div>
                                <div class="detalle">
                                    <p>La I.E.P. JEAN PIAGET es un centro educativo que surge a iniciativa de la Sra. Miriam Zegarra A. y Prof. Guillermo
                                        Tapia Zegarra habiendo observado la necesidad de escuelas privadas en el distrito y que tengan una visión que
                                        este a la vanguardia de lo que la sociedad requería. </p>
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
                                <img src="./public/img/galeria/p-reglamento.jpg" alt="">
                            </div>
                            <div class="cardbody1 mx-3 py-3">
                                <div class="fecha-pub pb-1 d-flex justify-content-between">
                                    <div style="background-color:var(--color4);color:white;border-radius:5px;padding:.3rem;"><span>Documentos</span></div>
                                    <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;04-11-2024</p>
                                </div>
                                <br>
                                <div class="titulo">
                                    <h5>Reglamento Interno</h5>
                                </div>
                                <div class="detalle">
                                    <p>La I.E.P. JEAN PIAGET es un centro educativo que surge a iniciativa de la Sra. Miriam Zegarra A. y Prof. Guillermo
                                        Tapia Zegarra habiendo observado la necesidad de escuelas privadas en el distrito y que tengan una visión que
                                        este a la vanguardia de lo que la sociedad requería. </p>
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
    </section>
    </ /?php include_once './partials/redes.php' ; ?>
    <?php include_once './partials/footer.php'; ?>
</body>
<!-- carrousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script>
    let owlNoticias = $('#owl-noticias');
    owlNoticias.owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 5000,
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
</script> -->
<script>
    function actualizarGrados() {
        const nivel = document.getElementById('nivel').value;
        const grado = document.getElementById('grado');

        // Limpiar opciones anteriores
        grado.innerHTML = '<option value="">Seleccione un grado</option>';

        if (nivel === 'inicial') {
            for (let i = 3; i <= 5; i++) {
                const option = document.createElement('option');
                option.value = `${i} años `;
                option.text = ` ${i} años`;
                grado.add(option);
            }
        } else if (nivel === 'primaria') {
            for (let i = 1; i <= 6; i++) {
                const option = document.createElement('option');
                option.value = `${i} ° Grado `;
                option.text = ` ${i} ° Grado`;
                grado.add(option);
            }
        } else if (nivel === 'secundaria') {
            for (let i = 1; i <= 5; i++) {
                const option = document.createElement('option');
                option.value = `${i} Año`;
                option.text = `${i} Año`;
                grado.add(option);
            }
        }
    }
</script>