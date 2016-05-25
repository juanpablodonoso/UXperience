<?php

class DashboardView {

    public function print_dashboard(){
        $dashboard_elems = [
            "?page=intranet&section=reserves" => ["calendar", "Reservas",["admin","recepcionist"]],
            "?page=intranet&section=reserves&action=create" => ["deployment", "Realizar reserva",["admin","recepcionist"]],
            "?page=intranet&section=promotions" => ["add_database", "Promociones",["admin"]],
            "?page=intranet&section=promotions&action=create" => ["add_database", "Crear promocion",["admin"]],
            "?page=intranet&section=rooms" => ["add_database", "Habitaciones",["admin"]],
            "?page=intranet&section=rooms&action=create" => ["add_database", "Crear habitación",["admin"]],
            "?page=intranet&section=users" => ["address_book", "Usuarios",["admin"]],
            "?page=intranet&section=users&action=create" => ["key", "Crear usuario",["admin"]]
        ];
        $i=1;

        echo'
        <div class="container">
            <div class="row padded">
                <div class="col s12">
                    <div class="row">
                        <div class="col s12">
                            <h1 class="grey-text text-darken-4">Bienvenido a tu panel, '.$_SESSION['name'].'</h1>
                            <h5 class="grey-text text-darken-1">¿Qué deseas hacer?</h5>
                        </div>
                    </div>
                    <div class="row">';
                        foreach($dashboard_elems as $url => $elem) {
                            $can_see = true;
                            foreach ($elem[2] as $role) {
                                //(Entrust::hasRole($role)) ? $can_see = true : null;
                            }
                            if ($can_see) {
                                if ($i % 4 == 0) echo '<div class="row">';
                                echo '<a href="'.$url.'">
                                    <div class="col s12 m4 l3 dashboard-item">
                                        <div class="dashboard-item-icon">
                                            <img src="/components/flat-color-icons/svg/'.$elem[0].'.svg">
                                        </div>
                                        <div class="dashboard-item-text center-align uppercase">'.$elem[1].'
                                        </div>
                                    </div>
                                </a>';
                                if ($i % 4 == 0) echo '</div>';
                                $i++;
                            }
                        }
                    echo'
                    </div>
                </div>
            </div>
        </div>';
    }
}