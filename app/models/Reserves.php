<?php
include_once '../app/models/Roomtype.php';
include_once '../app/models/Roomtypes.php';
include_once '../app/models/Reserve.php';
include_once '../app/models/Model.php';
include_once '../app/Db.php';

class Reserves extends Model{
    function all(){
        $list = array();
        $statement = 'SELECT * FROM reserves';
        $result = Db::getInstance()->query($statement);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $reserve = new Reserve();
                $this->silentSave($reserve, $row);
                array_push($list,$reserve);
            }
        }

        return $list;
    }

    function find($id){
        $db = Db::getInstance();
        $statement = 'SELECT * FROM reserves WHERE id = \''.$id.'\'';
        $result = $db->query($statement);
        $reserve = null;
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $reserve = new Reserve();
            $this->silentSave($reserve, $row);
        }
        return $reserve;
    }

    function delete($id){
        $statement = 'DELETE * FROM reserves WHERE id = \''.$id.'\'';
        return Db::getInstance()->query($statement);
    }

    function update($reserve){

    }

    function save($reserve){
        $db = Db::getInstance();
        return $db->query("INSERT INTO reserves (id, starting_date, ending_date, adults_number, children_number,
                            promotion_code, name, surname, phone, email, observations, cardholder, card_number, card_type, card_expiration_month,
                            card_expiration_year, card_cvc, created_at, updated_at)
                          VALUES ('','{$reserve->getStartingDate()}','{$reserve->getEndingDate()}','{$reserve->getRoomsNumber()}',
                          '{$reserve->getAdultsNumber()}', '{$reserve->getChildrenNumber()}','{$reserve->getPromotionCode()}'
                          '{$reserve->getName()}','{$reserve->getSurname()}','{$reserve->getPhone()}'
                          '{$reserve->getEmail()}','{$reserve->getObservations()}','{$reserve->getCardholder()}',
                          '{$reserve->getCardType()}','{$reserve->getCardNumber()}','{$reserve->getCardExpirationMonth()}',
                          '{$reserve->getCardExpirationYear()}','{$reserve->getCardCvc()}',NULL,NULL)");
    }

    function allByDate($starting_date, $ending_date){
        $statement = 'SELECT * FROM reserves WHERE ending_date > \''.$starting_date.'\' AND starting_date < \''.$ending_date.'\'';
        $result = Db::getInstance()->query($statement);
        $list = null;
        if($result->num_rows > 0){
            $list = array();
            while($row = $result->fetch_assoc()){
                $reserve = new Reserve();
                $this->silentSave($reserve, $row);
                array_push($list,$reserve);
            }
        }

        return $list;
    }

    private function silentSave($reserve,$row){
        $reserve->setId($row['id']);
        $reserve->setStartingDate($row['starting_date']);
        $reserve->setEndingDate($row['ending_date']);
        $reserve->setRoomsNumber($row['rooms_number']);
        $reserve->setAdultsNumber($row['adults_number']);
        $reserve->setChildrenNumber($row['children_number']);
        $reserve->setPromotionCode($row['promotion_code']);
        $reserve->setName($row['name']);
        $reserve->setSurname($row['surname']);
        $reserve->setPhone($row['phone']);
        $reserve->setEmail($row['email']);
        $reserve->setObservations($row['observations']);
        $reserve->setCardholder($row['cardholder']);
        $reserve->setCardType($row['card_type']);
        $reserve->setCardNumber($row['card_number']);
        $reserve->setCardExpirationMonth($row['card_expiration_month']);
        $reserve->setCardExpirationYear($row['card_expiration_year']);
        $reserve->setCardCvc($row['card_cvc']);

        //Obtengo la(s) habitacion(es) asociada(s) a la reserva
        $statement = 'SELECT * FROM reserves_rooms WHERE reserve_id = \''.$row['id'].'\'';
        $result = Db::getInstance()->query($statement);

        $list = null;
        if($result->num_rows > 0){
            $roomtypes = new Roomtypes();
            while($row = $result->fetch_assoc()){
                $roomtype = $roomtypes->find($row['roomtype_id']);
                $list[$roomtype->getName()] = $row['rooms_number'];
            }
        }

        $reserve->setReservedRooms($list);
    }
}