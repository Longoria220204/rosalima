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
        #portada {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
                url('./public/img/web/banner_primaria.jpg');
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
        /* #portada {
            position: relative;
        } */

        /* #portada img {
            width: 100%;
            object-fit: cover;
            object-position: bottom;
        }
 */
        /* #portada .content-portada {
            position: absolute;
            bottom: 30%;
            left: 10%;
        }

        #portada .breadcrumb-item a {
            font-weight: 700;
            color: var(--color6);

        }

        #portada h1 {
            font-size: 3rem;
        } */


        #banner-web {
            height: 106vh;
            object-fit: cover;
        }

        .h5,
        h5 {
            font-size: 16px;
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
            background: var(--color9);
        }

        .tf__single_category.light_blue .tf__single_category_text {
            border-color: var(--color9);
        }

        .tf__single_category.light_blue:hover .tf__single_category_text:after {
            background: var(--color9);
        }

        .tf__single_category.light_blue:hover .tf__single_category_icon {
            color: var(--color9);
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
            background: var(--color2)
        }

        .tf__single_category.red .tf__single_category_text {
            border-color: var(--color2)
        }

        .tf__single_category.red:hover .tf__single_category_text:after {
            background: var(--color2)
        }

        .tf__single_category.red:hover .tf__single_category_icon {
            color: var(--color2)
        }

        #bienvenidos {
            /* position: relative; */
            background-image: url('./public/img/web/fondo2.png');
            background-repeat: no-repeat;
            background-size: 160%;
            /*  padding-top: 8rem;*/
            position: relative;
            padding-bottom: 8rem !important;
            margin-bottom: 3rem;
        }

        #bienvenidos p {
            text-align: justify;
        }

        /* #bienvenidos .img-icon-bienvenido {
            position: absolute;
            top: -1%;
            left: 10%;
            animation: banner_animi_2 2s linear infinite alternate;
            /*  -webkit-animation: about_animi_1 40s linear infinite; */
        /* animation: about_ani_1 40s linear infinite; */
        /* } */

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

        #valores {
            padding-top: 6rem;

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

        /*seccion Cursos*/
        #valores .noticias .owl-theme .owl-dots .owl-dot span {
            width: 30px;
        }

        #valores .noticias .owl-theme .owl-dots .owl-dot.active span {
            /* background-color: red; */
            width: 50px;
        }

        #valores.noticias .owl-theme .owl-dots .owl-dot.active span,
        #valores .noticias .owl-theme .owl-dots .owl-dot:hover span {
            background-color: var(--color8);
        }

        #valores .noticias .owl-nav button {
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

        #valores .noticias .owl-nav span {
            font-size: 1.8rem;
        }

        #valores .noticias .owl-nav .owl-prev {
            left: -25px !important;
            /* Ajusta la posición horizontal del botón izquierdo */
        }

        #valores .noticias .owl-nav .owl-next {
            right: -25px !important;
            /* Ajusta la posición horizontal del botón derecho */
        }

        #valores .noticias .owl-nav button:hover {
            background: #445d9c !important;
            /* Color de fondo del botón al pasar el mouse */
        }

        #valores .owl-dots {
            display: block !important;
        }

        #owl-noticias .card i {
            color: var(--color4);
        }

        #owl-noticias .card:hover {
            border-color: var(--color4);
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
            background-color: var(--color3);
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
            padding-top: 30px;
            padding-bottom: 30px;
            border-top-right-radius: 70px;
            border-bottom-left-radius: 70px;
            margin-top: 25px;
            transition: all .3s linear;
            -webkit-transition: all .3s linear;
            -moz-transition: all .3s linear;
            -ms-transition: all .3s linear;
            -o-transition: all .3s linear;

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

        h1,
        h2,
        h3,
        h4 {
            color: var(--color4)
        }



        .texto-slide {
            position: absolute;
            bottom: 10%;
            left: 50%;
            transform: translateX(-50%);
            /*   background: rgba(0, 0, 0, 0.6); */
            color: red !important;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 18px;
            text-align: center;
        }

        #portada {
            position: relative;
        }

        #portada img {
            height: 100%;
            object-fit: cover;
            object-position: bottom;
        }

        #portada .breadcrumb-item a {
            font-weight: 700;
            color: white;

        }

        #portada h1 {
            font-size: 4rem;
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
            padding-bottom: 0rem;
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

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-out;
        }

        .accordion-item.active .accordion-content {
            max-height: 150px;
        }

        .accordion-header i {
            transition: transform 0.3s ease;
        }

        .accordion-item.active .accordion-header i {
            transform: rotate(180deg);
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

    <!-- <section id="portada">
        <img src="./public/img/web/banner_primaria.jpg" alt="">
    </section> -->
    <div class="container-fluid" id="portada">
        <div class="container content-portada">
            <div class="row">
                <div class="col-12 animate__animated animate__fadeInLeft">
                    <h2 class="page_title">PRIMARIA</h2>
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
            <div class="row">
                <div class="d-felx justify-content-center">
                    <div class="pt-5">
                        <h2>Nivel Primaria</h2>
                    </div>
                    <!--  <img class="img-icon-bienvenido" src="./public/img/icons/miselanea3.png" alt=""> -->
                    <div class="pt-5">
                        <h3>Propuesta Pedagógica para el Nivel Primaria</h3>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-6 px-3 pt-3" style="position:relative;">
                    <div class="row">
                        <p>La propuesta pedagógica para el nivel Primaria de nuestra institución busca responder a las necesidades educativas de los estudiantes, garantizando un aprendizaje significativo, contextualizado y alineado con el Currículo Nacional de la Educación Básica. Este enfoque promueve el desarrollo integral del estudiante, potenciando sus capacidades cognitivas, emocionales, sociales y físicas.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg col-md-5 pt-4 " id="info">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                        <button class="accordion-button d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            1.- Diversificación Curricular
                                            <i class="fas fa-chevron-down ms-auto"></i>
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">

                                            <p>Adaptaremos los desempeños y competencias a las características y necesidades de los estudiantes, considerando el contexto sociocultural en el que se desenvuelven. Estas adaptaciones se reflejarán en el plan anual y en las unidades didácticas, integrando proyectos, módulos y situaciones de aprendizaje contextualizadas.</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                        <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                            2.- Enfoque Interdisciplinario
                                            <i class="fas fa-chevron-down ms-auto"></i>
                                        </button>

                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                        <div class="accordion-body">
                                            <p>Promoveremos la integración de áreas curriculares como Matemática, Comunicación, Ciencia y Tecnología, Personal Social, Formación Religiosa y Arte, abordando temas transversales como el cuidado del medioambiente, la salud, los valores y la ciudadanía activa. Esta estrategia busca que los estudiantes desarrollen un pensamiento crítico y reflexivo al vincular sus aprendizajes con problemas reales de su entorno.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                        <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            3.- Metodologías Activas y Participativas
                                            <i class="fas fa-chevron-down ms-auto"></i>
                                        </button>

                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingthree">
                                        <div class="accordion-body">
                                            <p> Aprendizaje Basado en Proyectos (ABP): Los estudiantes serán protagonistas de su aprendizaje, desarrollando habilidades de investigación, resolución de problemas y trabajo colaborativo. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                        <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                            4.- Uso del Juego y Experiencias Lúdicas

                                            <i class="fas fa-chevron-down ms-auto"></i>
                                        </button>

                                    </h2>
                                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                                        <div class="accordion-body">
                                            <p> Incorporaremos el juego como un recurso pedagógico que motive la creatividad, fomente la cooperación y facilite la asimilación de valores y normas de convivencia. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                                        <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                                            5.- Talleres y Actividades Dinámicas
                                            <i class="fas fa-chevron-down ms-auto"></i>
                                        </button>

                                    </h2>
                                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                                        <div class="accordion-body">
                                            <p> Implementaremos espacios para el desarrollo de la creatividad y habilidades socioemocionales, fortaleciendo la autonomía y la capacidad de trabajo en equipo. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                                        <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                                            6.- Fortalecimiento de la Psicomotricidad y Habilidades Básicas
                                            <i class="fas fa-chevron-down ms-auto"></i>
                                        </button>

                                    </h2>
                                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                                        <div class="accordion-body">
                                            <p>Diseñaremos actividades específicas para estimular la motricidad fina y gruesa, necesarias para un adecuado desarrollo físico y cognitivo. Estas se integrarán a las diferentes áreas del currículo a través de la manipulación de materiales concretos y ejercicios dinámicos.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                                        <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                                            7.- Fomento de Valores y Convivencia Escolar
                                            <i class="fas fa-chevron-down ms-auto"></i>
                                        </button>

                                    </h2>
                                    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                                        <div class="accordion-body">
                                            <p> Enfatizaremos la importancia de valores como el respeto, la responsabilidad, la empatía y la solidaridad. Estas cualidades se trabajarán mediante actividades transversales y proyectos que promuevan una convivencia armónica y la construcción de una comunidad escolar inclusiva y tolerante. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                                        <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                                            8.- Uso de Recursos Tecnológicos
                                            <i class="fas fa-chevron-down ms-auto"></i>
                                        </button>

                                    </h2>
                                    <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEight">
                                        <div class="accordion-body">
                                            <p> Integraremos herramientas digitales y recursos tecnológicos para enriquecer el proceso de enseñanza-aprendizaje, desarrollando competencias digitales en los estudiantes y preparándolos para los desafíos del siglo XXI. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                                        <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
                                            9.- Participación de las Familias
                                            <i class="fas fa-chevron-down ms-auto"></i>
                                        </button>

                                    </h2>
                                    <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingNine">
                                        <div class="accordion-body">
                                            <p> Reconocemos el papel fundamental de las familias en el desarrollo educativo de los estudiantes. Por ello, fomentaremos su participación activa a través de talleres, reuniones y proyectos compartidos, fortaleciendo la relación entre el hogar y la escuela.</p>
                                            <p>Esta propuesta pedagógica está orientada a formar estudiantes autónomos, responsables y comprometidos con su aprendizaje, promoviendo su desarrollo integral y preparándolos para ser ciudadanos activos y conscientes de su entorno.</p>
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
                            <img src="./public/img/web/foto_primaria.jpg" alt="" width="100%" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4);border-radius: 2px;">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center pt-5">
                        <img src="./public/img/icons/elemento2.png" width="100" style="animation: banner_animi_2 2s linear infinite alternate;" alt="">
                    </div>
                </div>
            </div>
        </div>
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
                        <div class="content1">
                            <center><img src="./public/img/icons/personalsocial.png" alt=""></center>
                            <h3>Personal Social</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1 ">
                            <center><img src="./public/img/icons/comunicacion.png" alt=""></center>
                            <h3>Comunicación</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1 ">
                            <center><img src="./public/img/icons/plan-lector.png" alt=""></center>
                            <h3> Plan Lector</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1">
                            <center><img src="./public/img/icons/matematica.png" alt=""></center>
                            <h3>Matemática</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1">
                            <center><img src="./public/img/icons/ciencia-tecnologia.png" alt=""></center>
                            <h3>Ciencia y Tecnología</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1">
                            <center><img src="./public/img/icons/educacion-religiosa.png" alt=""></center>
                            <h3>Formación Religiosa</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1">
                            <center><img src="./public/img/icons/arte.png" alt=""></center>
                            <h3>Arte</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1">
                            <center><img src="./public/img/icons/musica.png" alt=""></center>
                            <h3>Música</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1">
                            <center><img src="./public/img/icons/educacion-fisica.png" alt=""></center>
                            <h3>Ed.Fisica</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1">
                            <center><img src="./public/img/icons/tennis-mesa.png" alt=""></center>
                            <h3>Tenis Mesa</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1">
                            <center><img src="./public/img/icons/informatica.png" alt=""></center>
                            <h3>Informática</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md p-md-4 my-3 my-md-0 item">
                        <div class="content1">
                            <center><img src="./public/img/icons/ingles.png" alt=""></center>
                            <h3>Inglés</h3>
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
    document.querySelectorAll(".accordion-header").forEach(header => {
        header.addEventListener("click", () => {
            const item = header.parentElement;
            item.classList.toggle("active");
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".cursos_content_slider").owlCarousel({
            loop: true,
            margin: 50,
            nav: false,
            dots: false,
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