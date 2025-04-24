<style>
    .topcontrol {
        position: fixed;
        bottom: 30px;
        right: 20px;
        opacity: 0.8;
        cursor: pointer;
        z-index: 100;
        /* background: #00D553; */
        /* width: 50px; */
        /* height: 50px; */
        /* padding-top: 6px; */
        /* padding-left: 9px; */
        /* border: 2px solid white; */
        /* border-radius: 50%; */
        transition: all 2 ease-in-out;
    }

    .topcontrol:hover {
        transform: scale(1.06);
    }

    .topcontrol i {
        color: var(--color1);
        font-size: 46px;
    }

    .topcontrol2 {
        position: fixed;
        bottom: 80px;
        right: 80px;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        width: 180px;
        height: 30px;
        background: #F8F9FA;
        border-radius: 0.25rem;
        border: 1px solid #dee2e6;
        /* padding-top: 6px; */
        /* padding-left: 9px; */
        /* border-radius: 50%; */
        transition: all 2 ease-in-out;
    }

    .topcontrol2 span {
        text-align: center;
        font-weight: bold;
        color: var(--color1);
        padding: 1rem 2rem;
    }

    .topcontrol4 {
        position: fixed;
        bottom: 230px;
        /* right: 95%; */
        right: 1%;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        background-color: #FF0000;
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol4 i {
        font-size: 36px;
        color: #fff;
        margin-top: 3px;
        margin-left: -4px;
    }

    .topcontrol4:hover {
        transform: scale(1.08);
    }

    .topcontrol5 {
        position: fixed;
        /* bottom: 112px; */
        bottom: 50px;
        /* right: 95%; */
        right: 1%;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        /* background: rgb(123, 56, 174); */
        background: linear-gradient(74deg, rgba(123, 56, 174, 1) 0%, rgba(237, 27, 32, 1) 37%, rgba(237, 32, 31, 1) 55%, rgba(236, 12, 35, 1) 67%, rgba(249, 202, 0, 1) 100%);
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol5 i {
        /* height: 28px; */
        /* width: 32px; */
        color: white;
        font-size: 36px;
        margin-top: 4px;
        margin-left: 2px;
    }

    .topcontrol5:hover {
        transform: scale(1.08);
    }

    .topcontrol6 {
        position: fixed;
        bottom: 110px;
        /* right: 95%; */
        right: 1%;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        /* background-color: #00A884; */
        background-color: #28C44C;
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol6 i {
        /* height: 50px; */
        /* width: 50px; */
        font-size: 36px;
        margin-top: 4px;
        margin-left: 1px;
        color: white;
    }

    .topcontrol6:hover {
        transform: scale(1.08);
    }

    .topcontrol7 {
        position: fixed;
        bottom: 170px;
        /* right: 95%; */
        right: 1%;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        background-color: #0B86EE;
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol7 i {
        /* height: 33px; */
        /* width: 33px; */
        font-size: 36px;
        color: #fff;
        margin-top: 5px;
        margin-left: 5px;
    }

    .topcontrol7:hover {
        transform: scale(1.08);
    }

    .botonFormulario {
        background: var(--color2);
        color: white;
        padding: 10px 20px;
        border-radius: 6px;
        transition: .3s all;
    }

    .botonFormulario:hover {
        background: var(--color1);
        transform: scale(1.08);
    }


    footer i {
        color: var(--color2);
        font-size: 1.3rem;
    }

    footer a,
    footer p {
        color: var(--color7);
        text-decoration: none;


    }

    footer a:hover {
        color: var(--color2);

    }

    footer i {
        color: var(--color6);
    }

    footer h4 {
        color: var(--color7) !important;
        font-weight: bold;
    }

    .footer-redes {
        border-radius: 50%;
        background: var(--color2);
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        /* Centrar horizontalmente */
        align-items: center;
        /* Centrar verticalmente */
        text-align: center;
        /* Asegura el texto centrado dentro del elemento */
    }

    .footer-redes i {
        color: var(--color3) !important;
        font-size: 1.5rem;

    }

    .phone-icon-container {
        display: inline-block;
        width: 50px;
        /* Ajusta el tamaño según necesites */
        height: 50px;
        /* Ajusta el tamaño según necesites */
        background-color: var(--color8);
        /* Color de fondo rojo */
        border-radius: 50%;
        /* Hacerlo circular */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .phone-icon-container i {
        font-size: 15px;
    }

    /* .phone-icon-container .fas,
    .fa {
        color: white;
    } */
    #blog-post a {
        text-align: start;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
<footer id="footer" style="position: relative;">
    <a href="#" style="position: absolute; right: 20px; top: 10px;">
        <span><i class="fas fa-chevron-circle-up" aria-hidden="true" style="font-size:2.2rem;"></i></span>
    </a>
    <div class="container-fluid pt-4" style="padding-right: 7%;padding-left:7%;">
        <div class="row pb-2 d-flex justify-content-center">
            <div class="col-lg-3 px-4">
                <img src="./public/img/icons/escudo_rosa.png" style="width: 50%;" alt="">
                <br>
                <br>
                <p style="text-align:justify;">Somos un colegio particular comprometido con la formación integral de nuestros estudiantes.</p>
                <br>
                <!--  <h4 class="py-1">Síguenos en:</h4> -->
                <div class="d-flex justify-content-between">
                    <!-- <div class="col-lg-3">
                        <div style="width: 40px;height: 40px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: transparent;border:solid 1px var(--color7);font-size:25px;"><a href="https://www.facebook.com/profile.php?id=100063958389095" target="_blank"><i class="fab fa-facebook " style="color:var(--color7);margin-top:7px;"></i></a></div>
                    </div> -->
                    <!-- <div class="col-lg-3">
                        <div style="width: 40px;height: 40px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: transparent;border:solid 1px var(--color7);font-size:25px;"><a href="https://www.youtube.com/@jeanpiagetdecarabayllo3180" target="_blank"><i class="fab fa-youtube" style="color:var(--color7);margin-top:7px;"></i></a></div>
                    </div> -->
                    <!-- <div class="col-lg-3">
                        <div style="width: 40px;height: 40px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: transparent;border:solid 1px var(--color7);font-size:25px;"><a href="https://www.instagram.com/colegiojeanpiaget.carabayllo/?next=%2F" target="_blank"><i class="fab fa-instagram" style="color:var(--color7);margin-top:7px;"></i></a></div>
                    </div> -->
                    <!--   <div class="col-lg-3">
                        <div style="width: 40px;height: 40px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;border:solid 1px var(--color7);font-size:25px;"><a href="https://twitter.com/davycollege" target="_blank"><i class="fab fa-twitter" style="color:var(--color7);margin-top:7px;"></i></a></div>
                    </div> -->
                </div>
            </div>
            <!-- <div class="col-lg-4 py-2 px-3" style=" overflow: hidden; word-wrap: break-word;">
                <h4 class="text-start" style="color:var(--color1);">Contáctanos</h4>
                <div class="d-flex justify-content-start ">
                    <div class="phone-icon-container">
                        <i class="fas fa-location-arrow"></i>
                    </div>
                    <a href="https://www.google.com.pe/maps/place/Av+Tom%C3%A1s+Marsano+3634,+Santiago+de+Surco+15048/@-12.1336727,-77.0026695,17z/data=!3m1!4b1!4m10!1m2!2m1!1sAv+santiago+de+surco+(ex+tomas+Marsano)+3634!3m6!1s0x9105b808b0b258cb:0x456233cea3fbaf90!8m2!3d-12.1336727!4d-76.9977986!15sCixBdiBzYW50aWFnbyBkZSBzdXJjbyAoZXggdG9tYXMgTWFyc2FubykgMzYzNJIBEGdlb2NvZGVkX2FkZHJlc3PgAQA!16s%2Fg%2F11sjsh1yg_?entry=ttu" target="_blank">&nbsp;&nbsp;Av Santiago de surco <br>(ex tomas Marsano) 3634</a>
                </div>
                <div class="d-flex justify-content-start py-1" style="color:var(--color6);">
                    <div class="phone-icon-container">
                        <i class="fas fa-phone-alt"></i>

                    </div>
                    <span class="my-auto">&nbsp;&nbsp;+51 998 107 051</span>
                </div>
                <div class="d-flex justify-content-start py-1">
                    <div class="phone-icon-container">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <a href="mailto:ventas@peraltabco.com" class="my-auto" style="word-wrap: break-word;">&nbsp;&nbsp;ventas@peraltabco.com</a>
                </div>
            </div> -->

            <div class="col-lg-2 py-2 px-3">
                <h4 class="text-start" style="color:var(--color7);">Niveles</h4>
                <div class="d-flex justify-content-start py-2"><a href="inicial">-&nbsp;&nbsp;Inicial</a></div>
                <div class="d-flex justify-content-start py-2"><a href="primaria">-&nbsp;&nbsp;Primaria</a></div>
                <!-- <div class="d-flex justify-content-start py-2"><a href="secundaria">-&nbsp;&nbsp;Secundaria</a></div> -->
            </div>
            <div class="col-lg-3 py-2 px-3" style=" overflow: hidden; word-wrap: break-word;">
                <h4 class="text-start" style="color:var(--color7);">Links Rápidos</h4>
                <!-- <div class="d-flex justify-content-start py-2"><a href="#" target="_blank">&nbsp;&nbsp;Política de Cookies</a></div> -->
                <div class="d-flex justify-content-start py-2"><a href="./public/files/politicas_privacidad.pdf" target="_blank">&nbsp;&nbsp;Política de Privacidad</a></div>
                <!-- <div class="d-flex justify-content-start py-2"><a href="#" target="_blank">&nbsp;&nbsp;Términos y Condiciones</a></div> -->
                <div class="row">
                    <div class="col-lg d-flex justify-content-start text-black">
                        <img src="./public/img/icons/book_reclamo.png" height="20" alt="">&nbsp;<a href="#" target="_blank" class="my-auto">Libro de Reclamaciones</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 py-2 px-3" style=" overflow: hidden; word-wrap: break-word;">
                <h4 class="text-start" style="color:var(--color1);">Contáctanos</h4>
                <div class="d-flex justify-content-start py-1" style="color:var(--color7);"><i style="color:var(--color7);" class="fas fa-location-arrow" aria-hidden="true"></i>
                    <p class="text-start" style="margin-top: -5px; margin-bottom:0px;">&nbsp;&nbsp;
                        <a href="https://www.google.com.pe/maps/place/Los+Portales+De+Javier+Prado/@-12.0408476,-76.9324393,17z/data=!3m1!4b1!4m6!3m5!1s0x9105c7d9292bda63:0xa8eb458696dc5ed8!8m2!3d-12.0408529!4d-76.9298644!16s%2Fg%2F11gj0y1zsy?hl=es-419&entry=ttu&g_ep=EgoyMDI1MDMyNS4xIKXMDSoASAFQAw%3D%3D" target="_blank">
                            Los Portales de Javier Prado II Etapa, Ate Vitarte<br>
                            Calle Oslo Nº115
                        </a>
                    </p>
                </div>
                <!-- <div class="d-flex justify-content-start py-1"><i style="color:var(--color7);" class="fas fa-phone-alt" aria-hidden="true"></i>&nbsp;&nbsp;</div> -->
                <div class="d-flex justify-content-start py-1"><i style="color:var(--color7);" class="fas fa-mobile-alt" aria-hidden="true"></i>&nbsp;&nbsp;940662564</div>
                <div class="d-flex justify-content-start py-1"><i style="color:var(--color7);" class="fab fa-whatsapp" aria-hidden="true"></i>&nbsp;&nbsp; 989443819</div>
                <div class="d-flex justify-content-start py-1"><i style="color:var(--color7);" class="fas fa-envelope my-auto" aria-hidden="true"></i><a href="mailto:informes@thomasalvaedison.edu.pe">&nbsp;&nbsp;dirección.general@ieprosadelima.edu.pe</a></div>
                <div class="d-flex justify-content-start py-1"><i style="color:var(--color7);" class="fas fa-envelope my-auto" aria-hidden="true"></i><a href="mailto:informes@thomasalvaedison.edu.pe">&nbsp;&nbsp;secretaria@ieprosadelima.edu.pe</a></div>
                <div class="d-flex justify-content-start py-1"><i style="color:var(--color7);" class="fas fa-clock" aria-hidden="true"></i>&nbsp;&nbsp;<p style="text-align: start;">Horario:<br>8:00 am. á 3:00 pm.</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row py-1 d-flex justify-content-around">
        <div class="col-lg-4 d-flex justify-content-start align-items-center">
            <p class="my-1 text-center" style="font-size: 15px; color:var(--color5);">© 2025 Todos los derechos reservados, Colegio Rosa de Lima</p>
        </div>
        <div class="col-lg-6 d-flex justify-content-end align-items-center">
            <p class="my-1 text-center" style="font-size: 14px; color: var(--color5);">Desarrollado por <a href="https://catalogoweb.cloud-cubicol.com/" target="_blank" style="color: var(--color5); font-weight: bold;text-decoration:none;">Sensoft</a></p>
        </div>
    </div>
    </div>
</footer>
<div class="bar-inf2" style="position: fixed; bottom: 60px; right: 20px; z-index: 999;">
    <a href="https://wa.me/+51989443819?text=Hola,%20estoy%20en%20la%20Web%20del%20Colegio%20Jean%20Piaget%20y%20quiero%20consultar%20sobre" target="_blank" class="text-success">
        <!-- <span class="py-2 px-3 border bg-light rounded">¿Necesita ayuda?</span> -->
        <img src="./public/img/icons/whatsapp.png" width="60" class="ms-2">
    </a>
</div>
<!-- <div class="container-fluid" style="background-color: var(--color2);">
    <div class="row ">
        <div class="col-lg-12 my-1 d-flex justify-content-center">
            <span style="text-align:center;color:var(--color1);font-size:15px;">© 2024 Todos los derechos reservados, Berkeley.</span>
        </div>
    </div>
</div> -->