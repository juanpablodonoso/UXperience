<?php
include_once '../app/controllers/Controller.php';
include_once '../app/models/Reserve.php';
include_once '../app/models/Reserves.php';
include_once '../app/models/Rooms.php';
include_once '../app/models/Roomtype.php';
include_once '../app/models/Roomtypes.php';
include_once '../app/models/ReserveRooms.php';
include_once '../app/models/ReservesRooms.php';

class ReservesController
{
    function publicStore(){
        $reserve = new Reserve();
        $this->silentSave($reserve);
        $reserves = new Reserves();
        $id = $reserves->save($reserve);
        if($id != null){
            $this->insertReservedRooms($id);
            header("Location: /?page=reserve&step=summary");
        }
        else{
            header("Location: /?page=reserve&step=confirm");
        }
    }

    private function silentSave($reserve){
        $reserve->setStartingDate($_POST['starting_date_submit']);
        $reserve->setEndingDate($_POST['ending_date_submit']);
        $reserve->setAdultsNumber($_POST['adults_number']);
        $reserve->setChildrenNumber($_POST['children_number']);
        $reserve->setPromotionCode($_POST['promotion_code']);
        $reserve->setName($_POST['name']);
        $reserve->setSurname($_POST['surname']);
        $reserve->setEmail($_POST['email']);
        $reserve->setObservations($_POST['observations']);
        $reserve->setAddress($_POST['address']);
        $reserve->setCity($_POST['city']);
        $reserve->setPhone($_POST['phone']);
        $reserve->setCardholder($_POST['cardholder']);
        $reserve->setCardType($_POST['card_type']);
        $reserve->setCardNumber($_POST['card_number']);
        $reserve->setCardExpirationMonth($_POST['card_expiration_month']);
        $reserve->setCardExpirationYear($_POST['card_expiration_year']);
        $reserve->setCardCvc($_POST['card_cvc']);
        $reserve->setTotalAmount($_POST['total_amount_submit']);
        
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

    function findByEmailCode($email,$code){
        $reserves = new Reserves();
        $reserve = $reserves->findByEmailCode($email,$code);
        return $reserve;
    }

    function insertReservedRooms($id){
        if($_POST['select_Individual'] != 0){
            $reserverooms = new ReserveRooms();
            $reserverooms->setReserveId($id);
            $reserverooms->setRoomtypeId(1);
            $reserverooms->setRoomsNumber(intval($_POST['select_Individual']));

            $reservesrooms = new ReservesRooms();
            $reservesrooms->save($reserverooms);
        }
        if($_POST['select_Doble'] != 0){
            $reserverooms = new ReserveRooms();
            $reserverooms->setReserveId($id);
            $reserverooms->setRoomtypeId(2);
            $reserverooms->setRoomsNumber(intval($_POST['select_Doble']));

            $reservesrooms = new ReservesRooms();
            $reservesrooms->save($reserverooms);
        }
        if($_POST['select_Triple'] != 0){
            $reserverooms = new ReserveRooms();
            $reserverooms->setReserveId($id);
            $reserverooms->setRoomtypeId(3);
            $reserverooms->setRoomsNumber(intval($_POST['select_Triple']));

            $reservesrooms = new ReservesRooms();
            $reservesrooms->save($reserverooms);
        }
        if($_POST['select_Familiar'] != 0){
            $reserverooms = new ReserveRooms();
            $reserverooms->setReserveId($id);
            $reserverooms->setRoomtypeId(4);
            $reserverooms->setRoomsNumber(intval($_POST['select_Familiar']));

            $reservesrooms = new ReservesRooms();
            $reservesrooms->save($reserverooms);
        }
    }

}