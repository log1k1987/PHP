<?php
require_once 'traitAdditionalServices.php';

class tariffBasic extends AbstractTariff
{
    use traitAdditionalServices;

    protected $pricePerKm = 10;
    protected $pricePerMin = 3;

    public function __construct($data)
    {
        $this->data = $data;
    }
}