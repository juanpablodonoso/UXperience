<?php

class SiteMapView
{
    function print_site_map(){
        echo '
            <section style="margin-bottom: 20px">
                <div class="container-fluid nopadding">
                    <div class="row" id="sitemap-title" style="padding-left: 100px">
                        <div class="col-sm-6 nopadding">
                            <h1>Mapa del sitio</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container links">
                        <div class="row section">
                            <div class="col-sm-offset-3 col-sm-3">
                                <ul>
                                    <li><a href="?page=promotions">Promociones</a></li>
                                    <li ><a href="?page=rooms">Habitaciones</a>
                                        <ul>
                                            <li><a href="?page=double-room">Habitación doble</a></li>
                                            <li><a href="?page=triple-room">Habitación triple</a></li>
                                            <li><a href="?page=superior-room">Habitación superior</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="?page=services">Servicios</a></li>
                                    <li><a href="?page=gallery">Galería</a></li>  
                                </ul>  
                            </div>
                            <div class="col-sm-3">
                                <ul>
                                    <li><a href="?page=contact">Contacto y ubicación</a></li>
                                    <li><a href="?page=myreserve">Mi reserva</a></li>
                                    <li><a href="?page=reserve&step=select_room">Reservar ahora</a></li>
                                </ul>  
                            </div>
                        </div>
                </div>
            </section>';
    }
}