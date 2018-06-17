<?php
    session_start();

    if(isset($_SESSION["usuario"]) && ($_SESSION["rol"] == "R01" || $_SESSION["rol"] == "R02" || $_SESSION["rol"] == "R04")) {
        $user = $_SESSION["usuario"];
        $nombre = $_SESSION["nombre"];
        $rol = $_SESSION["rol"];
        $funciones = $_SESSION["funciones"];
        $view = "eventos";


        // Head and body tag
        include("partials/_header.html");
        // Top Navbar
        include("partials/_navbar.html");
        // Sidebar
        include("partials/_sidebar.html");
        // Tag to open content wrapper
        include("partials/_page_content_wrapper_start.html");
        // Content
        include("partials/_eventos.html");
        // Tag to close content wrapper
        include("partials/_page_content_wrapper_end.html");
        // Additional Scripts and Modals can be included here
        // include("partials/_eventos_modals.html");
        include("partials/_common_js.html");
        echo   '<script src="https://cdn.jsdelivr.net/gh/atatanasov/gijgo@1.7.3/dist/combined/js/gijgo.min.js" type="text/javascript"></script>
                <script src="js/comportamiento.js"></script>
                <script src="js/modals_gallery.js"></script>\';
                <script src="js/modals.js"></script>';
        // Required Scripts and end of file
        include("partials/_end.html");
    } else {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: index.php");
    }
?>
