<?php
class RoomsView{
    //This function prints Rooms's page

    function print_all_rooms(){

        echo '
        <!-- Banner -->
        <section class="parallax-room">

            <div class="container">

                <div class="row">
                  <div class="col-sm-12">
                    <h1>Habitaciones</h1>
                  </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">


                <div class="row">
                        <div class="col-lg-12">
                            <ol class="breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active"><a href="index.php?page=rooms">Habitaciones</a></li>
                            </ol>
                         </div>
                </div>

            <div class="row">
                <div class="col-sm-6 text-left description">
                    <h3>Habitación doble</h3>
                    <p>En nuestras habitaciones<strong> standard</strong> disfrutará de todo el equipamiento
                        y comodidades que su estancia en Granada merece.</p>
                     <hr>
                    <a href="index.php?page=double-room" class="btn btn-default"><span class="glyphicon glyphicon-zoom-in"></span>  Más sobre esta habitación</a>
                </div>
                <div class="col-sm-6">
                        <figure class="room-figure">
                        <img class="img-responsive" src="img/doble.jpg" alt="Habitación doble">
                        </figure>
                </div>
            </div>


            <hr>
            <div class="row">

                <div class="col-xs-12 cols-sm-12 col-md-6 text-left description">
                    <h3>Habitación triple</h3>
                    <p>En nuestras <strong>habitaciones triples</strong> podrá disfrutar de sus vacaciones
                        en familia o con amigos en el centro de Granada.</p>
                    <hr>
                     <a href="index.php?page=triple-room" class="btn btn-default"><span class="glyphicon glyphicon-zoom-in"></span>  Más sobre esta habitación</a>
                </div>

                <div class=" col-xs-12 col-sm-6 col-md-6">
                    <figure class="room-figure">
                        <img class="img-responsive" src="img/triple.jpg" alt="Habitación triple">
                    </figure>
                </div>

            </div>
            <hr>
            <div class="row">

                <div class="col-sm-6 text-left description">
                    <h3>Habitación superior</h3>
                    <p>Disfrute de una<strong> magnifica vista de Plaza Nueva</strong> y
                        el centro de Granada desde nuestras habitaciones superiores.</p>
                    <hr>
                     <a href="index.php?page=superior-room" class="btn btn-default"><span class="glyphicon glyphicon-zoom-in"></span>  Más sobre esta habitación</a>
                </div>
                <div class="col-sm-6">
                    <figure class="room-figure">
                        <img class="img-responsive" src="img/superior.jpg" alt="Habitación superior">
                    </figure>
                </div>
            </div>
        </div>
        </section>';
    }

