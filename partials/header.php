<style>
    .nav-item {
        padding-left: 1rem;
    }

    .navbar-dark .navbar-toggler {
        border-color: var(--color1);
        background-color: var(--color1);
    }

    .abajo {
        background-color: white;
        -moz-box-shadow: 0 3px 3px rgba(190, 190, 190, 0.75);
        -webkit-box-shadow: 0 3px 3px rgba(190, 190, 190, 0.75);
        box-shadow: 0 3px 3px rgba(190, 190, 190, 0.75);
    }
    /*TONALIDAD OSCURA TRANSPARENTE
   /*  #header nav.navbar {
        background-color: rgba(0, 0, 0, 0.3);
    } */
    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {
        .dropdown-menu li {
            position: relative;
        }

        .nav-item .submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: -7px;
        }

        .nav-item .submenu-left {
            right: 100%;
            left: auto;
        }

        .dropdown-menu>li:hover {
            background-color: #f1f1f1
        }

        .dropdown-menu>li:hover>.submenu {
            display: block;
        }
    }

    /* ============ desktop view .end// ============ */

    /* ============ small devices ============ */
    @media (max-width: 991px) {
        .dropdown-menu .dropdown-menu {
            margin-left: 0.7rem;
            margin-right: 0.7rem;
            margin-bottom: .5rem;
        }
    }



    /* ============ small devices .end// ============ */
</style>
<header id="header" class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container ps-0">
            <a class="navbar-brand fs-4 fw-bold" style="letter-spacing: .08em;" href="/">
                <img src="public/img/icons/logo.png" height="100">
                <!--   <span>sa</span> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="./">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item" onmouseover="showMenuHover(0)" onmouseout="showMenuHover2(0)">
                        <a class="nav-link" href="#" id="navbarDropdown">
                            Niveles &nbsp;<i class="fas fa-chevron-down" style="font-size:12px;"></i>
                        </a>
                        <ul class="dropdown-menu animate__animated animate__fadeInUp" aria-labelledby="navbarDropdown">
                            <li id='list-menu'><a class="dropdown-item py-2" href="./inicial.php">Inicial</a></li>
                            <li id='list-menu'><a class="dropdown-item py-2" href="./primaria.php">Primaria</a></li>
                            <!-- <li id='list-menu'><a class="dropdown-item py-2" href="secundaria">Secundaria</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item" onmouseover="showMenuHover(1)" onmouseout="showMenuHover2(1)">
                        <a class="nav-link" href="#" id="navbarDropdown">
                            Pastoral &nbsp;<i class="fas fa-chevron-down" style="font-size:12px;"></i>
                        </a>
                        <ul class="dropdown-menu animate__animated animate__fadeInUp" aria-labelledby="navbarDropdown">
                            <li id='list-menu'><a class="dropdown-item py-2" href="./pastoralfamiliar.php">Pastoral Familiar</a></li>
                            <li id='list-menu'><a class="dropdown-item py-2" href="./dominicos.php">Pequeños Dominicos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./documentos.php">Documentos</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="galeria">Galería</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="contactanos">Contáctanos</a>
                    </li> -->
                    <!-- <li class="nav-item" onmouseover="showMenuHover(1)" onmouseout="showMenuHover2(1)">
                        <a class="nav-link" href="#" id="navbarDropdown">
                            Publicaciones &nbsp;<i class="fas fa-chevron-down" style="font-size:12px;"></i>
                        </a>
                        <ul class="dropdown-menu animate__animated animate__fadeInUp" aria-labelledby="navbarDropdown">
                            <li id='list-menu'><a class="dropdown-item py-2" href="talleres">Talleres</a></li>
                            <li id='list-menu'><a class="dropdown-item py-2" href="documentos">Documentos</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item me-0">
                        <div style="background-color:var(--color3);border-radius:20px;">
                            <a class="nav-link round text-white" href="./admision.php">&nbsp;&nbsp;&nbsp;Admisión&nbsp;&nbsp;&nbsp;</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<script>
    var height = document.getElementById('header').clientHeight;
    document.querySelector('body').style.paddingTop = height + "px";

    function showMenuHover(index, add = true) {
        const menu = document.querySelectorAll('ul.dropdown-menu')[index];
        menu.classList.add('show');
    }

    function showMenuHover2(index, add = false) {
        const menu = document.querySelectorAll('ul.dropdown-menu')[index];
        menu.classList.remove('show');
    }

    // Añadir un evento de clic a todos los elementos con submenús
    document.querySelectorAll('.submenu-parent > a').forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault();
            const submenu = this.nextElementSibling;
            submenu.classList.toggle('show');
        });
    });
</script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        // make it as accordion for smaller screens
        if (window.innerWidth < 992) {

            // close all inner dropdowns when parent is closed
            document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
                everydropdown.addEventListener('hidden.bs.dropdown', function() {
                    // after dropdown is hidden, then find all submenus
                    this.querySelectorAll('.submenu').forEach(function(everysubmenu) {
                        // hide every submenu as well
                        everysubmenu.style.display = 'none';
                    });
                })
            });

            document.querySelectorAll('.dropdown-menu a').forEach(function(element) {
                element.addEventListener('click', function(e) {
                    let nextEl = this.nextElementSibling;
                    if (nextEl && nextEl.classList.contains('submenu')) {
                        // prevent opening link if link needs to open dropdown
                        e.preventDefault();
                        if (nextEl.style.display == 'block') {
                            nextEl.style.display = 'none';
                        } else {
                            nextEl.style.display = 'block';
                        }

                    }
                });
            })
        }
        // end if innerWidth
    });
    // DOMContentLoaded  end
</script>
<script>
    function toggleHeaderClass() {
        var header = document.querySelector("header");

        if (window.innerWidth <= 700) {
            header.classList.add("abajo");
        } else {
            header.classList.toggle("abajo", window.scrollY > 50);
        }
    }

    // Escucha el evento de scroll y resize para pantallas mayores a 700px
    window.addEventListener("scroll", function() {
        if (window.innerWidth > 700) {
            toggleHeaderClass();
        }
    });

    window.addEventListener("resize", function() {
        // Actualiza el padding-top y verifica el scroll cada vez que cambie el tamaño de la ventana
        setBodyPadding();
        toggleHeaderClass();
    });

    // Llama a la función al cargar la página para establecer la clase inicial
    toggleHeaderClass();
</script>