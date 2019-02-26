<?php
require_once 'traitAdditionalServices.php';

class tariffBasic extends AbstractTariff
{
    use traitAdditionalServices;

    protected $pricePerKm = 10;
    protected $pricePerMin = 3;
    protected $ratio = 1;

    public function theCostAtTheRateOf($data)
    {
        if (18 <= $data['age'] && $data['age'] <= 21) {
            $this->ratio += $this->ratio * 0.1;
        }

        $result = ($data['distance'] * $this->pricePerKm + $data['time'] * $this->pricePerMin) * $this->ratio;

        if ($data['gps']) {
            $result += $this->Gps($data['time']);
        }

        return $result;
    }

}