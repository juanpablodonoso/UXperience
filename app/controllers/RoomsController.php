<?php

class RoomsController extends Controller {
    public function index(){
        $rooms = Rooms::all();
        RoomsView::print_index($rooms);
    }

    public function create(){
        RoomsView::print_create();
    }

    public function store(){
        $room = new Room();
        $this->silent_save($room);
        Rooms::save($room);
    }

    public function show(){
        if(isset($_GET['id'])){
            $room = Rooms::find($_GET['id']);
            RoomsView::print_room($room);
        }
    }

    public function edit(){
        if(isset($_GET['id'])){
            $room = Rooms::find($_GET['id']);
            RoomsView::print_edit($room);
        }
    }

    public function update(){

    }

    public function delete(){

    }

    public function silent_save($room){

    }
}

?>