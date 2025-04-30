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
        color: var(--color3);
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
        color: var(--color7);
    }

    footer h4 {
        color: var(--color7) !important;
        font-weight: bold;
    }

   /*  .footer-redes {
        border-radius: 50%;
        background: var(--color2);
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center; */
        /* Centrar horizontalmente */
       /*  align-items: center; */
        /* Centrar verticalmente */
    /*     text-align: center; */
        /* Asegura el texto centrado dentro del elemento */
  /*   } */

   /*  .footer-redes i {
        color: var(--color3) !important;
        font-size: 1.5rem;

    }
     */

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
     /* Estilo de plus en redes */
     #btn-mas {
        display: none;
    }

    .contain {
        position: fixed;
        bottom: 172px;
        right: 16px;
        z-index: 10;
    }

    .redes a,
    .btn-mas label {
        display: block;
        text-decoration: none;

        color: #fff;
        width: 55px;
        height: 55px;
        line-height: 55px;
        text-align: center;
        border-radius: 50%;
        box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.4);
        transition: all 500ms ease;
        z-index: 100;

    }

   /*  .redes a:hover {
        background: #fff;
        color: var(--color7);
    } */

    .redes a {
        margin-bottom: -15px;
        opacity: 0;
        visibility: hidden;
    }

    #btn-mas:checked~.redes a {
        margin-bottom: 10px;
        opacity: 1;
        visibility: visible;
    }

    .btn-mas label {
        cursor: pointer;
        background: var(--color3);
        font-size: 23px;
    }

    #btn-mas:checked~.btn-mas label {
        transform: rotate(135deg);
        font-size: 25px;
    }

    .contain {
        display: none;
    }
    .btn-check:focus+.btn, .btn:focus {
            box-shadow: none;
    }
</style>



<footer class="container-fluid px-0" id="footer">
    <br>
    <div class="container py-1">
        <div class="row justify-content-between">
            <div class="col-md-5 my-2">
                <h2 class="text-white fw-bold">Contáctenos</h2>
                <!-- <a href="https://api.whatsapp.com/send?phone=51976760791" target="_blank">
                    <button class="btn btn-warning text-white my-3 fw-bold">Comunícate ahora &nbsp;<i class="fab fa-whatsapp"></i></button>
                </a> -->
                <div class="d-flex text-white my-3" style="align-items: center;">
                    <span style="width: 10px; text-align: center;font-family: 'Mulish', sans-serif;"><i class="fas fa-map-marker-alt" style="color:var(--color7);"></i><a href="https://www.google.com.pe/maps/place/Los+Portales+De+Javier+Prado/@-12.0408476,-76.9324393,17z/data=!3m1!4b1!4m6!3m5!1s0x9105c7d9292bda63:0xa8eb458696dc5ed8!8m2!3d-12.0408529!4d-76.9298644!16s%2Fg%2F11gj0y1zsy?hl=es-419&entry=ttu&g_ep=EgoyMDI1MDMyNS4xIKXMDSoASAFQAw%3D%3D" target="_blank"></span>
                    <span class="ms-4">Los Portales de Javier Prado II Etapa, Ate Vitarte<br>
                        Calle Oslo Nº115</a></span>
                </div>
                <div class="d-flex text-white my-3" style="align-items: center;">
                    <span style="width: 10px; text-align: center;font-family: 'Mulish', sans-serif;"><i class="far fa-envelope" style="color:var(--color7);"></i><a href="mailto:informes@thomasalvaedison.edu.pe"></span>
                    <span class="ms-4">dirección.general@ieprosadelima.edu.pe</a></span>

                </div>
                <div class="d-flex text-white my-3" style="align-items: center;">
                    <span style="width: 10px; text-align: center;font-family: 'Mulish', sans-serif;"><i class="far fa-envelope" style="color:var(--color7);"></i><a href="mailto:informes@thomasalvaedison.edu.pe"></span>
                    <span class="ms-4">secretaria@ieprosadelima.edu.pe</a></span>

                </div>

                <div class="d-flex text-white my-3" style="align-items: center;">
                    <span style="width: 10px; text-align: center;font-family: 'Mulish', sans-serif;"><i class="fas fa-phone-alt" style="color:var(--color7);"></i><a href="tel:+51940662564"></span>
                    <span class="ms-4">940662564</span></a>

                </div>
                <div class="d-flex text-white my-3" style="align-items: center;">
                    <span style="width: 10px; text-align: center;"><i class="fas fa-mobile-alt" style="color:var(--color7);"><a href="tel:+51989443819"></i></span>
                    <span class="ms-3">989443819</span></a>
                </div>
                <div class="d-flex text-white my-3" style="align-items: center;">
                    <span style="width: 10px; text-align: center;font-family: 'Mulish', sans-serif;"><i class="far fa-clock" style="color:var(--color7);"></i></span>
                    <span class="ms-4">Horario de atención:</span>
                </div>
                <div class="d-flex text-white my-3" style="align-items: center;">
                    <span class="ms-4">&nbsp;&nbsp;&nbsp;8:00 am. a 3:00 pm</span>
                </div>
                <br>
                <div class="col-lg d-flex justify-content-start text-black">
                        <img src="./public/img/icons/book_reclamo.png" height="42" alt="">&nbsp;<a href="#" target="_blank" class="my-auto">Libro de Reclamaciones</a>
                    </div>
            </div>
            <div class="col-md-6 my-2">
                <h2 class="text-white fw-bold">
                    Envíanos tu consulta
                </h2>
                <form onsubmit="enviarCorreo(event)" class="form-group" id="formcontacto">
                    <input type="text" class="form-control my-3" name="nombre" placeholder="Ingrese nombre" required="">
                    <input type="text" class="form-control my-3" name="correo" placeholder="Ingrese email" required="">
                    <textarea class="form-control mb-4" rows="4" name="consulta" placeholder="Escribe tu consulta ..." required=""></textarea>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn  text-white" type="submit">Enviar <i class="fas fa-chevron-circle-right"></i></button>
                        <div class="form-check" data-bs-toggle="modal" data-bs-target="#modalPoliticas">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                He leído y acepto las políticas de privacidad
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <!-- Modal -->
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
    <a href="https://wa.me/+51940662564?text=Hola,%20estoy%20en%20la%20Web%20del%20Colegio%20Rosa%20de%20Lima%20y%20quiero%20consultar%20sobre" target="_blank" class="text-success">
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
<script>
    function enviarCorreo(e) {
        e.preventDefault();
        const data = new FormData(document.getElementById('formcontacto'));
        fetch('./lib/correo_mailer.php', {
            method: 'POST',
            body: data
        }).then(function(res) {
            return res.text();
        }).then(function(res) {
            alert(res);
        }).then(function(res) {
            e.target.reset();
        });
    }
</script>