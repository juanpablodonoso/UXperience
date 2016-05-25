<?php
class RoomsView{
    //This function prints Rooms's page
    function print_all_rooms(){

        echo '
        <!-- Banner -->
        <section class="parallax-room">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Habitaciones</h1>
                </div>
            </div>
        </section>
        <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center description">
                    <h1>Habitación doble</h1>
                    <p>En nuestras habitaciones<strong> standard</strong> disfrutará de todo el equipamiento
                        y comodidades que su estancia en Granada merece.</p>
                </div>
                <div class="col-sm-6">
                    <figure>
                        <img class="img-responsive" src="img/doble.jpg" alt="Habitación doble">
                    </figure>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <figure>
                        <img class="img-responsive" src="img/triple.jpg" alt="Habitación triple">
                    </figure>
                </div>
                <div class="col-sm-6 text-center description">
                    <h1>Habitación triple</h1>
                    <p>En nuestras <strong>habitaciones triples</strong> podrá disfrutar de sus vacaciones
                        en familia o con amigos en el centro de Granada.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 text-center description">
                    <h1>Habitación superior</h1>
                    <p>Disfrute de una<strong> magnifica vista de Plaza Nueva</strong> y
                        el centro de Granada desde nuestras habitaciones superiores.</p>
                </div>
                <div class="col-sm-6">
                    <figure>
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
                                <div class="col-sm-6 text-center description">
                                    <h1>Habitación doble</h1>
                                    <p>En nuestras habitaciones<strong> standard</strong> disfrutará de todo el equipamiento
                                        y comodidades que su estancia en Granada merece.</p>
                                </div>
                                <div class="col-sm-6">
                                    <figure>
                                        <img class="img-responsive" src="img/doble.jpg" alt="Habitación doble">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </section>';
                break;
            case 'triple-room':
                echo '<section class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 text-center description">
                                    <h1>Habitación triple</h1>
                                    <p>En nuestras <strong>habitaciones triples</strong> podrá disfrutar de sus vacaciones
                                        en familia o con amigos en el centro de Granada.</p>
                                </div>
                                <div class="col-sm-6">
                                    <figure>
                                        <img class="img-responsive" src="img/triple.jpg" alt="Habitación triple">
                                    </figure>
                                </div>
                            </div>
                        </div>
                </section>';
                break;
            case 'superior-room':
                echo '<section class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 text-center description">
                                    <h1>Habitación superior</h1>
                                    <p>Disfrute de una<strong> magnifica vista de Plaza Nueva</strong> y
                                        el centro de Granada desde nuestras habitaciones superiores.</p>
                                </div>
                                <div class="col-sm-6">
                                    <figure>
                                        <img class="img-responsive" src="img/superior.jpg" alt="Habitación superior">
                                    </figure>
                                </div>
                            </div>
                        </div>
                </section>';
                break;
        }
    }
}