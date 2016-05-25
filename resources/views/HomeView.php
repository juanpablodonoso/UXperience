<?php

class HomeView{
    //Function that prints home's page
    function print_home(){
        $this->first_section();
        $this->print_parallax();
        $this->second_section();
    }

    //Function that prints the first section of home's page
    private function first_section(){
        echo '<section class="first-section">';
        $this->print_carousel();
        $this->print_description();
        echo '</section>';
    }

    //Function that prints a simple parallax on home's page
    private function print_parallax(){
        echo '
            <!-- Imagen de transicion -->
            <section class="parallax-index"/>
            </section>
        ';
    }

    //Function that prints the second section of home's page
    private function second_section(){
        echo '
            <section class="second-section">
        ';

        $this->print_promotion_slider();
        $this->print_rooms();
        $this->print_map();
        echo '
        </section>
        ';
    }


    /******************************/
    /*                            */
    /*  FIRST SECTION'S FUNCTIONS */
    /*                            */
    /******************************/

    private function print_carousel(){
        echo '
            <!-- Slide de imagenes -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner mySlider" role="listbox">
                    <div class="item active">
                        <img src="img/1.jpg" alt="Image">
                    </div>
        
                    <div class="item">
                        <img src="img/2.jpg" alt="Image">
                    </div>
        
                    <div class="item">
                        <img src="img/3.jpg" alt="Image">
                    </div>
        
                    <div class="item">
                        <img src="img/4.jpg" alt="Image">
                    </div>
        
                    <div class="item">
                        <img src="img/5.jpg" alt="Image">
                    </div>
        
                    <div class="main-text hidden-xs">
                        <div class="col-sm-12 text-center">
                            <h1 class="static-welcome">Bienvenido al<br/> hotel Plaza Nueva</h1>
                        </div>
                    </div>
                </div>
        
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <!-- Ocultar informacion para lectores de pantalla-->
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <!-- Ocultar informacion para lectores de pantalla-->
                    <span class="sr-only">Next</span>
                </a>
            </div>
        ';
    }

    private function print_description(){
        echo '
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 description">
                        <h1 id="description-header">Hotel Plaza Nueva</h1>
                        <p id="description-text">Situado en pleno centro monumental, comercial y administrativo de Granada,
                            nuestro hotel ofrece una gran variedad de servicios que satisfarán cualquier necesidad que le surja.
                        </p>
                    </div>
                    <div class="col-sm-6 characteristics" id="service">
                        <p>Tiene a su disposición los siguientes servicios:</p>
                        <div class="service">
                            <i class="flaticon-icon-62768"></i>
                            <p>Recepción 24 horas</p>
                        </div>
                        <div class="service">
                            <i class="flaticon-connection"></i>
                            <p>Conexión wifi a Internet</p>
                        </div>
                        <div class="service">
                            <i class="flaticon-circle"></i>
                            <p>Bar-Cafetería</p>
                        </div>
                        <div class="service">
                            <i class="flaticon-icon-101197"></i>
                            <p>Consigna de equipajes</p>
                        </div>
                        <div class="service">
                            <i class="flaticon-weather"></i>
                            <p>Aire acondicionado</p>
                        </div>
                        <div class="service">
                            <i class="flaticon-car"></i>
                            <p>Parking cubierto</p>
                        </div>
                        <div class="service">
                            <i class="flaticon-hospital"></i>
                            <p>Accesos adaptados</p>
                        </div>
                        <div class="service">
                            <i class="flaticon-icon-60435"></i>
                            <p>Servicio de habitaciones</p>
                        </div>
                    </div>
                </div>
            </div>
        ';
    }

    /******************************/
    /*                            */
    /* SECOND SECTION'S FUNCTIONS */
    /*                            */
    /******************************/

