<?php
include_once '../resources/views/ContactView.php';
include_once '../resources/views/Footer.php';
include_once '../resources/views/GalleryView.php';
include_once '../resources/views/Head.php';
include_once '../resources/views/HomeView.php';
include_once '../resources/views/Nav.php';
include_once '../resources/views/PromotionsView.php';
include_once '../resources/views/RoomsView.php';
include_once '../resources/views/ReserveView.php';

class PublicController{
    function print_page(){
        echo'<!DOCTYPE html>
        <html lang="es">';
        $page = $_GET['page'];
        $head = new Head();
        $nav = new Nav();
        $footer = new Footer();

        $head->print_head($page);
        echo '<body>';
        $nav->print_nav();

        switch ($page) {
            case 'promotions':
                $promotions = new PromotionsView();
                $promotions->print_promotions();
                break;
            case 'rooms':
                $rooms = new RoomsView();
                $rooms->print_all_rooms();
                break;
            case 'double-room':
            case 'triple-room':
            case 'superior-room':
                $rooms = new RoomsView();
                $rooms->print_room($page);
                break;
            case 'gallery':
                $gallery = new GalleryView();
                $gallery->print_gallery();
                break;
            case 'contact':
                $contact = new ContactView();
                $contact->print_contact();
                break;
            case 'reserve':
                if(isset($_GET['step'])){
                    $reserve = new ReserveView();
                    $step = $_GET['step'];
                    $reserve->print_reserve($step);
                }
                break;
            default:
                $home = new HomeView();
                $home->print_home();
                break;
        }

        $footer->print_footer();

        echo '</body>
        </html>';
    }
}