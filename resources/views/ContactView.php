<?php

class ContactView{
    function print_contact(){
        echo '<section class="parallax-contact">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Contacto y ubicación</h1>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 center-align">
                                <h1>¿En qué podemos ayudarte?</h1>
                            </div>
                        </div>
                        <div class="row section">
                            <div class="col-sm-12">
                                <form  role="form" name="myForm" onsubmit="return validate(\'myForm\')" method="POST" action="../../resources/scripts/email.php">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg input-style" id="name" name="name" placeholder="Nombre" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control input-lg input-style" id="email" name="email" placeholder="E-mail" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control input-lg input-style" id="phone" name="fphone" placeholder="Teléfono">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form-control input-lg noresize input-style" rows="5" id="comment" name="message" placeholder="Mensaje" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="button btn-lg" style="text-align: center">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 nopadding">
                                <div class="map" id="googleMap"></div>
                            </div>
                        </div>
                    </div>
                </section>';
}
}
?>