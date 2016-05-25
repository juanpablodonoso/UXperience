<?php

class PromotionsView{

    function print_promotions(){
        
        echo '<!-- Banner -->
        <section class="parallax-promotion">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Promociones</h1>
                </div>
            </div>
        </section>

        <section>
        <div class="container-fluid promotions-container">
        <div class="row promotions">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/promotions/1.png" alt="Promocion número uno">
                    <div class="caption">
                        <h3>Oferta de dos noches</h3>
                        <div class="promotion-more">
                            <!-- Trigger the modal with a button -->
                            <button type="button" class="button" data-toggle="modal" data-target="#myModal">Leer más</button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Oferta de dos noches</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Disfrute de un 10% de descuento en estancias de un mínimo de dos noches.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/promotions/2.png" alt="Promocion número dos">
                    <div class="caption">
                        <h3>Oferta de 10% de descuento</h3>
                        <div class="promotion-more">
                            <!-- Trigger the modal with a button -->
                            <button type="button" class="button" data-toggle="modal" data-target="#promotion1">Leer más</button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="promotion1" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Oferta de 10% de descuento</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Disfrute de un 10% de descuento con esta tarifa no reembolsable.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/promotions/3.png" alt="Promocion número tres">
                    <div class="caption">
                        <h3>Reserva anticipada</h3>
                        <div class="promotion-more">
                            <!-- Trigger the modal with a button -->
                            <button type="button" class="button" data-toggle="modal" data-target="#promotion2">Leer más</button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="promotion2" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Reserva anticipada</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Disfruta de un 10% de descuento reservando con 21 días de antelación.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row promotions">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/promotions/4.png" alt="Promocion número cuatro">
                    <div class="caption">
                        <h3>Habitación doble junto con tren turístico</h3>
                        <div class="promotion-more">
                            <!-- Trigger the modal with a button -->
                            <button type="button" class="button" data-toggle="modal" data-target="#promotion3">Leer más</button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="promotion3" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Habitación doble junto con tren turístico</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Esta oferta incluye:</p>
                                        <ul>
                                            <li>Dos noche en una habitación estandar con desayuno continental incluido.</li>
                                            <li>Dos tickers para el tren turístico.</li>
                                        </ul>

                                        <p>Granada Tourist Train:</p>

                                        <p>Gracias a este servicio, que recorre la ciudad, usted podrá ver la Alhambra, el barrio del Albaicín, el centro comercial de la ciudad y el barrio del Realejo. El servicio está disponible cada 15-20 minutos.</p>
                                        <ul>
                                            <li>La duración total del recorrido es de una hora y cuarto aproximadamente.</li>
                                            <li>Incluye una audioguía individual</li>
                                            <li>Hora de apertura: desde las nueve de la mañana hasta las diez de la noche.</li>
                                        </ul>

                                        <p>Itinerarío: Alhambra-Cuesta Gomerez-Plaza Nueva-Paseo de los Tristes-Plaza Abad/Mirador de San Nicolás-Plaza San Miguel Bajo- Plaza Romanilla/Catedral-Calle Alhóndiga-Plaza Mariana Pineda-Calle Molinos / Campo del Prínicpe-Alhambra Palace.<p></p>

                                        <p>De Lunes a Jueves, 119 €</p>
                                        <p>Viernes y Sábado, 139 €</p>

                                        <p>Release 48 h</p>
                                        <p>La cancelación debe comunicarse con 72 horas de antelación.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/promotions/5.png" alt="Promocion número cinco">
                    <div class="caption">
                        <h3>Habitación doble junto con sesión de baños árabes</h3>
                        <div class="promotion-more">
                            <!-- Trigger the modal with a button -->
                            <button type="button" class="button" data-toggle="modal" data-target="#promotion5">Leer más</button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="promotion5" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Habitación doble junto con sesión de baños árabes</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Esta oferta incluye:</p>

                                        <ul>
                                            <li>Dos noche en una habitación estandar con desayuno continental incluido.</li>
                                            <li>Una sesión de baños árabes en Hammam Al Ándalus Granada.</li>
                                        </ul>

                                        <p>Hammam Al Ándalus Granada:</p>

                                        <p>Trayendo de nuevo la antigua tradición del Hamman, ofrece un nuevo concepto de baño enfocado al cuidado general del cuerpo en una atmósfera de tranquilidad.</p>

                                        <p>Incluye: una sesión de baño de contrastes, alternando frío y calor. No se recomienda pasar más de 10 minutos en el baño caliente.</p>

                                        <p>Detalles: es necesario un traje de baño y calzado adecuado. Cada sesión dura una hora y media.</p>

                                        <p>Programación: hay sesiones a las 10, 12, 14, 16, 18, 20 and 22. Habierto toda la semana incluyendo festivos.</p>

                                        <p>De Lunes a Jueves, € 154</p>
                                        <p>Viernes y Sábado, € 174</p>

                                        <p>Release: 48 h</p>
                                        <p>La cancelación debe comunicarse con 72 horas de antelación.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/promotions/6.png" alt="Promocion número seis">
                    <div class="caption">
                        <h3>Habitación doble junto con espectáculo de flamenco</h3>
                        <div class="promotion-more">
                            <!-- Trigger the modal with a button -->
                            <button type="button" class="button" data-toggle="modal" data-target="#promotion6">Leer más</button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="promotion6" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Habitación doble junto con espectáculo de flamenco</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Incluye:</p>
                                        <ul>
                                            <li>2 noches de alojamiento en habitaciones estándar</li>
                                            <li>Desayuno continental</li>
                                            <li>Espectaculo flamenco</li>
                                        </ul>

                                        <p>El templo del flamenco:</p>
                                        <p>El Flamenco más puro nacido del corazón del monte Albayzín, vive un recuerdo de vida en la cueva flamenca más bonita de Andalucía de la que cuenta la leyenda que fue templo clandestino de cultos religiosos y donde ahora rendimos culto a nuestro arte.</p>

                                        <p>Lugar: Cerca de la parada del tren en Plaza San Miguel Bajo</p>

                                        <p>Incluye: Espectáculo y una consumición.</p>

                                        <p>Duración: 1 hora aproximadamente de cuadro flamenco</p>

                                        <p>Horario: Comienzo: 21:30 h, durante todos los días del año, excepto el 24 y 31 de diciembre.</p>

                                        <p>De domingo a jueves 154 €</p>
                                        <p>Viernes y sábado 174 €</p>

                                        <p>Release 48 h</p>
                                        <p>La cancelación debe comunicarse con 72 horas de antelación.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row table-row promotions">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/promotions/7.png" alt="Promocion número siete">
                    <div class="caption">
                        <h3>Habitación doble y visita guiada a la Alhambra</h3>
                        <div class="promotion-more">
                            <!-- Trigger the modal with a button -->
                            <button type="button" class="button" data-toggle="modal" data-target="#promotion7">Leer más</button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="promotion7" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Habitación doble y visita guiada a la Alhambra</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Incluye:</p>
                                        <ul>
                                            <li>2 noches de alojamiento en habitaciones estándar</li>
                                            <li>Desayuno continental</li>
                                            <li>Visita guiada a la Alhambra</li>
                                        </ul>

                                        <p>La Alhambra:</p>
                                        <p>
                                            Descubrirá con nosotros la única ciudad medieval musulmana mejor conservada del mundo, la Alhambra;
                                            visitando sus palacios, Mexuar, Comares, Leones, Generalife; paseando por sus patios, de los Arrayenes,
                                            la Reja, la Acequia, la Sultana; y disfrutando de sus jardines, de Partal, de la Medina y por suspuesto del Generalife
                                            con sus gracioso juegos de agua, y su laberintico diseño.
                                        </p>

                                        <p>Incluye: Recogida, ida y vuelta, en bus en el hotel, azafata acompañante, entradas al monumento y guía oficial.</p>

                                        <p>Duración:aproximadamente 3 h.</p>

                                        <p>Horario: Según disponibilidad a la hora de la reserva.</p>

                                        <p>De domingo a jueves 204 €</p>
                                        <p>Viernes y sábado 224 €</p>

                                        <p>Release 48 h</p>
                                        <p>La cancelación debe comunicarse con 72 horas de antelación.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/promotions/8.png" alt="Promocion número ocho">
                    <div class="caption">
                        <h3>Habitación doble junto con trén y espectáculo de flamenco</h3>
                        <div class="promotion-more">
                            <!-- Trigger the modal with a button -->
                            <button type="button" class="button" data-toggle="modal" data-target="#promotion8">Leer más</button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="promotion8" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Habitación doble junto con trén y espectáculo de flamenco</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Incluye:</p>
                                        <ul>
                                            <li>2 noches de alojamiento en habitaciones estándar</li>
                                            <li>Desayuno continental</li>
                                            <li>Espectáculo flamenco</li>
                                            <li>2 Tickets para uso del tren durante todo el día. Hop on - Hop off.</li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>';

    }
}

?>