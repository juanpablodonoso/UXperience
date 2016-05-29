<?php
include_once '../app/controllers/ReservesController.php';
include_once '../app/models/Reserve.php';
include_once '../app/models/Room.php';
include_once '../app/models/Rooms.php';
include_once '../app/models/Roomtypes.php';


class ReserveView
{
    function print_reserve($step){
        $this->print_progress($step);
        switch ($step){
            case 'availability':
                $this->print_availability();
                break;
            case 'select_room':
                $this->print_select_room();
                break;
            case 'confirm':
                $this->print_confirm();
                break;
            case 'summary':
                $this->print_summary();
                break;
        }
    }

    private function print_availability(){
        echo '
            <section>
                <div class="container">
                    <div class="row select-room-title">
                        <div class="col-sm-12 nopadding">
                            <h1>¿Cuando quieres alojarte?</h1>
                        </div>
                    </div>
                    <form role="form" name="myForm" method="POST" action="?page=reserve&step=select_room">
                            <div class="row section">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="stating_date">Entrada</label>
                                        <input type="date" class="datepicker form-control input-lg input-style" id="starting_date" name="starting_date">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="ending_date">Salida</label>
                                        <input type="date" class="datepicker form-control input-lg input-style" id="ending_date" name="ending_date">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Adultos</label>
                                        <select class="form-control input-lg input-style" id="select_adults" name="select_adults">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Niños</label>
                                        <select class="form-control input-lg input-style" id="select_children" name="select_children">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div> 
                                <div class="col-sm-2 select-room-submit">
                                    <button class="button btn-lg" style="text-align: center">Siguiente</button>
                                </div>
                            </div>
                    </form>
                </div>
            </section>';
    }

    private function print_select_room(){
        session_start();
        $_SESSION['starting_date'] = $_POST['starting_date'];
        $_SESSION['ending_date'] = $_POST['ending_date'];
        $_SESSION['select_adults'] = $_POST['select_adults'];
        $_SESSION['select_children'] = $_POST['select_children'];

        $reserves = new ReservesController();
        $availables = $reserves->getRoomsAvailable($_POST['starting_date'],$_POST['ending_date']);//Obtengo para cada tipo el número de habitaciones disponibles
        $roomtypes = new Roomtypes();//Objeto contendor de tipos de habitaciones
        $roomtype_list = array();//Esta variable almaenara los tipos de habitaciones
        //Para cada tipo de habitacion obtengo su objeto para manejar la información relacionada a ella
        while($element = current($availables)) {
            $roomtype = $roomtypes->findByName(key($availables));
            array_push($roomtype_list,$roomtype);
            next($availables);
        }

        echo '
            <section>
                <div class="container">
                    <div class="row select-room-title">
                        <div class="col-sm-12 nopadding">
                            <h1>Selecciona tu habitación</h1>
                        </div>
                    </div>';
                    $available = false;
                    foreach ($availables as $type=>$number){
                        if($number > 0){
                            $available = true;
                        }
                    }
                    if($available){
                        echo'
                        <form role="form" name="myForm" method="POST" action="?page=reserve&step=confirm">
                            <div class="row table-room">
                                <div class="panel panel-default">
                                    <table class="table table-roomtypes"> 
                                        <thead> 
                                            <tr> 
                                                <th>Tipo</th> 
                                                <th>Precio</th> 
                                                <th>Cantidad</th> 
                                            </tr> 
                                        </thead> 
                                        <tbody>';
                                        foreach ($roomtype_list as $roomtype){
                                            if($availables[$roomtype->getName()] > 0){
                                                echo '
                                                <tr> 
                                                    <td>'.$roomtype->getName().'</td> 
                                                    <td>'.$roomtype->getPrice().'</td>
                                                    <td>
                                                        <select class="form-control input-lg input-style" id="select_'.$roomtype->getName().'" name="select_'.$roomtype->getName().'">';
                                                            echo '<option value="0">0</option>';
                                                            for($i=1;$i<=$availables[$roomtype->getName()];$i++){
                                                                echo '<option value="'.$i.'">'.$i.'</option>';
                                                            }
                                                    echo'
                                                        </select>
                                                    </td>
                                                </tr>';
                                            }
                                        }
                                        echo'
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row next">
                                <div class="col-sm-offset-10 col-sm-2">
                                    <button class="button btn-lg" style="text-align: center">Siguiente</button>
                                </div>
                            </div>
                        </form>';
                    }
                    else{
                        echo '
                        <div class="row">
                            <div class="col-sm-12 noroom-message text-center">
                                <h3>Lo sentimos, no tenemos habitaciones disponibles para estas fechas.</h3>
                            </div>
                        </div>';
                    }

            echo'   </div>
            </section>';
    }

    private function print_confirm(){
        session_start();
        $_SESSION['select_Individual'] = $_POST['select_Individual'];
        $_SESSION['select_Doble'] = $_POST['select_Doble'];
        $_SESSION['select_Triple'] = $_POST['select_Triple'];
        $_SESSION['select_Familiar'] = $_POST['select_Familiar'];

        echo '
            <section>
                <div class="container">
                    <div class="row select-room-title">
                        <div class="col-sm-12 nopadding">
                            <h1>Por favor, introduce tus datos personales</h1>
                        </div>
                    </div>
                    <form role="form" name="myForm" method="POST" action="?page=reserve&step=select_room">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Nombre</label>
                                        <input type="text" class="form-control input-lg input-style" id="name" name="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="surname">Apellidos</label>
                                        <input type="text" class="form-control input-lg input-style" id="surname" name="surname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Telefono</label>
                                        <input type="text" class="form-control input-lg input-style" id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="surname">E-mail</label>
                                        <input type="text" class="form-control input-lg input-style" id="email" name="email">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="surname">Observaciones (Opcional)</label>
                                        <textarea class="form-control input-lg noresize input-style" rows="5" id="observations" name="observations"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 garantia">
                                <h4>Garantía de reserva</h4>
                            </div>
                            <div class="row next">
                                <div class="col-sm-offset-10 col-sm-2">
                                    <button class="button btn-lg" style="text-align: center">Siguiente</button>
                                </div>
                            </div>
                    </form>
                </div>
            </section>';
    }

    private function print_summary(){

    }

    private function print_progress($step){
        switch ($step){
            case 'availability':
                $one = 'active';
                $second = 'disabled';
                $third = 'disabled';
                $fourth = 'disabled';
                break;
            case 'select_room':
                $one = 'complete';
                $second = 'active';
                $third = 'disabled';
                $fourth = 'disabled';
                break;
            case 'confirm':
                $one = 'complete';
                $second = 'complete';
                $third = 'active';
                $fourth = 'disabled';
                break;
            case 'summary':
                $one = 'complete';
                $second = 'complete';
                $third = 'complete';
                $fourth = 'complete';
                break;
        }

        echo '
        <div class="container-fluid steps">
            <div class="row bs-wizard" style="border-bottom:0;">
                <div class="col-xs-3 bs-wizard-step '.$one.'">
                  <div class="text-center bs-wizard-stepnum">Selecciona tu habitación</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>
                
                <div class="col-xs-3 bs-wizard-step '.$second.'">
                  <div class="text-center bs-wizard-stepnum">Introduce tus datos</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>
                
                <div class="col-xs-3 bs-wizard-step '.$third.'">
                  <div class="text-center bs-wizard-stepnum">Confirmación</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>
                
                <div class="col-xs-3 bs-wizard-step '.$fourth.'">
                  <div class="text-center bs-wizard-stepnum">Resguardo</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>
            </div>
        </div>
        </div>
        ';
    }
}