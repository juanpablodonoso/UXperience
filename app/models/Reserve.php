<?php

class Reserve {
    var $id;
    var $starting_date;
    var $ending_date;
    var $rooms_number;
    var $adults_number;
    var $children_number;
    var $promotion_code;
    var $name;
    var $surname;
    var $phone;
    var $email;
    var $observations;
    var $cardholder;
    var $card_type;
    var $card_number;
    var $card_expiration_month;
    var $card_expiration_year;
    var $card_cvc;
    var $reserved_rooms;
    var $assigned_rooms;

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
    public function getStartDate()
    {
        return $this->starting_date;
    }

    /**
     * @param mixed $start_date
     */
    public function setStartingDate($starting_date)
    {
        $this->starting_date = $starting_date;
    }

    /**
     * @return mixed
     */
    public function getEndingDate()
    {
        return $this->ending_date;
    }

    /**
     * @param mixed $end_date
     */
    public function setEndingDate($ending_date)
    {
        $this->ending_date = $ending_date;
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

    /**
     * @return mixed
     */
    public function getAdultsNumber()
    {
        return $this->adults_number;
    }

    /**
     * @param mixed $adults_number
     */
    public function setAdultsNumber($adults_number)
    {
        $this->adults_number = $adults_number;
    }

    /**
     * @return mixed
     */
    public function getChildrenNumber()
    {
        return $this->children_number;
    }

    /**
     * @param mixed $children_number
     */
    public function setChildrenNumber($children_number)
    {
        $this->children_number = $children_number;
    }

    /**
     * @return mixed
     */
    public function getPromotionCode()
    {
        return $this->promotion_code;
    }

    /**
     * @param mixed $promotion_code
     */
    public function setPromotionCode($promotion_code)
    {
        $this->promotion_code = $promotion_code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * @param mixed $observations
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;
    }

    /**
     * @return mixed
     */
    public function getCardholder()
    {
        return $this->cardholder;
    }

    /**
     * @param mixed $cardholder
     */
    public function setCardholder($cardholder)
    {
        $this->cardholder = $cardholder;
    }

    /**
     * @return mixed
     */
    public function getCardType()
    {
        return $this->card_type;
    }

    /**
     * @param mixed $card_type
     */
    public function setCardType($card_type)
    {
        $this->card_type = $card_type;
    }

    /**
     * @return mixed
     */
    public function getCardNumber()
    {
        return $this->card_number;
    }

    /**
     * @param mixed $card_number
     */
    public function setCardNumber($card_number)
    {
        $this->card_number = $card_number;
    }

    /**
     * @return mixed
     */
    public function getCardExpirationMonth()
    {
        return $this->card_expiration_month;
    }

    /**
     * @param mixed $card_expiration
     */
    public function setCardExpirationMonth($card_expiration_month)
    {
        $this->card_expiration = $card_expiration_month;
    }

    /**
     * @return mixed
     */
    public function getCardExpirationYear()
    {
        return $this->card_expiration_year;
    }

    /**
     * @param mixed $card_expiration
     */
    public function setCardExpirationYear($card_expiration_year)
    {
        $this->card_expiration = $card_expiration_year;
    }

    /**
     * @return mixed
     */
    public function getCardCvc()
    {
        return $this->card_cvc;
    }

    /**
     * @param mixed $card_cvc
     */
    public function setCardCvc($card_cvc)
    {
        $this->card_cvc = $card_cvc;
    }

    /**
     * @return mixed
     */
    public function getReservedRooms()
    {
        return $this->reserved_rooms;
    }

    /**
     * @param mixed $reserved_rooms
     */
    public function setReservedRooms($reserved_rooms)
    {
        $this->reserved_rooms = $reserved_rooms;
    }

    /**
     * @return mixed
     */
    public function getAssignedRooms()
    {
        return $this->assigned_rooms;
    }

    /**
     * @param mixed $associated_rooms
     */
    public function setAssignedRooms($assigned_rooms)
    {
        $this->assigned_rooms = $assigned_rooms;
    }

}