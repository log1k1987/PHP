<?php

class tariffDaily extends AbstractTariff
{
    use traitAdditionalServices;

    protected $pricePerKm = 1;
    protected $pricePerMin = 1000;
    protected $ratio = 1;

    public function theCostAtTheRateOf($data)
    {
        if (($data['time'] * 60 * 24) % 1440 > 30) {
            $data['time'] = ceil($data['time']) . '<br>';
        }

        if (18 <= $data['age'] && $data['age'] <= 21) {
            $this->ratio += $this->ratio * 0.1;
        }

        $result = ($data['distance'] * $this->pricePerKm + $data['time'] * $this->pricePerMin) * $this->ratio;

        if ($data['gps']) {
            $result += $this->Gps($data['time'] * 60 * 24);
        }

        if ($data['driver']) {
            $result = $this->Driver($result);
        }

        return $result;
    }
}