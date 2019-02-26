<?php

class tariffHourly extends AbstractTariff
{
    use traitAdditionalServices;

    protected $pricePerKm = 0;
    protected $pricePerMin = 200;
    protected $ratio = 1;

    public function theCostAtTheRateOf($data)
    {
        $data['time'] = ceil($data['time']) . '<br>';

        if (18 <= $data['age'] && $data['age'] <= 21) {
            $this->ratio += $this->ratio * 0.1;
        }

        $result = ($data['distance'] * $this->pricePerKm + $data['time'] * $this->pricePerMin) * $this->ratio;

        if ($data['gps']) {
            $result += $this->Gps($data['time'] * 60);
        }

        if ($data['driver']) {
            $result = $this->Driver($result);
        }

        return $result;
    }

}