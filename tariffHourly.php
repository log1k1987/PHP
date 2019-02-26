<?php

class tariffHourly extends AbstractTariff
{
    use traitAdditionalServices;

    protected $pricePerKm = 0;
    protected $pricePerMin = 200;

    public function __construct($data)
    {
        if ($data['driver']) {
            $this->result += $this->Driver();
        }

        $data['time'] = ceil($data['time']) . '<br>';
        $this->data = $data;
    }

}
