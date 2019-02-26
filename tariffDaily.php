<?php

class tariffDaily extends AbstractTariff
{
    use traitAdditionalServices;

    protected $pricePerKm = 1;
    protected $pricePerMin = 1000;

    public function __construct($data)
    {
        if (($data['time'] * 60 * 24) % 1440 > 30) {
            $data['time'] = ceil($data['time']) . '<br>';
        }

        if ($data['driver']) {
            $this->result += $this->Driver();
        }

        $this->data = $data;
    }

}