    function print_room($page){

        switch ($page){
            case 'double-room':
                echo '<section class="section">
                        <div class="container">
                        <div class="row">
                        <div class="col-lg-12">
                            <ol class="breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="index.php?page=rooms">Habitaciones</a></li>
                                    <li class="active"><a></a>Habitación Doble</li>
                                    <li><a href="index.php?page=triple-room">Habitación triple</a></li>
                                    <li><a href="index.php?page=superior-room">Habitación Superior</a></li>


                            </ol>

                                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                    <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
      ...
                                     </div>
                                     </div>
                                    </div>
                         </div>
                        </div>
                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8 text-center description">
                                        <h2>Habitación doble</h2>
                                        <hr>
                                            <div id="carousel-habitaciones" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner room-slider">
                                                    <div class="item active">
                                                        <img class="img-responsive" src="img/doble1.jpg" alt="">
                                                    </div>
                                                    <div class="item">
                                                        <img class="img-responsive" src="img/doble.jpg" alt="">
                                                    </div>
                                                    <div class="item">
                                                        <img class="img-responsive" src="img/doble3.png" alt="">
                                                    </div>
                                                </div>

                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-habitaciones" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-habitaciones" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                </a>
                                            </div>
                                            <hr>
                                            <p>En nuestras habitaciones<strong> standard</strong> disfrutará de todo el equipamiento
                                            y comodidades que su estancia en Granada merece.</p>

                                            <!-- Call to Action Section -->
                                        <div class="well">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <p>
                                                        Aplique su código de promoción a esta habitación o elija entre las diferentes excursiones que le recomendamos
                                                        durante el proceso de reserva.

                                                    </p>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="index.php?page=reserve&step=availability" class="btn btn-default"><span class="glyphicon glyphicon-calendar"></span><strong>Realice su reserva</strong></a>
                                                </div>
                                            </div>
                                        </div>

                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>
                                </div>
                                <!--<div class="row">


                                    </div>-->
                            </div>
                    </section>';
                break;
            case 'triple-room':
                echo '<section class="section">
                        <div class="container">

                           <div class="row">
                            <div class="col-lg-12">
                            <ol class="breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="index.php?page=rooms">Habitaciones</a></li>
                                    <li><a href="index.php?page=double-room"</a>Habitación Doble</li>
                                    <li class="active"></a>Habitación Triple</li>
                                    <li><a href="index.php?page=superior-room"></a>Habitación Superior</li>
                            </ol>
                            </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-2"></div>

                                <div class="col-sm-8 text-center description">
                                    <h3>Habitación triple</h3>
                                    <hr>

                                    <div id="carousel-habitaciones" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner room-slider">
                                                    <div class="item active">
                                                        <img class="img-responsive" src="img/triple.jpg" alt="">
                                                    </div>
                                                    <div class="item">
                                                        <img class="img-responsive" src="img/doble.jpg" alt="">
                                                    </div>
                                                    <div class="item">
                                                        <img class="img-responsive" src="img/doble3.png" alt="">
                                                    </div>
                                                </div>

                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-habitaciones" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-habitaciones" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                </a>
                                     </div>
                                     <hr>
                                        <p>En nuestras <strong>habitaciones triples</strong> podrá disfrutar de sus vacaciones
                                        en familia o con amigos en el centro de Granada.</p>


                                       <!-- Call to Action Section -->
                                        <div class="well">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <p>
                                                        Aplique su código de promoción a esta habitación o elija entre las diferentes excursiones que le recomendamos
                                                        durante el proceso de reserva.

                                                    </p>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="index.php?page=reserve&step=availability" class="btn btn-default"><span class="glyphicon glyphicon-calendar"></span><strong>Realice su reserva</strong></a>
                                                </div>
                                            </div>
                                        </div>



                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </div>
                </section>';
                break;
            case 'superior-room':
                echo '<section class="section">
                        <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                            <ol class="breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="index.php?page=rooms">Habitaciones</a></li>
                                    <li><a href="index.php?page=double-room"></a>Habitación doble</li>
                                    <li><a href="index.php?page=triple-room">Habitación triple</a></li>
                                    <li class="active"><a></a>Habitación Superior</li>

                            </ol>
                            </div>
                             </div>


                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8 text-center description">
                                        <h2>Habitación doble</h2>
                                        <hr>
                                            <div id="carousel-habitaciones" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner room-slider">
                                                    <div class="item active">
                                                        <img class="img-responsive" src="img/doble1.jpg" alt="">
                                                    </div>
                                                    <div class="item">
                                                        <img class="img-responsive" src="img/doble.jpg" alt="">
                                                    </div>
                                                    <div class="item">
                                                        <img class="img-responsive" src="img/doble3.png" alt="">
                                                    </div>
                                                </div>

                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-habitaciones" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-habitaciones" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                </a>
                                            </div>
                                            <hr>
                                            <p>En nuestras habitaciones<strong> standard</strong> disfrutará de todo el equipamiento
                                            y comodidades que su estancia en Granada merece.</p>

                                            <!-- Call to Action Section -->
                                        <div class="well">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <p>
                                                        Aplique su código de promoción a esta habitación o elija entre las diferentes excursiones que le recomendamos
                                                        durante el proceso de reserva.

                                                    </p>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="index.php?page=reserve&step=availability" class="btn btn-default"><span class="glyphicon glyphicon-calendar"></span><strong>Realice su reserva</strong></a>
                                                </div>
                                            </div>
                                        </div>

                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>
                                </div>
                                <!--<div class="row">


                                    </div>-->
                            </div>


                            <div class="row">
                                <div class="col-sm-6 text-center description">
                                    <h1>Habitación superior</h1>
                                    <p>Disfrute de una<strong> magnifica vista de Plaza Nueva</strong> y
                                        el centro de Granada desde nuestras habitaciones superiores.</p>
                                     <div class="btn btn-default btn-sm" href="#">Galeria</div>
                                </div>
                                <div class="col-sm-6">

                                </div>
                            </div>
                        </div>
                </section>';
                break;
        }
    }
}