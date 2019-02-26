<?php

trait traitAdditionalServices
{
    public function Gps($time)
    {
        return ceil($time / 60) * 15;
    }

    public function Driver()
    {
        return 100;
    }
}