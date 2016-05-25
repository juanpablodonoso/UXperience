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
                        <a class="navbar-brand" href="index.php"><img class="img-responsive" src="img/logo.png" alt="logo de la pagina"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php?page=promotions">Promociones</a></li>
                            <li class="dropdown">
                                <a href="index.php?page=rooms">Habitaciones</a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a href="index.php?page=double-room">Habitación doble</a></li>
                                    <li><a href="index.php?page=triple-room">Habitación triple</a></li>
                                    <li><a href="index.php?page=superior-room">Habitación superior</a></li>
                                </ul>
                            <li><a href="index.php#service">Servicios</a></li>
                            <li><a href="index.php?page=gallery">Galería</a></li>
                            <li><a href="index.php?page=contact">Contacto y ubicación</a></li>
                            <li><a href="index.php?page=opinions">Opiniones</a></li>
                            <li><a href="index.php?page=myreserve">Mi reserva</a></li>
                            <li id="active"><a href="index.php?page=reserve">RESERVAR AHORA</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            ';
    }
}

?>