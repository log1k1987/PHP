<?php

abstract class AbstractTariff implements interfaceTariff
{
    protected $can = true;
    protected $ratio = 1;
    protected $result;
    protected $data;

    public function theCostAtTheRateOf()
    {
        if ($this->can) {
            if (18 <= $this->data['age'] && $this->data['age'] <= 21) {
                $this->ratio += $this->ratio * 0.1;
            }

            $this->result += ($this->data['distance'] * $this->pricePerKm + $this->data['time'] * $this->pricePerMin) * $this->ratio;

            if ($this->data['gps']) {
                $this->result += $this->Gps($this->data['time']);
            }

        }
        return $this->result;
    }
}
