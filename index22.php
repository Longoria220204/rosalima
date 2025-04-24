<?php

// Definir las rutas disponibles y sus funciones
$routes = [
    'nosotros' => 'nosotrosPage',
    'inicial' => 'inicialPage',
    'primaria' => 'primariaPage',
    'secundaria' => 'secundariaPage',
    'documentos' => 'documentosPage',
    'talleres' => 'talleresPage',
    'admision' => 'admisionPage',
    'product' => 'showProduct',
    'pastoralfamiliar' => 'pastoralfamiliarPage',
    'dominicos' => 'dominicosPage',
    'galeria' => 'galeriaPage',
    'view' => 'viewPage', // Nueva ruta para manejar view con un parámetro id
    'view2' => 'view2Page', // Nueva ruta para manejar view con un parámetro id
];

// Verificar si hay una URL proporcionada
if (isset($_GET['url'])) {
    $url = rtrim($_GET['url'], '/');
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $url = explode('/', $url);

    // Comprobar si la ruta existe en el array de rutas
    if (array_key_exists($url[0], $routes)) {
        // Manejar la ruta view con el parámetro id
        if ($url[0] == 'view' && isset($_GET['id'])) {
           
            $routes[$url[0]]($_GET['id']); // Pasar el id a viewPage      
        }
        if ($url[0] == 'view2' && isset($_GET['id'])) {
            $routes[$url[0]]($_GET['id']); // Pasar el id a viewPage
        } elseif ($url[0] == 'product' && isset($url[1])) {
            $routes[$url[0]]($url[1]); // Pasar el ID de producto a showProduct
        } else {
            $routes[$url[0]](); // Llama a la función sin parámetros
        }
    } else {
        notFoundPage(); // Página 404 si la ruta no existe
    }
} else {
    homePage();
}

// Funciones para manejar las distintas rutas

function homePage()
{
    include 'views/web/index.php';
}

function nosotrosPage()
{
    include 'views/web/nosotros.php';
}

function inicialPage()
{
    include 'views/web/inicial.php';
}

function primariaPage()
{
    include 'views/web/primaria.php';
}

function secundariaPage()
{
    include 'views/web/secundaria.php';
}

function dominicosPage()
{
    include 'views/web/dominicos.php';
}
function pastoralfamiliarPage()
{
    include 'views/web/pastoralfamiliar.php';
}
function documentosPage()
{
    include 'views/web/documentos.php';
}
function galeriaPage()
{
    include 'views/web/galeria.php';
}
function contactanosPage()
{
    include 'views/web/contactanos.php';
}
/* function documentosPage() {
    include 'views/web/documentos.php';
} */
function talleresPage()
{
    include 'views/web/talleres.php';
}

function admisionPage()
{
    include 'views/web/admision.php';
}

function showProduct($productId)
{
    echo "<h1>Producto: " . htmlspecialchars($productId) . "</h1>";
    echo "<p>Aquí están los detalles del producto con ID: " . htmlspecialchars($productId) . ".</p>";
}

// Nueva función para manejar la página de vista
function viewPage($id)
{
    include "views/web/view.php";
}
function view2Page($id)
{
    include "views/web/view2.php";
}

// Función para manejar rutas no encontradas
function notFoundPage()
{
    echo "<h1>404 - Página no encontrada</h1>";
    echo "<p>La página que buscas no existe.</p>";
}
