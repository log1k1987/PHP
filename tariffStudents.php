<?php

class tariffStudents extends AbstractTariff
{
    use traitAdditionalServices;

    protected $pricePerKm = 4;
    protected $pricePerMin = 1;
    protected $ratio = 1;

    public function theCostAtTheRateOf($data)
    {
        if ($data['age'] > 25) {
            return 'Вы уже не студент';
        }

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