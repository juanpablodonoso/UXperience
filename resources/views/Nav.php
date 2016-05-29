<?php

class Nav{

    function print_nav(){
        echo '<nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/"><img class="img-responsive" src="img/logo.png" alt="logo de la pagina"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="?page=promotions">Promociones</a></li>
                            <li class="dropdown">
                                <a href="?page=rooms">Habitaciones</a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a href="?page=double-room">Habitación doble</a></li>
                                    <li><a href="?page=triple-room">Habitación triple</a></li>
                                    <li><a href="?page=superior-room">Habitación superior</a></li>
                                </ul>
                            <li><a href="#service">Servicios</a></li>
                            <li><a href="?page=gallery">Galería</a></li>
                            <li><a href="?page=contact">Contacto y ubicación</a></li>
                            <li><a href="?page=opinions">Opiniones</a></li>
                            <li><a href="?page=myreserve">Mi reserva</a></li>
                            <li id="active"><a href="?page=reserve&step=availability">RESERVAR AHORA</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            ';
    }
}

?>