<?php
include_once 'HomeView.php';
include_once 'RoomsView.php';
include_once 'PromotionsView.php';
include_once 'GalleryView.php';
include_once 'ContactView.php';

class Content{

    //Function that prints home's page
    function print_home(){
        $home = new HomeView();
        $home->print_home();
    }
    
    //This functions prints promotion's page
    function print_promotions(){
        $promotions = new PromotionsView();
        $promotions->print_promotions();
    }

    //This function prints Rooms's page
    function print_all_rooms(){
        $rooms = new RoomsView();
        $rooms->print_all_rooms();
    }

    //This function prints a specific room page
    function print_room($page){
        $rooms = new RoomsView();
        $rooms->print_room($page);
    }

    //This funciton prints Galery's page
    function print_gallery(){
        $gallery = new GalleryView();
        $gallery->print_gallery();
    }

    //This function prints contact's page
    function print_contact(){
        $contact = new ContactView();
        $contact->print_contact();
    }
}


?>