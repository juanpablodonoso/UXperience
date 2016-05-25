<?php

class ReserveView
{
    function print_reserve(){
        echo '
        <div class="container">
            <div class="row bs-wizard" style="border-bottom:0;">
                <div class="col-xs-3 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum"><strong>Selecciona tu habitación</strong></div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>
                
                <div class="col-xs-3 bs-wizard-step complete"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum">Introduce tus datos</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>
                
                <div class="col-xs-3 bs-wizard-step active"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum">Confirmación</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>
                
                <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
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