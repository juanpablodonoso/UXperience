<?php
include_once '../resources/views/intranet/LoginView.php';
include_once '../resources/views/intranet/IntranetHead.php';
include_once '../resources/views/intranet/DashboardView.php';
include_once '../resources/views/intranet/IntranetNav.php';
include_once '../resources/views/intranet/IntranetFooter.php';
include_once '../app/controllers/LoginController.php';

class IntranetController{
    function print_page(){
        session_start();
        $head = new IntranetHead();

        if(isset($_SESSION['expire']) && time()>$_SESSION['expire']){
            session_unset();
            session_destroy();
        }

        echo '<!DOCTYPE html>
        <html lang="es">';
        //Si el usuario ya ha iniciado sesión
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            $head->print_head();
            $nav = new IntranetNav();
            echo'<body>';
            $nav->print_nav();

            if(isset($_GET['action']) && $_GET['action']=='logout'){
                session_destroy();
                session_unset();
                header("Location: /?page=intranet");
                exit();
            }

            if(isset($_GET['section'])){

            }
            else{
                $dashboard = new DashboardView();
                $dashboard->print_dashboard();
            }

            $footer = new IntranetFooter();
            $footer->print_footer();
            echo'</body>';
        }
        else{
            //Si la acción es iniciar sesión
            if(isset($_POST['action']) && $_POST['action']=='login'){
                $login = new LoginController();
                $logged = $login->get_login($_POST['email'],$_POST['password']);
                if($logged){
                    header("Location: /?page=intranet");
                    exit();
                }
                else{
                    //Abria que mostrar que ha habido un error
                    header("Location: /?page=intranet");
                    exit();
                }
            }
            else {
                $head->print_head();
                $login = new LoginView();
                $login->print_login();
            }
        }
        echo '</html>';
    }
}