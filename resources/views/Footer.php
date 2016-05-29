<?php
    class Footer{
        function print_footer(){
            echo '<footer class="container-fluid footer" id="footer">
                    <div class="row">
                        <div class="col-md-6">
                         <form class="form-inline">
                              <div class="form-group">
                                <label class="control-label col-sm-3" for="emailNotificationsInput">Nuestras novedades en tu email</label>
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control" id="exampleInputName2" placeholder="email">
                                </div>
                                 <button type="submit" class="btn btn-default btn-sm">Confirmar</button>
                              </div>
                         </form>

                         </div>

                        <div class="col-md-6 footer-social">
                            <div class="col-sm-4">
                            <p>Consulta nuestras redes sociales</p>
                            </div>
                            <div class="row">
                            <div class="col-sm-2">
                                <i class="fa fa-facebook"></i>
                                <p>Facebook</p>
                            </div>
                            <div class="col-sm-2">
                               <i class="fa fa-twitter"></i>
                               <p>Twitter</p>
                            </div>
                            </div>

                        </div>
                        </div>
                    <hr>
                    <div class="row">

                        <div class="col-md-4 footer-right">
                            <h4>Contacto</h4>
                        <hr>
                            <div>
                                <i class="fa fa-map-marker"></i>
                                <p><span>c/ Imprenta Nº2</span> 18010 Granada, España</p>
                            </div>
                            <div>
                                <i class="fa fa-phone"></i>
                                <p>+34 958 215 273</p>
                            </div>
                            <div>
                                <i class="fa fa-fax"></i>
                                <p>+34 958 225 765</p>
                            </div>
                            <div>
                                <i class="fa fa-envelope"></i>
                                <p><a href="mailto:info@hotel-plazanueva.com">info@hotel-plazanueva.com</a></p>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <h4>Enlaces</h4>
                            <hr>
                            <ul class="footer-links">
                                <li><a href="index.php?page=promotions">Promociones</a></li>
                                <li><a href="index.php?page=rooms">· Habitaciones</a></li>
                                <li><a href="index.php#service">· Servicios</a></li>
                                <li><a href="index.php?page=gallery">· Galería</a></li>
                                <li><a href="index.php?page=contact">· Contacto y ubicación</a></li>
                                <li><a href="index.php?page=opinions">· Opiniones</a></li>
                                <li><a href="index.php?page=myreserve">· Mi reserva</a></li>
                                <li><a href="index.php?page=intranet">· Intranet</a></li>
                            </ul>
                        </div>


                    <div class="col-md-4 facebook-plugin">
                        <div class="fb-page" data-href="https://es-la.facebook.com/granadaturismo/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="https://es-la.facebook.com/granadaturismo/">
                        <a href="https://es-la.facebook.com/granadaturismo/">Granada Turismo</a>
                        </blockquote>
                        </div>
                        </div>
                    </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-12 company">
                            <p class="footer-company-name">Desarrollado con <i class="fa fa-fw fa-coffee"></i> y <i class="fa fa-fw fa-heart"></i> por José Conejero y Pablo Lara</p>
                        </div>
                    </div>
                </footer>';
        }
    }
?>