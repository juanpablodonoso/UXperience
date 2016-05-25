<?php

class GalleryView{

    function print_gallery(){
        
        echo '
        <!-- Banner -->
        <section class="parallax-galery">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Galería</h1>
                </div>
            </div>
        </div>
        </section>
        
        <section>
            <div class="container-fluid">
                <div class="row padding">
                    <div class="col-sm-4">
                        <div class="responsive">
                            <div class="img">
                                <img src="img/doble.jpg" alt="doble" >
                                <div class="desc">Habitación doble</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="responsive">
                            <div class="img">
                                <img src="img/doble1.jpg" alt="doble1">
                                <div class="desc">Habitación doble</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="responsive">
                            <div class="img">
                                <img src="img/doble3.png" alt="doble3">
                                <div class="desc">Habitación Doble</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row padding">
                    <div class="col-sm-4">
                        <div class="responsive">
                            <div class="img">
                                <img src="img/triple.jpg" alt="triple">
                                <div class="desc">Habitación triple</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="responsive">
                            <div class="img">
                                <img src="img/superior.jpg" alt="superior">
                                <div class="desc">Habitación superior</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="responsive">
                            <div class="img">
                                <img src="img/superior1.jpg" alt="superior1">
                                <div class="desc">Habitación superior</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row padding">
                    <div class="col-sm-4">
                        <div class="responsive">
                            <div class="img">
                                <img src="img/Hamman.1800.jpg" alt="hamman">
                                <div class="desc">Hamman</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="responsive">
                            <div class="img">
                                <img src="img/patio.jpg" alt="patio">
                                <div class="desc">Patio</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="responsive">
                            <div class="img">
                                <img src="img/fachada.jpeg" alt="fachada">
                                <div class="desc">Fachada</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row padding">
                        <div class="col-sm-4">
                            <div class="responsive">
                                <div class="img">
                                    <img src="img/s3.png" alt="buffet">
                                    <div class="Buffet">Patio interior</div>
                                </div>
                            </div>
                        </div>
                    <div class="col-sm-4">
                        <div class="responsive">
                            <div class="img">
                                <img src="img/s2.png" alt="servicios">
                                <div class="desc">Servicios</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="responsive">
                            <div class="img">
                                <img src="img/s1.png" alt="servicios">
                                <div class="desc">Servicios</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row padding">
                    <div class="col-sm-4">
                        <div class="responsive">
                            <div class="img">
                                <img src="img/3.jpg" alt="patioi">
                                <div class="Patio interior">Patio interior</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="responsive">
                            <div class="img">
                                <img src="img/patio_interior.png" alt="patio">
                                <div class="desc">Patio interior</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="clearfix"></div>

            <!-- The Modal -->
            <div id="myModal" class="modal">
                <span class="close">×</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
        </section>';
    }
}

?>