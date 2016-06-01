<?php
include_once '../app/models/Reserve.php';
class MyReserveView{
    function print_form(){
        echo '
            <section style="margin-bottom: 20px">
                <div class="container-fluid nopadding">
                    <div class="row" id="myreserve-title" style="padding-left: 100px">
                        <div class="col-sm-12 nopadding">
                            <h1>Introduce los datos de tu reserva</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <form role="form" name="myreserveform" id="myreserveform" method="POST" action="?page=myreserve">
                        <div class="row section">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control input-lg input-style" id="email" name="email">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="reserve_code">Código de reserva</label>
                                    <input class="form-control input-lg input-style" id="reserve_code" name="reserve_code">
                                </div>
                            </div>
                            <div class="col-sm-2" style="padding-top: 40px">
                                <button class="button btn-lg" style="text-align: center">Ver</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>';
    }
    
    function print_my_reserve($reserve){
        echo '
            <section style="margin-bottom: 20px">
                <div class="container-fluid nopadding">
                    <div class="row" id="myreserve-title" style="padding-left: 100px">
                            <div class="col-sm-12 nopadding">
                                <h1>Resumen</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row" id="final_summary">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p><strong>Fecha de entrada:</strong> '.$reserve->starting_date.'</p>
                                    <p><strong>Fecha de salida:</strong> '.$reserve->ending_date.'</p>
                                    <p><strong>Número de adultos:</strong> '.$reserve->adults_number.'</p>
                                    <p><strong>Número de niños:</strong> '.$reserve->children_number.'</p>
                                </div>
                                <div class="col-sm-6">
                                    <p><strong>Nombre:</strong> '.$reserve->name.'</p>
                                    <p><strong>Apellidos:</strong> '.$reserve->surname.'</p>
                                    <p><strong>Ciudad:</strong> '.$reserve->city.'</p>
                                    <p><strong>Dirección:</strong> '.$reserve->address.'</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p><strong>Habitaciones seleccionadas:</strong></p>
                                    <div id="selected">';
                                        foreach ($reserve->reserved_rooms as $type=>$number){
                                            echo'<p style="font-size: 1em;margin-left: 20px">-'.$type.': '.$number;
                                        }
                                        echo '               
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p><strong>TOTAL: '.$reserve->total_amount.'<span class="glyphicon glyphicon-euro"/></strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>';
    }
}