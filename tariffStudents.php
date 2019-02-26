<?php

class tariffStudents extends AbstractTariff
{
    use traitAdditionalServices;

    protected $pricePerKm = 4;
    protected $pricePerMin = 1;

    public function __construct($data)
    {
        if ($data['age'] > 25) {
            $this->can = false;//
            $this->result = 'Вы уже не студент';
        } else {
            $this->data = $data;
        }
    }

}