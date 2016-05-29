<?php
include_once '../app/controllers/Controller.php';
include_once '../resources/views/intranet/IntranetReservesView.php';
include_once '../app/models/Reserve.php';
include_once '../app/models/Reserves.php';
include_once '../app/models/Rooms.php';
include_once '../app/models/Roomtype.php';
include_once '../app/models/Roomtypes.php';

class ReservesController extends Controller
{
    function index(){
        $reserves = new Reserves();
        $list = $reserves->all();
        IntranetReservesView::print_index($list);
    }

    function create(){
        IntranetReservesView::print_create();
    }

    function store(){

    }

    function show($id){

    }

    function edit($id){

    }

    function update($id){

    }

    function delete($id){

    }

    private function silent_save($reserve){

    }

    function getRoomsAvailable($starting_date, $ending_date){
        //Obtengo todas las reservas que cumplan que su fecha de salida sea menor que mi fecha de entrada
        //y su fecha de entrada sea mayor que mi fecha de salida
        $roomtypes = new Roomtypes();
        $typesList = $roomtypes->all();
        $occupied = null;
        $available = null;

        //Para cada tipo obtengo cuantas estan ocupadas
        if($typesList != null){
            $reserves = new Reserves();
            $reservesList = $reserves->allByDate($starting_date,$ending_date);
            $rooms = new Rooms();
            //Inicializo la lista con el tipo de habitaciones a 0
            foreach($typesList as $type){
                $typename = $type->getName();
                $occupied[$typename] = 0;
                foreach ($reservesList as $reserve){
                    if (array_key_exists($typename, $reserve->getReservedRooms())) {
                        $occupied[$typename] += $reserve->getReservedRooms()[$typename];
                    }
                }
                $available[$typename] = count($rooms->getByType($type->getId())) - $occupied[$typename];
            }
        }

        return $available;
    }
}