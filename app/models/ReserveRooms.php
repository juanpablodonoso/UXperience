<?php

class ReserveRooms
{
    var $id;
    var $reserve_id;
    var $roomtype_id;
    var $rooms_number;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getReserveId()
    {
        return $this->reserve_id;
    }

    /**
     * @param mixed $reserve_id
     */
    public function setReserveId($reserve_id)
    {
        $this->reserve_id = $reserve_id;
    }

    /**
     * @return mixed
     */
    public function getRoomtypeId()
    {
        return $this->roomtype_id;
    }

    /**
     * @param mixed $roomtype_id
     */
    public function setRoomtypeId($roomtype_id)
    {
        $this->roomtype_id = $roomtype_id;
    }

    /**
     * @return mixed
     */
    public function getRoomsNumber()
    {
        return $this->rooms_number;
    }

    /**
     * @param mixed $rooms_number
     */
    public function setRoomsNumber($rooms_number)
    {
        $this->rooms_number = $rooms_number;
    }
}