    //Function that prints the available type of rooms in home's page
    private function print_rooms(){
        echo '
        <!-- Habitaciones -->
            <div class="container-fluid" id="rooms">
                <div class="row">
                    <a href="index.php?page=rooms">
                        <div class="col-sm-12 nopadding">
                            <h1 class="rooms-header">Habitaciones</h1>
                        </div>
                    </a>
                </div>
                <div class="row">
                    <div class="col-sm-4 room">
                        <a href="index.php?page=double-room">
                            <img class="img-responsive" src="img/doble.jpg"/>
                        </a>
                        <h1 class="room-header">Habitación doble</h1>
                    </div>
                    <div class="col-sm-4 room">
                        <a href="index.php?page=triple-room">
                            <img class="img-responsive" src="img/triple.jpg"/>
                        </a>
                        <h1 class="room-header">Habitación triple</h1>
                    </div>
                    <div class="col-sm-4 room">
                        <a href="index.php?page=superior-room">
                            <img class="img-responsive" src="img/superior.jpg"/>
                        </a>
                        <h1 class="room-header">Habitación superior</h1>
                    </div>
                </div>
            </div>
        ';
    }

    //Function that prints promotions's slider
    private function print_promotion_slider(){
        echo'
        <div class="container-fluid">
            <div class="row">
                <a href="index.php?page=promotions">
                    <div class="col-sm-12 nopadding">
                        <h1 class="promotions-header">Promociones destacadas</h1>
                    </div>
                </a>
            </div>
        </div>
        ';
        echo'
        <!-- Promotion slider -->
            <div id="promotionSlider" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="row promotion-slider">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row background">
                            <div class="col-sm-6 nopadding">
                                <img class="img-responsive" src="img/promotions/5.png" alt="Promocion número cinco">
                            </div>
                            <div class="col-sm-6 promotion-description">
                                <h1 class="promotion-header">Habitación doble junto con sesión de baños árabes</h1>
                                <p class="promotion-text">Gracias a esta promoción podrá disfrutar de dos noches en una habitacion estandar acompañadas
                                de una sesión de baños árabes en Hammam Al Ándalus Granada, en la que podrá disfrutar de la antigua tradición del Hamman.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row background">
                            <div class="col-sm-6 nopadding">
                                <img class="img-responsive" src="img/promotions/espectaculo.jpg" alt="Promocion número seis">
                            </div>
                            <div class="col-sm-6 promotion-description">
                                <h1 class="promotion-header">Habitación doble junto con espectáculo de flamenco</h1>
                                <p class="promotion-text">Con esta promoción disfrutaras de dos noches en nuestro hotel y además
                                 podrás presenciar uno de los mayores espectáculos de flamenco de la ciudad de Granada.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row background">
                            <div class="col-sm-6 nopadding">
                                <img class="img-responsive" src="img/promotions/7.png" alt="Promocion número siete">
                            </div>
                            <div class="col-sm-6 promotion-description">
                                <h1 class="promotion-header">Habitación doble y visita guiada a la Alhambra</h1>
                                <p class="promotion-text">Gracias a esta promoción podrá disfrutar de dos noches en una habitacion estandar y 
                                descubrirá con nosotros la única ciudad medieval musulmana mejor conservada del mundo, la Alhambra</p>
                            </div>
                        </div>
                    </div>

                </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control promotions-button" href="#promotionSlider" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <!-- Ocultar informacion para lectores de pantalla-->
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control promotions-button" href="#promotionSlider" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <!-- Ocultar informacion para lectores de pantalla-->
                    <span class="sr-only">Next</span>
                </a>
            </div>';
    }

    //Function that prints the map of home's page
    private function print_map(){
        echo '
            <div class="container-fluid">
                <div class="row" id="map">
                    <a href="index.php?page=contact">
                        <div class="col-sm-12 nopadding">
                            <h1 class="map-header">¿Dónde nos encontramos?</h1>
                        </div>
                    </a>
                </div>
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <div class="map" id="googleMap"></div>
                    </div>
                </div>
            </div>
        ';
    }
}